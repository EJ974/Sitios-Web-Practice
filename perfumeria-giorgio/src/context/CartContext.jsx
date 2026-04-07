import { obtenerProductos } from "../services/productosService";
import { createContext, useContext, useState, useEffect } from "react";

const CartContext = createContext();

export const CartProvider = ({ children }) => {

  const [cart, setCart] = useState(() => {
    const savedCart = localStorage.getItem("cart");
    return savedCart ? JSON.parse(savedCart) : [];
  });

  useEffect(() => {
    localStorage.setItem("cart", JSON.stringify(cart));
  }, [cart]);

  // 🔥 SOLO AL INICIO (OK)
  useEffect(() => {
    const verificarStock = async () => {
      const productosActuales = await obtenerProductos();

      setCart((prevCart) =>
        prevCart.filter((item) => {
          const productoActual = productosActuales.find(
            (p) => Number(p.id) === Number(item.id)
          );

          if (!productoActual || Number(productoActual.stock) === 0) {
            return false;
          }

          return true;
        })
      );
    };

    verificarStock();
  }, []);

  const validarStock = async () => {
    const productosActuales = await obtenerProductos();

    const carritoActualizado = cart.map((item) => {
      const productoActual = productosActuales.find(
        (p) => Number(p.id) === Number(item.id)
      );

      if (!productoActual || Number(productoActual.stock) === 0) {
        return { ...item, sinStock: true };
      }

      if (item.cantidad > Number(productoActual.stock)) {
        return { ...item, cantidad: Number(productoActual.stock) };
      }

      return { ...item, sinStock: false };
    });

    setCart(carritoActualizado);
    return carritoActualizado;
  };

  const limpiarSinStock = () => {
    setCart((prevCart) => prevCart.filter((item) => !item.sinStock));
  };

  const addToCart = (product) => {
    setCart((prevCart) => {
      const existing = prevCart.find((item) => item.id === product.id);

      if (existing) {
        if (existing.cantidad >= product.stock) return prevCart;

        return prevCart.map((item) =>
          item.id === product.id
            ? { ...item, cantidad: item.cantidad + 1 }
            : item
        );
      }

      return [...prevCart, { ...product, cantidad: 1 }];
    });
  };

  const increase = (id) => {
    setCart((prevCart) =>
      prevCart.map((item) => {
        if (item.id === id) {
          if (item.cantidad >= item.stock) return item;
          return { ...item, cantidad: item.cantidad + 1 };
        }
        return item;
      })
    );
  };

  const decrease = (id) => {
    setCart((prevCart) =>
      prevCart
        .map((item) =>
          item.id === id
            ? { ...item, cantidad: item.cantidad - 1 }
            : item
        )
        .filter((item) => item.cantidad > 0)
    );
  };

  const removeItem = (id) => {
    setCart((prevCart) =>
      prevCart.filter((item) => item.id !== id)
    );
  };

  const clearCart = () => {
    setCart([]);
  };

  return (
    <CartContext.Provider
      value={{
        cart,
        addToCart,
        increase,
        decrease,
        removeItem,
        clearCart,
        validarStock,
        limpiarSinStock
      }}
    >
      {children}
    </CartContext.Provider>
  );
};

export const useCart = () => useContext(CartContext);