import './About.css'
import { useEffect } from 'react'

function About() {

  // CARRUSEL AUTOMATICO
  useEffect(() => {
    const images = document.querySelectorAll('.carousel-img')
    let index = 0

    const interval = setInterval(() => {
      images.forEach(img => img.classList.remove('active'))
      index++
      if (index >= images.length) index = 0
      images[index].classList.add('active')
    }, 3000)

    return () => clearInterval(interval)
  }, [])

  return (
    <div className="about">

      <h1 className="about-title text-fade-down">
        Sobre Cromys SRL
      </h1>

      {/* QUIENES SOMOS */}
      <section className="about-section">
        <h2 className="text-fade-left delay-1">¿Quiénes somos?</h2>
        <p className="text-fade-up delay-2">
          Cromys SRL es una librería dedicada a brindar productos escolares,
          de oficina y artículos de librería en general, ofreciendo siempre
          calidad, buenos precios y una atención cercana a nuestros clientes.
        </p>
      </section>

      {/* HISTORIA */}
      <section className="about-section about-grid">
        <img 
          className="text-fade-left delay-1"
          src="/img/nosotros/1.png"
          alt="Libreria"
        />

        <div>
          <h2 className="text-fade-right delay-2">¿Cómo nació?</h2>
          <p className="text-fade-up delay-3">
            Nuestra librería nació con el objetivo de acercar a estudiantes,
            docentes y profesionales todos los productos necesarios para
            el estudio, el trabajo y la organización diaria.
          </p>
          <p className="text-fade-up delay-4">
            Con el tiempo fuimos creciendo, incorporando nuevos productos,
            mochilas, cartucheras, artículos de oficina y mucho más.
          </p>
        </div>
      </section>

      {/* MISION Y OBJETIVOS */}
      <section className="about-section about-grid">
        <div>
          <h2 className="text-fade-left delay-3">Nuestros objetivos</h2>
          <ul className="text-fade-up delay-4 objectives-list">
            <li>✓ Ofrecer productos de calidad</li>
            <li>✓ Mejorar la experiencia de compra online</li>
            <li>✓ Brindar atención rápida y personalizada</li>
            <li>✓ Seguir creciendo junto a nuestros clientes</li>
          </ul>
        </div>

        {/* CARRUSEL */}
        <div className="carousel text-fade-right delay-2">
          <img src="/img/nosotros/2.png" className="carousel-img active" />
          <img src="/img/nosotros/3.png" className="carousel-img" />
          <img src="/img/nosotros/4.png" className="carousel-img" />
        </div>
      </section>

    </div>
  )
}

export default About