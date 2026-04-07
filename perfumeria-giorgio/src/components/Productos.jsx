import { useEffect, useRef, useState } from "react";
import "./Productos.css";
import { useCart } from "../context/CartContext";
import { obtenerProductos } from "../services/productosService";

function Productos() {
  const ref = useRef();
  const [visible, setVisible] = useState(false);
  const { addToCart } = useCart();

  // 🔥 NUEVOS ESTADOS
  const [productos, setProductos] = useState([]);
  const [loading, setLoading] = useState(true);

  // 🔹 ANIMACIÓN (NO SE TOCA)
  useEffect(() => {
    const observer = new IntersectionObserver(
      ([entry]) => {
        if (entry.isIntersecting) {
          setVisible(true);
        }
      },
      { threshold: 0.2 }
    );

    if (ref.current) observer.observe(ref.current);
    return () => observer.disconnect();
  }, []);

  // 🔥 TRAER PRODUCTOS DESDE GOOGLE SHEETS (CON DEBUG)
  useEffect(() => {
    console.log("Llamando API...");
    obtenerProductos()
      .then((data) => {
        console.log("DATA:", data);
        setProductos(data);
        setLoading(false);
      })
      .catch((error) => {
        console.error("Error al cargar productos:", error);
        setLoading(false);
      });
  }, []);

  // 🔥 FILTRAR DESTACADOS (igual que antes)
  const destacados = productos.filter((p) => p.masVendido);

  // 🔥 LOADER (SOLO CAMBIADO ESTO)
  if (loading) {
    return <div className="loading-text">Cargando productos destacados...</div>;
  }

  return (
    <section
      id="productos"
      ref={ref}
      className={`productos fade-section ${visible ? "visible" : ""}`}
    >
      <h2 className="titulo-seccion">Productos Destacados</h2>
      <div className="section-divider"></div>

      <div className="productos-grid">
        {destacados.map((p, index) => (
          <div
            key={p.id}
            className="producto-card"
            style={{ animationDelay: `${index * 0.1}s` }}
          >
            <img src={p.imagen} alt={p.nombre} />
            <h3>{p.nombre}</h3>
            <span className="marca">{p.marca}</span>
            <span className="precio">
              ${p.precio.toLocaleString("es-AR")}
            </span>

            <button
              className="btn-agregar"
              onClick={() => addToCart(p)}
            >
              Agregar al carrito
            </button>
          </div>
        ))}
      </div>
    </section>
  );
}

export default Productos;