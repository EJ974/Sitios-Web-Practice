import { Routes, Route } from 'react-router-dom'
import Home from './pages/Home'
import Shop from './pages/Shop'
import Checkout from './pages/Checkout'
import Navbar from './components/Navbar'
import CartSidebar from './components/CartSidebar'
import About from './pages/About'
import Services from './pages/Services'
import Footer from './components/Footer'
import Confirm from './pages/Confirm'
function App() {
  return (
    <div className="app-container">
      <Navbar />
      <CartSidebar />

      <div className="main-content">
        <Routes>
          <Route path="/" element={<Home />} />
          <Route path="/shop" element={<Shop />} />
          <Route path="/about" element={<About />} />
          <Route path="/services" element={<Services />} />
          <Route path="/checkout" element={<Checkout />} />
          <Route path="/confirm" element={<Confirm />} />
        </Routes>
      </div>

      <Footer />
    </div>
  )
}

export default App