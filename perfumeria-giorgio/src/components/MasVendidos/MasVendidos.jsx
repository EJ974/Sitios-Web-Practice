import { useRef, useEffect } from "react";
import "./MasVendidos.css";

function MasVendidos({ productos }) {

  const scrollRef = useRef(null);

  // 🔥 NUEVOS refs para drag
  const isDragging = useRef(false);
  const startX = useRef(0);
  const scrollLeft = useRef(0);

  // 🔥 Filtrar mas vendidos desde Google Sheets
  const masVendidos = productos.filter(p => p.masVendido);

  // 🔥 duplicar para loop infinito
  const productosLoop = [...masVendidos, ...masVendidos];

  useEffect(() => {

    const container = scrollRef.current;
    let animationFrame;
    const speed = 0.5;

    const autoScroll = () => {

      if (!container) return;

      // ❗ no mover si está arrastrando
      if (!isDragging.current) {
        container.scrollLeft += speed;
      }

      if (container.scrollLeft >= container.scrollWidth / 2) {
        container.scrollLeft = 0;
      }

      animationFrame = requestAnimationFrame(autoScroll);

    };

    animationFrame = requestAnimationFrame(autoScroll);

    return () => cancelAnimationFrame(animationFrame);

  }, [productos]);

  // 🔥 EVENTOS DE DRAG
  const handleMouseDown = (e) => {
    isDragging.current = true;
    startX.current = e.pageX - scrollRef.current.offsetLeft;
    scrollLeft.current = scrollRef.current.scrollLeft;
  };

  const handleMouseLeave = () => {
    isDragging.current = false;
  };

  const handleMouseUp = () => {
    isDragging.current = false;
  };

  const handleMouseMove = (e) => {
    if (!isDragging.current) return;
    e.preventDefault();

    const x = e.pageX - scrollRef.current.offsetLeft;
    const walk = (x - startX.current) * 1.5;
    scrollRef.current.scrollLeft = scrollLeft.current - walk;
  };

  return (

    <section className="mas-vendidos-section">

      <h2 className="titulo-seccion">Más Vendidos</h2>

      {/* 🔥 SPINNER SI NO HAY PRODUCTOS */}
      {productos.length === 0 ? (

        <div className="loading-spinner-container">
          <div className="spinner"></div>
          <p>Cargando productos...</p>
        </div>

      ) : (

        <div
          className="carrusel"
          ref={scrollRef}
          onMouseDown={handleMouseDown}
          onMouseLeave={handleMouseLeave}
          onMouseUp={handleMouseUp}
          onMouseMove={handleMouseMove}
        >

          {productosLoop.map((producto, index) => (

            <div key={index} className="producto-card">

              <img src={producto.imagen} alt={producto.nombre} />

              <h3>{producto.nombre}</h3>

              <span>
                ${producto.precio.toLocaleString("es-AR")}
              </span>

            </div>

          ))}

        </div>

      )}

    </section>

  );

}

export default MasVendidos;