import { useNavigate } from "react-router-dom";
import { useCart } from "../context/CartContext";
import './CartSidebar.css'

function CartSidebar() {
  const navigate = useNavigate();
  const { cart, open, setOpen, removeFromCart, addQty, removeQty, total } = useCart();

  return (
    <>
      {open && (
        <div className="cart-overlay" onClick={() => setOpen(false)}></div>
      )}

      <div className={`cart-sidebar ${open ? "open" : ""}`}>
        <div className="cart-header">
          <h2>Tu carrito</h2>
          <button onClick={() => setOpen(false)}>✖</button>
        </div>

        {cart.length === 0 ? (
          <p className="cart-empty">El carrito está vacío</p>
        ) : (
          <>
            {cart.map((p) => (
              <div className="cart-item" key={p.id}>
                <img
                  src={p.imagen || "/img/producto-default.png"}
                  className="cart-img"
                />

                <div className="cart-info">
                  <h4>{p.nombre}</h4>
                  <p className="cart-price">${p.precio}</p>

                  <div className="cart-qty">
                    <button onClick={() => removeQty(p.id)}>-</button>
                    <span>{p.cantidad}</span>
                    <button onClick={() => addQty(p.id)}>+</button>
                  </div>

                  <p className="cart-subtotal">
                    Subtotal: ${p.precio * p.cantidad}
                  </p>

                  <button
                    className="btn-eliminar"
                    onClick={() => removeFromCart(p.id)}
                  >
                    Eliminar
                  </button>
                </div>
              </div>
            ))}

            <h3 className="cart-total">Total: ${total}</h3>

            <button
              className="btn-comprar"
              onClick={() => {
                setOpen(false);
                navigate("/checkout");
              }}
            >
              Realizar compra
            </button>
          </>
        )}
      </div>
    </>
  );
}

export default CartSidebar;