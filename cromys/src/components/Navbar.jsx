import { Link } from 'react-router-dom'
import { useState } from 'react'
import { useCart } from '../context/CartContext'
import './Navbar.css'

function Navbar() {
  const { setOpen, cart } = useCart()
  const [menuOpen, setMenuOpen] = useState(false)

  return (
    <nav className="navbar">
      {/* LOGO IZQUIERDA */}
      <div className="logo-container">
        <img src="/img/logo/logo_libreria.png" alt="Cromys Logo" className="logo-img" />
      </div>

      {/* LINKS DESKTOP */}
      <div className="nav-links desktop">
        <Link to="/">Inicio</Link>
        <Link to="/shop">Tienda</Link>
        <Link to="/about">Sobre Nosotros</Link>
        <Link to="/services">Servicios</Link>
      </div>

      {/* ACCIONES DERECHA */}
      <div className="nav-actions">
        <button className="cart-btn" onClick={() => setOpen(true)}>
          🛒 <span className="cart-count">{cart.length}</span>
        </button>

        {/* BOTON HAMBURGUESA */}
        <div
          className={`hamburger ${menuOpen ? "active" : ""}`}
          onClick={() => setMenuOpen(!menuOpen)}
        >
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>

      {/* MENU MOBILE DROPDOWN */}
      <div className={`mobile-dropdown ${menuOpen ? 'active' : ''}`}>
        <Link to="/" onClick={() => setMenuOpen(false)}>Inicio</Link>
        <Link to="/shop" onClick={() => setMenuOpen(false)}>Tienda</Link>
        <Link to="/about" onClick={() => setMenuOpen(false)}>Sobre Nosotros</Link>
        <Link to="/services" onClick={() => setMenuOpen(false)}>Servicios</Link>
      </div>
    </nav>
  )
}

export default Navbar