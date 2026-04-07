import './Services.css'

function Services() {
  return (
    <div className="services">
      <h1>Opciones de Servicio</h1>

      <div className="service-card">
        <h3>🚚 Entrega a domicilio</h3>
        <p>Recibí tus productos sin moverte de tu casa.</p>
      </div>

      <div className="service-card">
        <h3>🏪 Retiro en tienda</h3>
        <p>Podés retirar tu pedido directamente en nuestro local.</p>
      </div>

      <div className="service-card">
        <h3>⚡ Visita rápida</h3>
        <p>Atención ágil para que encuentres lo que buscás rápidamente.</p>
      </div>

      <h2>💳 Métodos de pago</h2>

      <div className="service-card">
        <p>✔ Pagos móviles mediante NFC</p>
        <p>✔ Tarjetas de crédito</p>
        <p>✔ Tarjetas de débito</p>
      </div>
    </div>
  )
}

export default Services