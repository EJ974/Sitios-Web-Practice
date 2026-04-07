import { Link } from "react-router-dom";
import "./Categorias.css";

function Categorias() {
  const categorias = [
    { nombre: "promociones", titulo: "Promociones" },
    { nombre: "hombre", titulo: "Hombre" },
    { nombre: "mujer", titulo: "Mujer" },
    { nombre: "relojes", titulo: "Relojes" },
    { nombre: "cintos-billeteras", titulo: "Cintos & Billeteras" },
  ];

  return (
    <main className="categorias-container">
      <h1 className="titulo-seccion">Nuestras Categorías</h1>

      <div className="categorias-grid">
        {categorias.map((cat) => (
          <Link
            key={cat.nombre}
            to={`/categoria/${cat.nombre}`}
            className="categoria-card"
          >
            <h2>{cat.titulo}</h2>
          </Link>
        ))}
      </div>
    </main>
  );
}

export default Categorias;