import './Footer.css'
import { FaInstagram, FaFacebook, FaWhatsapp } from "react-icons/fa";
function Footer() {
  return (
    <footer className="footer">
      <div className="footer-container">

        <div className="footer-section">
          <h3>Contacto</h3>
          <p>📍 Corrientes</p>
          <p>📞 3794 000000</p>
          <p>✉️ cromys@gmail.com</p>
        </div>

        <div className="footer-section">
          <h3>Horarios</h3>
          <p>Lunes a Viernes</p>
          <p>08:00 - 12:00</p>
          <p>16:00 - 20:00</p>
        </div>

        <div className="footer-section">
            <h3>Redes</h3>

            <a href="https://www.instagram.com/papeleria_cromys/" target="_blank" rel="noopener noreferrer">
                <p><FaInstagram /> Instagram</p>
            </a>

            <a href="https://www.facebook.com/cromys/?locale=es_LA" target="_blank" rel="noopener noreferrer">
                <p><FaFacebook /> Facebook</p>
            </a>

            <a href="https://wa.me/543794018337" target="_blank" rel="noopener noreferrer">
                <p><FaWhatsapp /> WhatsApp</p>
            </a>
        </div>

      </div>

      <div className="footer-bottom">
        <p>© 2026 Cromys SRL - Todos los derechos reservados</p>
      </div>
    </footer>
  )
}

export default Footer