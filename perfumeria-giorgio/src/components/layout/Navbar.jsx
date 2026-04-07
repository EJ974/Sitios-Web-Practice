import { useState } from "react";
import { NavLink } from "react-router-dom";
import { useCart } from "../../context/CartContext";
import { guardarPedido } from "../../services/pedidosService";
import "./Navbar.css";

function Navbar() {

  const [openMenu, setOpenMenu] = useState(false);
  const [openCart, setOpenCart] = useState(false);

  const [mensajeStock, setMensajeStock] = useState("");

  const [nombre, setNombre] = useState("");
  const [telefono, setTelefono] = useState("");
  const [email, setEmail] = useState("");

  const [ciudad, setCiudad] = useState("");
  const [barrio, setBarrio] = useState("");
  const [direccion, setDireccion] = useState("");
  const [referencia, setReferencia] = useState("");

  const [envio, setEnvio] = useState("");
  const [pago, setPago] = useState("");
  const [horario, setHorario] = useState("");

  const [observaciones, setObservaciones] = useState("");

  const { cart, increase, decrease, removeItem, clearCart } = useCart();

  const totalItems = cart.reduce((acc, item) => acc + item.cantidad, 0);

  const total = cart.reduce(
    (acc, item) => acc + item.precio * item.cantidad,
    0
  );

  const handleIncrease = (item) => {

    if (item.cantidad >= item.stock) {

      setMensajeStock("No hay suficiente stock disponible");

      setTimeout(() => {
        setMensajeStock("");
      }, 8000);

      return;
    }

    increase(item.id);
  };

  const finalizarCompra = async () => {

    console.log("Entrando a finalizar compra");

    if (cart.length === 0) return;

    if (!nombre || !telefono || !ciudad || !direccion || !envio || !pago || !horario) {
      alert("Por favor completá los datos obligatorios");
      return;
    }

    const pedido = {
      nombre,
      telefono,
      email,
      ciudad,
      barrio,
      direccion,
      referencia,
      envio,
      horario,
      pago,
      observaciones,
      productos: cart
        .map((item) => `${item.nombre} x${item.cantidad}`)
        .join(", "),
      items: cart,
      total
    };

    try {
      console.log("Pedido enviado:", pedido);

      await guardarPedido(pedido);

      

    } catch (error) {
      console.error("Error en compra:", error);
    }

    const numero = "5493794774418";

    let mensaje = `Pedido desde la web GIORGIO\n\n`;

    mensaje += `Cliente: ${nombre}\n`;
    mensaje += `Teléfono: ${telefono}\n`;
    mensaje += `Email: ${email}\n\n`;

    mensaje += `Ciudad: ${ciudad}\n`;
    mensaje += `Barrio: ${barrio}\n`;
    mensaje += `Dirección: ${direccion}\n`;
    mensaje += `Referencia: ${referencia}\n\n`;

    mensaje += `Tipo de envío: ${envio}\n`;
    mensaje += `Horario de entrega: ${horario}\n`;
    mensaje += `Método de pago: ${pago}\n\n`;

    mensaje += `Observaciones: ${observaciones}\n\n`;

    mensaje += `Productos:\n`;

    cart.forEach((item) => {
      mensaje += `${item.nombre} x${item.cantidad} - $${(
        item.precio * item.cantidad
      ).toLocaleString("es-AR")}\n`;
    });

    mensaje += `\nTotal: $${total.toLocaleString("es-AR")}`;

    const url = `https://wa.me/${numero}?text=${encodeURIComponent(mensaje)}`;

    window.open(url, "_blank");

    clearCart();
    setOpenCart(false);

    window.location.reload();
  };


  return (
    <>
      <nav className="navbar">
        <div className="navbar-container">

          <NavLink to="/" className="logo">
            GIORGIO
          </NavLink>

          <ul className={`nav-links ${openMenu ? "active" : ""}`}>
            <li>
              <NavLink to="/" end>Inicio</NavLink>
            </li>
            <li>
              <NavLink to="/productos">Productos</NavLink>
            </li>
            <li>
              <NavLink to="/sobre">Sobre Nosotros</NavLink>
            </li>
          </ul>

          <div className="cart-icon" onClick={() => setOpenCart(true)}>
            🛒
            {totalItems > 0 && (
              <span className="cart-count">{totalItems}</span>
            )}
          </div>

          <div
            className="hamburger"
            onClick={() => setOpenMenu(!openMenu)}
          >
            <span></span>
            <span></span>
            <span></span>
          </div>

        </div>
      </nav>

      

      <div className={`cart-drawer ${openCart ? "open" : ""}`}>

        {mensajeStock && (
        <div className="mensaje-stock">
          {mensajeStock}
        </div>
          )}

        <div className="cart-header">

          <button
            className="close-cart"
            onClick={() => setOpenCart(false)}
          >
            ✖
          </button>

          <h3>Tu carrito</h3>

        </div>

        <div className="cart-items">

          {cart.length === 0 && <p>Tu carrito está vacío</p>}

          {cart.map((item) => {

            const subtotal = item.precio * item.cantidad;

            return (

              <div key={item.id} className="cart-item">

                <img
                  src={item.imagen}
                  alt={item.nombre}
                  className="cart-img"
                />

                <div className="cart-details">

                  <h4>{item.nombre}</h4>

                  <div className="cart-controls">

                    <button onClick={() => decrease(item.id)}>
                      -
                    </button>

                    <span className="cart-qty">
                      {item.cantidad}
                    </span>

                    <button onClick={() => handleIncrease(item)}>
                      +
                    </button>

                  </div>

                </div>

                <div className="cart-right">

                  <span className="cart-price">
                    ${subtotal.toLocaleString("es-AR")}
                  </span>

                  <button
                    className="remove-item"
                    onClick={() => removeItem(item.id)}
                  >
                    ❌
                  </button>

                </div>

              </div>

            );

          })}

        </div>

        {cart.length > 0 && (

          <div className="cart-footer">

            <h4 className="cart-total">
              Total: ${total.toLocaleString("es-AR")}
            </h4>

            <div className="checkout-form">

              <h4>Datos del cliente</h4>

              <input
                type="text"
                placeholder="Nombre"
                value={nombre}
                onChange={(e) => setNombre(e.target.value)}
              />

              <input
                type="tel"
                placeholder="Teléfono"
                value={telefono}
                onChange={(e) => setTelefono(e.target.value)}
              />

              <input
                type="email"
                placeholder="Email"
                value={email}
                onChange={(e) => setEmail(e.target.value)}
              />

              <h4>Dirección de entrega</h4>

              <input
                type="text"
                placeholder="Ciudad"
                value={ciudad}
                onChange={(e) => setCiudad(e.target.value)}
              />

              <input
                type="text"
                placeholder="Barrio"
                value={barrio}
                onChange={(e) => setBarrio(e.target.value)}
              />

              <input
                type="text"
                placeholder="Dirección"
                value={direccion}
                onChange={(e) => setDireccion(e.target.value)}
              />

              <input
                type="text"
                placeholder="Referencia (opcional)"
                value={referencia}
                onChange={(e) => setReferencia(e.target.value)}
              />

              <h4>Entrega</h4>

              <select
                value={envio}
                onChange={(e) => setEnvio(e.target.value)}
              >
                <option value="">Seleccionar envío</option>
                <option value="Cadetería Corrientes">
                  Corrientes Capital (Cadetería)
                </option>
                <option value="Interior Corrientes">
                  Interior de Corrientes (Combi)
                </option>
                <option value="Resistencia / Barranqueras">
                  Resistencia / Barranqueras
                </option>
              </select>

              <select
                value={horario}
                onChange={(e) => setHorario(e.target.value)}
                required
              >
                <option value="">Seleccionar horario de entrega</option>
                <option value="Mañana">Mañana (08:00 - 12:00)</option>
                <option value="Tarde">Tarde (16:00 - 20:00)</option>
              </select>

              <h4>Método de pago</h4>

              <select
                value={pago}
                onChange={(e) => setPago(e.target.value)}
              >
                <option value="">Seleccionar pago</option>
                <option value="Transferencia">Transferencia</option>
                <option value="Efectivo">Efectivo</option>
              </select>

              <textarea
                placeholder="Observaciones (opcional)"
                value={observaciones}
                onChange={(e) => setObservaciones(e.target.value)}
              />

            </div>

            <button
              className="btn-finalizar"
              onClick={finalizarCompra}
            >
              Finalizar compra
            </button>

            <button
              className="btn-cancelar"
              onClick={clearCart}
            >
              Vaciar carrito
            </button>

          </div>

        )}

      </div>

    </>
  );
}

export default Navbar;