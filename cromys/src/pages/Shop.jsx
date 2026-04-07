import { useState } from 'react'
import { useCart } from '../context/CartContext'
import { useLocation } from 'react-router-dom'
import categoriasData from '../data/categorias'
import './Shop.css'

const productos = [
  { id: 1, nombre: 'Cartuchera Mooving Doble Eva', precio: 5000, categoria: 'Cartucheras', imagen: 'img/productos/cartucheras/1.png' },
  { id: 2, nombre: 'Cartuchera Mooving Eva', precio: 2000, categoria: 'Cartucheras', imagen: 'img/productos/cartucheras/2.png' },
  { id: 3, nombre: 'Cartuchera Mooving Trend', precio: 1500, categoria: 'Cartucheras', imagen: 'img/productos/cartucheras/3.png' },
  { id: 4, nombre: 'Luces 220v/USB', precio: 800, categoria: 'Iluminacion', imagen: 'img/productos/iluminacion/1.png' },
  { id: 5, nombre: 'Luces a Pila', precio: 800, categoria: 'Iluminacion', imagen: 'img/productos/iluminacion/2.png' },
  { id: 6, nombre: 'Luces Solares', precio: 800, categoria: 'Iluminacion', imagen: 'img/productos/iluminacion/3.png' },
  { id: 7, nombre: 'Mochila Wabro Jurassic World', precio: 800, categoria: 'Mochilas', imagen: 'img/productos/mochilas/1.png' },
  { id: 8, nombre: 'Mochila Cresko Avengers', precio: 800, categoria: 'Mochilas', imagen: 'img/productos/mochilas/2.png' },
  { id: 9, nombre: 'Laminas Decorativas A4', precio: 800, categoria: 'Laminas Multiuso A4', imagen: 'img/productos/laminas_multiusoA4/1.png' },
  { id: 10, nombre: 'Laminas Multiuso A4', precio: 800, categoria: 'Laminas Multiuso A4', imagen: 'img/productos/laminas_multiusoA4/2.png' },
  { id: 11, nombre: 'Laminas Multiuso A4', precio: 800, categoria: 'Laminas Multiuso A4', imagen: 'img/productos/laminas_multiusoA4/3.png' },
  { id: 12, nombre: 'Carpetas N3 3 x 40.Mooving', precio: 800, categoria: 'Carpetas N3', imagen: 'img/productos/carpetas_N3/1.png' },
  { id: 13, nombre: 'Carpeta Escolar 3 x 40. lisas', precio: 800, categoria: 'Carpetas N3', imagen: 'img/productos/carpetas_N3/2.png' },
  { id: 14, nombre: 'Carpetas N3 PP Datter', precio: 800, categoria: 'Carpetas N3', imagen: 'img/productos/carpetas_N3/3.png' },
  { id: 15, nombre: 'Carpetas N3 con cierre Stich Rosada', precio: 800, categoria: 'Carpetas N3 con cierre', imagen: 'img/productos/carpetas_N3_concierre/1.png' },
  { id: 16, nombre: 'Carpetas N3 con cierre Stich Blanca', precio: 800, categoria: 'Carpetas N3 con cierre', imagen: 'img/productos/carpetas_N3_concierre/2.png' },
  { id: 17, nombre: 'Carpetas N3 con cierre Wilson', precio: 800, categoria: 'Carpetas N3 con cierre', imagen: 'img/productos/carpetas_N3_concierre/3.png' },
  { id: 18, nombre: 'Mochila de Jardin Capibara', precio: 800, categoria: 'Mochilas para Jardin', imagen: 'img/productos/mochilas_jardin/1.png' },
  { id: 19, nombre: 'Mochila de Jardin con Carrito', precio: 800, categoria: 'Mochilas para Jardin', imagen: 'img/productos/mochilas_jardin/2.png' },
  { id: 20, nombre: 'Limpia Pipas', precio: 800, categoria: 'Variados', imagen: 'img/productos/variados/1.png' },
  { id: 20, nombre: 'Set de Pinceles', precio: 800, categoria: 'Variados', imagen: 'img/productos/variados/2.png' },
  { id: 20, nombre: 'Boligrafo Sabonis s11 cA', precio: 800, categoria: 'Variados', imagen: 'img/productos/variados/3.png' },
  { id: 20, nombre: 'Boligrafo Sabonis j11 4', precio: 800, categoria: 'Variados', imagen: 'img/productos/variados/4.png' },
  { id: 20, nombre: 'Boligrafo Sabonis U11', precio: 800, categoria: 'Variados', imagen: 'img/productos/variados/5.png' },
]

const categorias = ['Todos', ...categoriasData.map(c => c.nombre)]

function Shop() {
  const { addToCart } = useCart()
  const location = useLocation()

  const params = new URLSearchParams(location.search)
  const categoriaURL = params.get('categoria')

  const [busqueda, setBusqueda] = useState('')
  const [categoria, setCategoria] = useState(categoriaURL || 'Todos')
  const [imagenModal, setImagenModal] = useState(null)

  const filtrados = productos.filter(p => {
    const matchNombre = p.nombre.toLowerCase().includes(busqueda.toLowerCase())
    const matchCategoria = categoria === 'Todos' || p.categoria === categoria
    return matchNombre && matchCategoria
  })

  return (
    <div className="shop">
      <h1 className="shop-title">Tienda Cromys</h1>

      {/* CATEGORIAS */}
      <div className="categorias">
        {categorias.map(cat => (
          <button
            key={cat}
            className={`categoria-btn ${categoria === cat ? 'active' : ''}`}
            onClick={() => setCategoria(cat)}
          >
            {cat}
          </button>
        ))}
      </div>

      {/* BUSCADOR */}
      <input
        className="search"
        placeholder="🔍 Buscar productos..."
        onChange={(e) => setBusqueda(e.target.value)}
      />

      {/* PRODUCTOS */}
      <div className="grid">
        {filtrados.map(p => (
          <div className="card" key={p.id}>
            <img
              src={p.imagen}
              alt={p.nombre}
              className="card-img"
              onClick={() => setImagenModal(p.imagen)}
            />

            <h3 className="titulo">{p.nombre}</h3>
            <p className="precio">${p.precio}</p>

            <button
              className="btn-add"
              onClick={() => addToCart(p)}
            >
              Agregar al carrito
            </button>
          </div>
        ))}
      </div>

      {/* MODAL IMAGEN */}
      {imagenModal && (
        <div className="modal" onClick={() => setImagenModal(null)}>
          <span className="cerrar">✖</span>
          <img src={imagenModal} className="modal-img" />
        </div>
      )}
    </div>
  )
}

export default Shop