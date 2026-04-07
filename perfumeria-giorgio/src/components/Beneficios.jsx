import { useEffect, useRef, useState } from "react";
import "./Beneficios.css";

function Beneficios() {
  const ref = useRef();
  const [visible, setVisible] = useState(false);
  const [openIndex, setOpenIndex] = useState(null);

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

  const beneficios = [
    {
        icon: "✔",
        titulo: "Productos originales",
        descripcion:
          "Trabajamos únicamente con\nproductos 100% originales\nde marcas reconocidas\na nivel internacional.\n\nGarantizamos autenticidad,\ncalidad y la mejor experiencia\nen cada fragancia."
    },
    {
        icon: "🚚",
        titulo: "Envíos y entregas",
        descripcion: (
          <>
            <strong><u>CORRIENTES</u></strong><br/>
            Envíos por cadetería<br/>
            a toda la ciudad.<br/>
            Pago anticipado.<br/><br/>

            <strong><u>INTERIOR - CORRIENTES</u></strong><br/>
            Envíos en combis<br/>
            que llegan en el día.<br/>
            Pago anticipado.<br/><br/>

            <strong><u>RESISTENCIA - BARRANQUERAS</u></strong><br/>
            Envíos con nuestros<br/>
            choferes de paquetería.<br/>
            Entrega en el día.<br/>
            Pago al recibir.
          </>
        )
    },
    {
      icon: "💳",
      titulo: "Pagos seguros",
      descripcion:(
        <>
          <strong>✅EFECTIVO</strong><br/>

          <strong>✅MERCADO PAGO</strong><br/>
          

          <strong>✅TRANSF.BANCARIAS</strong><br/>
         
        </>  
      )
    },
    {
      icon: "💬",
      titulo: "Atención personalizada",
      descripcion:
        "Te asesoramos para encontrar\nla fragancia ideal según\ntu estilo y cada ocasión.\n\nNuestro equipo te ayuda\na descubrir aromas que\nreflejen tu personalidad\ny destaquen tu esencia."
    }
  ];

  const toggleDescripcion = (index) => {
    setOpenIndex(openIndex === index ? null : index);
  };

  return (
    <section
      ref={ref}
      className={`beneficios-premium ${visible ? "visible" : ""}`}
    >
      <h2 className="beneficios-titulo">Por qué elegirnos</h2>

      <div className="beneficios-container">
        {beneficios.map((b, index) => (
          <div
            key={index}
            className={`beneficio-card ${
              openIndex === index ? "active" : ""
            }`}
            style={{ animationDelay: `${index * 0.2}s` }}
          >
            <div className="beneficio-icono">{b.icon}</div>

            <h3>{b.titulo}</h3>

            <p className={`beneficio-desc ${
              openIndex === index ? "show" : ""
            }`}>
              {b.descripcion}
            </p>

            <button
              className="btn-vermas"
              onClick={() => toggleDescripcion(index)}
            >
              {openIndex === index ? "Ver menos" : "Ver más"}
            </button>
          </div>
        ))}
      </div>
    </section>
  );
}

export default Beneficios;