import { useState } from "react";
import { useNavigate } from "react-router-dom";
import { useCart } from "../context/CartContext";
import "./Checkout.css";

function Checkout() {
  const navigate = useNavigate();
  const { cart } = useCart();

  const [form, setForm] = useState({
    nombre: "",
    apellido: "",
    telefono: "",
    direccion: "",
    observaciones: "",
    entrega: "domicilio",
  });

  const handleChange = (e) => {
    const { name, value } = e.target;

    // Solo números en teléfono
    if (name === "telefono" && !/^[0-9]*$/.test(value)) return;

    setForm({
      ...form,
      [name]: value,
    });
  };

  const handleEntrega = (e) => {
    const value = e.target.value;

    if (value === "retiro") {
      setForm({
        ...form,
        entrega: value,
        direccion: "",
        observaciones: "",
      });
    } else {
      setForm({
        ...form,
        entrega: value,
      });
    }
  };

  const continuar = () => {
    if (!form.nombre || !form.apellido || !form.telefono) {
      alert("Por favor complete los datos obligatorios");
      return;
    }

    if (form.entrega === "domicilio" && !form.direccion) {
      alert("Debe ingresar la dirección para envío a domicilio");
      return;
    }

    navigate("/confirm", { state: { form, cart } });
  };

  return (
    <div className="checkout-container">
      <div className="checkout-card">
        <h2>Datos de compra</h2>

        <input
          name="nombre"
          placeholder="Nombre"
          onChange={handleChange}
          required
        />

        <input
          name="apellido"
          placeholder="Apellido"
          onChange={handleChange}
          required
        />

        <input
          name="telefono"
          placeholder="Teléfono"
          onChange={handleChange}
          required
        />

        <select name="entrega" onChange={handleEntrega}>
          <option value="domicilio">Envío a Domicilio</option>
          <option value="retiro">Retirar en el Local</option>
        </select>

        <input
          name="direccion"
          placeholder="Dirección"
          onChange={handleChange}
          disabled={form.entrega === "retiro"}
        />

        <textarea
          name="observaciones"
          placeholder="Observaciones (color de casa, portón, etc.)"
          onChange={handleChange}
          disabled={form.entrega === "retiro"}
        ></textarea>

        <button onClick={continuar}>Continuar</button>
      </div>
    </div>
  );
}

export default Checkout;