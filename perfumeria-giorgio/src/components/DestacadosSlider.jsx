import "./DestacadosSlider.css";

function DestacadosSlider() {

  const marcas = [
    { id: 1, nombre: "Dior", logo: "/img/DestacadosLogos/dior.png" },
    { id: 2, nombre: "Chanel", logo: "/img/DestacadosLogos/chanel.png" },
    { id: 3, nombre: "Gucci", logo: "/img/DestacadosLogos/gucci.png" },
    { id: 4, nombre: "YSL", logo: "/img/DestacadosLogos/ysl.png" },
    { id: 5, nombre: "Versace", logo: "/img/DestacadosLogos/versace.png" },
    { id: 6, nombre: "Armani", logo: "/img/DestacadosLogos/armani.png" },
    { id: 7, nombre: "Carolina Herrera", logo: "/img/DestacadosLogos/ch.png" },
    { id: 8, nombre: "Calvin Klein", logo: "/img/DestacadosLogos/calvink.png" },
    { id: 1, nombre: "Dior", logo: "/img/DestacadosLogos/dior.png" },
    { id: 2, nombre: "Chanel", logo: "/img/DestacadosLogos/chanel.png" },
    { id: 3, nombre: "Gucci", logo: "/img/DestacadosLogos/gucci.png" },
    { id: 4, nombre: "YSL", logo: "/img/DestacadosLogos/ysl.png" },
    { id: 5, nombre: "Versace", logo: "/img/DestacadosLogos/versace.png" },
    { id: 6, nombre: "Armani", logo: "/img/DestacadosLogos/armani.png" },
    { id: 7, nombre: "Carolina Herrera", logo: "/img/DestacadosLogos/ch.png" },
    { id: 8, nombre: "Calvin Klein", logo: "/img/DestacadosLogos/calvink.png" },
  ];

  const marcasLoop = [...marcas, ...marcas]; // duplicamos

  return (
    <section className="marcas-section">
      <h2 className="titulo-marcas">Marcas con las que trabajamos</h2>

      <div className="marcas-slider">
        <div className="marcas-track">
          {marcasLoop.map((marca, index) => (
            <div key={index} className="marca-card">
              <img src={marca.logo} alt={marca.nombre} />
            </div>
          ))}
        </div>
      </div>
    </section>
  );
}

export default DestacadosSlider;