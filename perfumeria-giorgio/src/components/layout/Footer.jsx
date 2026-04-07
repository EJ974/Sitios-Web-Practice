import "./Footer.css";
import { FaInstagram, FaWhatsapp } from "react-icons/fa";

function Footer() {
  return (
    <footer className="footer">
      <div className="footer-container">

        <div className="footer-column">
          <h3>Perfumería Premium</h3>
          <p>Fragancias originales y exclusivas en Corrientes Capital.</p>
        </div>

        <div className="footer-column">
          <h4>Contacto</h4>
          <p>📍 Hipólito Yrigoyen 2498, W3400 Corrientes Capital</p>
          <p>📞 0379 4180451</p>
          <p>✉ contacto@perfumeria.com</p>
        </div>

        <div className="footer-column">
          <h4>Seguinos</h4>

          <a 
            href="https://www.instagram.com/giorgiostoreok/" 
            target="_blank" 
            rel="noopener noreferrer"
          >
            <FaInstagram /> Instagram
          </a>

          <a 
            href="https://wa.me/5493794180451"
            target="_blank"
            rel="noopener noreferrer"
          >
            <FaWhatsapp /> WhatsApp
          </a>

        </div>

      </div>

      <div className="footer-bottom">
        © {new Date().getFullYear()} Perfumería Premium - Todos los derechos reservados
      </div>
    </footer>
  );
}

export default Footer;