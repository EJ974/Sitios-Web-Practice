import { createContext, useContext, useState, useEffect } from 'react'

const CartContext = createContext()

export const CartProvider = ({ children }) => {
  const [cart, setCart] = useState([])
  const [open, setOpen] = useState(false)

  // Cargar carrito guardado
  useEffect(() => {
    const savedCart = localStorage.getItem('cart')
    if (savedCart) {
      setCart(JSON.parse(savedCart))
    }
  }, [])

  // Guardar carrito cuando cambia
  useEffect(() => {
    localStorage.setItem('cart', JSON.stringify(cart))
  }, [cart])

  const addToCart = (product) => {
    setCart((prev) => {
      const existe = prev.find(p => p.id === product.id)

      if (existe) {
        return prev.map(p =>
          p.id === product.id
            ? { ...p, cantidad: p.cantidad + 1 }
            : p
        )
      }

      return [...prev, { ...product, cantidad: 1 }]
    })

    setOpen(true)
  }

  const removeFromCart = (id) => {
    setCart((prev) => prev.filter(p => p.id !== id))
  }

  const addQty = (id) => {
    setCart((prev) =>
      prev.map((p) =>
        p.id === id
          ? { ...p, cantidad: p.cantidad + 1 }
          : p
      )
    )
  }

  const removeQty = (id) => {
    setCart((prev) =>
      prev.map((p) =>
        p.id === id
          ? {
              ...p,
              cantidad: p.cantidad > 1 ? p.cantidad - 1 : 1
            }
          : p
      )
    )
  }

  const clearCart = () => {
    setCart([])
    localStorage.removeItem('cart')
  }

  const total = cart.reduce(
    (acc, item) => acc + item.precio * item.cantidad,
    0
  )

  return (
    <CartContext.Provider
      value={{
        cart,
        addToCart,
        removeFromCart,
        addQty,
        removeQty,
        clearCart,
        total,
        open,
        setOpen
      }}
    >
      {children}
    </CartContext.Provider>
  )
}

export const useCart = () => useContext(CartContext)