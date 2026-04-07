import './Home.css'
import { useNavigate } from 'react-router-dom'
import { useRef, useEffect } from 'react'
import categorias from '../data/categorias'

function Home() {
  const navigate = useNavigate()
  const trackRef = useRef(null)
  const intervalRef = useRef(null)

  const irACategoria = (cat) => {
    navigate(`/shop?categoria=${cat}`)
  }

  const moverDerecha = () => {
    const track = trackRef.current
    if (!track) return

    const firstCard = track.children[0]
    const cardWidth = firstCard.offsetWidth + 20

    track.style.transition = "transform 0.4s ease"
    track.style.transform = `translateX(-${cardWidth}px)`

    setTimeout(() => {
      track.style.transition = "none"
      track.style.transform = "translateX(0)"
      track.appendChild(firstCard)
    }, 400)
  }

  const moverIzquierda = () => {
    const track = trackRef.current
    if (!track) return

    const lastCard = track.children[track.children.length - 1]
    const cardWidth = lastCard.offsetWidth + 20

    track.insertBefore(lastCard, track.children[0])
    track.style.transition = "none"
    track.style.transform = `translateX(-${cardWidth}px)`

    setTimeout(() => {
      track.style.transition = "transform 0.4s ease"
      track.style.transform = "translateX(0)"
    }, 10)
  }

  // AUTOPLAY
  useEffect(() => {
    intervalRef.current = setInterval(() => {
      moverDerecha()
    }, 3000)

    return () => clearInterval(intervalRef.current)
  }, [])

  return (
    <div className="home">
      {/* HERO */}
      <section className="hero">
        <div className="hero-images">
          <img src="/img/hero/1.png" className="hero-img" />
          <img src="/img/hero/2.png" className="hero-img" />
          <img src="/img/hero/3.png" className="hero-img" />
        </div>

        <div className="hero-overlay">
          <div className="hero-box">
            <h1 className="hero-title">Bienvenido a Cromys SRL</h1>
            <p className="hero-subtitle">Tu librería online</p>
            <button 
              className="hero-btn"
              onClick={() => navigate("/shop")}
            >
              Ver productos
            </button>
          </div>
        </div>
      </section>

      {/* CATEGORIAS */}
      <section className="categories">
        <h2 className="section-title">Categorías</h2>

        <div className="categories-slider">
          <button className="arrow left" onClick={moverIzquierda}>
            ‹
          </button>

          <div
            className="categories-track"
            ref={trackRef}
            onMouseEnter={() => clearInterval(intervalRef.current)}
            onMouseLeave={() => {
              intervalRef.current = setInterval(() => {
                moverDerecha()
              }, 3000)
            }}
          >
            {categorias.map((cat, index) => (
              <div
                key={index}
                className="category-card"
                onClick={() => irACategoria(cat.nombre)}
              >
                <img src={cat.imagen} alt={cat.nombre} />
                <p>{cat.nombre}</p>
              </div>
            ))}
          </div>

          <button className="arrow right" onClick={moverDerecha}>
            ›
          </button>
        </div>
      </section>
    </div>
  )
}

export default Home