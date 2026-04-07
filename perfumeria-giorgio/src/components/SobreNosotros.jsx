import { useState, useEffect } from "react";
import "./SobreNosotros.css";

function SobreNosotros() {

  /* ========================= */
  /* SLIDER PRODUCTOS */
  /* ========================= */

  const productosImages = [
    "/img/sobrenosotros/sobre4.png",
    "/img/sobrenosotros/sobre3.png",
    "/img/sobrenosotros/sobre2.png",
  ];

  const [currentImage, setCurrentImage] = useState(0);

  useEffect(() => {

    const interval = setInterval(() => {
      setCurrentImage((prev) =>
        prev === productosImages.length - 1 ? 0 : prev + 1
      );
    }, 3000);

    return () => clearInterval(interval);

  }, []);

  return (

    <section className="sobre-container">

      {/* BLOQUE 1 */}

      <div className="sobre-row">

        <div className="sobre-img">
          <img
            src="/img/sobrenosotros/sobre1.png"
            alt="Cómo nació Giorgio Perfumería"
          />
        </div>

        <div className="sobre-text">
          <h2>
            Cómo nació  <span> Giorgio</span>
          </h2>

          <p>
            Giorgio Perfumería nació con la idea de ofrecer fragancias
            exclusivas y originales para quienes buscan destacar con su aroma.
          </p>

          <p>
            Desde nuestros comienzos en <strong>Corrientes, Argentina</strong>,
            trabajamos con marcas reconocidas mundialmente para garantizar
            calidad y autenticidad.
          </p>
        </div>

      </div>


      {/* BLOQUE 2 */}

      <div className="sobre-row reverse">

        <div className="sobre-img">
          <img
            src="/img/sobrenosotros/sobre5.png"
            alt="Objetivos de Giorgio"
          />
        </div>

        <div className="sobre-text">

          <h2>Nuestros Objetivos</h2>

          <p>
            Nuestro objetivo es brindar una experiencia única a cada cliente,
            ayudándolo a encontrar la fragancia que mejor represente su estilo.
          </p>

          <p>
            Apostamos por la <strong>calidad, confianza y asesoramiento</strong>
            personalizado para cada compra.
          </p>

        </div>

      </div>


      {/* BLOQUE 3 - SLIDER */}

      <div className="sobre-row">

        <div className="sobre-img slider">

          <img
            src={productosImages[currentImage]}
            alt="Productos Giorgio Perfumería"
            className="slider-img"
          />

        </div>

        <div className="sobre-text">

          <h2>Nuestros Productos</h2>

          <p>
            Contamos con una amplia variedad de perfumes importados de las
            marcas más reconocidas del mundo.
          </p>

          <p>
            Ofrecemos <strong>fragancias para hombres y mujeres</strong>,
            relojes y combos exclusivos ideales para regalar o disfrutar.
          </p>

        </div>

      </div>

    </section>
  );
}

export default SobreNosotros;