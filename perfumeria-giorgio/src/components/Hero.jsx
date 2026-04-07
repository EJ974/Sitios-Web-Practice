import { useEffect, useState } from "react";
import "./Hero.css";

function Hero() {

  const imagenes = [
    "/img/Hero/h1.jpg",
    "/img/Hero/h2.jpg",
    "/img/Hero/h3.jpg",
    "/img/Hero/h4.jpg",
  ];

  const [index, setIndex] = useState(0);

  useEffect(() => {
    const intervalo = setInterval(() => {
      setIndex((prev) => (prev + 1) % imagenes.length);
    }, 5000);

    return () => clearInterval(intervalo);
  }, []);

  return (
    <section className="hero">

      {imagenes.map((img, i) => (
        <div
          key={i}
          className={`hero-bg ${i === index ? "active" : ""}`}
          style={{
            backgroundImage: `linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(${img})`
          }}
        />
      ))}

      <div className="hero-content fade-in">
        <h1>Descubrí tu esencia</h1>
        <p>Fragancias exclusivas para quienes dejan huella.</p>

        
      </div>

    </section>
  );
}

export default Hero;