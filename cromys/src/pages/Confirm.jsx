import { useCart } from "../context/CartContext";
import { useLocation, useNavigate } from "react-router-dom";
import { useEffect } from "react";
import "./Confirm.css";

function Confirm() {
  const { cart, total, clearCart } = useCart();
  const location = useLocation();
  const navigate = useNavigate();

  const form = location.state?.form;

  // 🔒 Protección si entran directo a /confirm
  useEffect(() => {
    if (!form) {
      navigate("/");
    }
  }, [form, navigate]);

  if (!form) return null;

  const finalizarCompra = () => {
    let mensaje = "🛒 *Nuevo pedido - Cromys* %0A%0A";

    mensaje += "📦 *Productos:* %0A";

    cart.forEach((p) => {
      mensaje += `• ${p.nombre} - ${p.cantidad} x $${p.precio} = $${p.precio * p.cantidad} %0A`;
    });

    mensaje += `%0A💰 *Total:* $${total} %0A%0A`;

    mensaje += "👤 *Datos del cliente:* %0A";
    mensaje += `Nombre: ${form.nombre} ${form.apellido} %0A`;
    mensaje += `Teléfono: ${form.telefono} %0A`;
    mensaje += `Dirección: ${form.direccion} %0A`;
    mensaje += `Entrega: ${form.entrega} %0A`;

    const telefonoNegocio = "5493794774418";
    const url = `https://wa.me/${telefonoNegocio}?text=${mensaje}`;

    window.open(url, "_blank");

    // Vaciar carrito después de enviar
    clearCart();

    // Volver al inicio
    navigate("/");
  };

  return (
    <div className="confirm-container">
      <div className="confirm-card">
        <h1 className="confirm-title">🎉 ¡Compra realizada!</h1>

        <p className="confirm-subtitle">
          Gracias por tu pedido!!! <br />
          Para finalizar la compra oprime el botón
          "Finalizar compra por WhatsApp".
        </p>

        {/* PRODUCTOS */}
        <div className="confirm-section">
          <h2>🛒 Productos</h2>

          {cart.map((p) => (
            <div className="confirm-item" key={p.id}>
              <span>{p.nombre}</span>
              <span>
                {p.cantidad} x ${p.precio}
              </span>
              <span className="subtotal">
                ${p.precio * p.cantidad}
              </span>
            </div>
          ))}

          <h3 className="confirm-total">Total: ${total}</h3>
        </div>

        {/* DATOS */}
        <div className="confirm-section">
          <h2>📋 Datos del cliente</h2>

          <p><strong>Nombre:</strong> {form.nombre} {form.apellido}</p>
          <p><strong>Teléfono:</strong> {form.telefono}</p>
          <p><strong>Dirección:</strong> {form.direccion}</p>
          <p><strong>Entrega:</strong> {form.entrega}</p>
        </div>

        {/* BOTONES */}
        <button
          className="btn-whatsapp"
          onClick={finalizarCompra}
        >
          📲 Finalizar compra por WhatsApp
        </button>

        <button
          className="btn-volver"
          onClick={() => navigate("/shop")}
        >
          ← Volver a la tienda
        </button>

      </div>
    </div>
  );
}

export default Confirm;