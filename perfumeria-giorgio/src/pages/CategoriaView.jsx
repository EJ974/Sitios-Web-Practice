import { useParams } from "react-router-dom";
import { useState, useEffect } from "react";
import { obtenerProductos } from "../services/productosService";
import "./CategoriaView.css";
import { useCart } from "../context/CartContext";
import Categorias from "../pages/Categorias";

function CategoriaView() {

  const { nombre } = useParams();
  const { addToCart } = useCart();
  const [productos, setProductos] = useState([]);
  const [imagenSeleccionada, setImagenSeleccionada] = useState(null);
  const [busqueda, setBusqueda] = useState("");

  // 🔥 NUEVO: estado loading
  const [loading, setLoading] = useState(true);

  // TRAER PRODUCTOS DESDE GOOGLE SHEETS (CON DEBUG)
  useEffect(() => {

    console.log("Llamando API...");

    obtenerProductos()
      .then(data => {
        console.log("DATA:", data);
        setProductos(data);
        setLoading(false);
      })
      .catch(error => {
        console.error("Error:", error);
        setLoading(false);
      });

  }, []);

  // FILTRO POR CATEGORIA
  const productosFiltrados = productos.filter(
    (p) =>
      p.categoria.toLowerCase() === nombre.toLowerCase() ||
      (nombre === "promociones" && p.masVendido)
  );

  // FILTRO POR BUSCADOR
  const productosFinales = productosFiltrados.filter((p) =>
    p.nombre.toLowerCase().includes(busqueda.toLowerCase())
  );

  return (
    <main className="categoria-view">

      <Categorias />

      <h1 className="titulo-categoria">
        {nombre.toUpperCase()}
      </h1>

      {/* BUSCADOR */}
      <div className="buscador-productos">

        <input
          type="text"
          placeholder="Buscar perfume..."
          value={busqueda}
          onChange={(e) => setBusqueda(e.target.value)}
        />

      </div>

      <div className={`grid-productos ${loading ? "loading" : ""}`}>

        {loading ? (
          <div className="loading-spinner-container">
            <div className="spinner"></div>
            <p>Cargando productos...</p>
          </div>
        ) : productosFinales.map((p) => (

          <div key={p.id} className="producto-card">

            <img
              src={p.imagen}
              alt={p.nombre}
              className="img-producto"
              onClick={() => setImagenSeleccionada(p.imagen)}
            />

            <h3>{p.nombre}</h3>

            <span className="precio">
              ${p.precio.toLocaleString("es-AR")}
            </span>

            {Number(p.stock) > 0 && Number(p.stock) <= 3 && (
              <p className="stock-bajo">
                ⚠️ {Number(p.stock) === 1
                  ? "Queda solo 1 unidad"
                  : `Quedan solo ${p.stock} unidades`}
              </p>
            )}

            {/* SI NO HAY STOCK */}
            {Number(p.stock) === 0 && (
              <p className="agotado">AGOTADO</p>
            )}

            <button
              className="btn-agregar"
              disabled={Number(p.stock) === 0}
              onClick={() => {
                if (Number(p.stock) > 0) {
                  addToCart({ ...p, stock: Number(p.stock) });
                }
              }}
            >
              {Number(p.stock) === 0 ? "Sin stock" : "Agregar al carrito"}
            </button>

          </div>

        ))}

      </div>

      {/* MODAL DE IMAGEN */}
      {imagenSeleccionada && (

        <div
          className="modal-overlay"
          onClick={() => setImagenSeleccionada(null)}
        >

          <button
            className="cerrar-modal"
            onClick={() => setImagenSeleccionada(null)}
          >
            ✕
          </button>

          <img
            src={imagenSeleccionada}
            className="imagen-modal"
            alt="producto"
          />

        </div>

      )}

    </main>
  );
}

export default CategoriaView;