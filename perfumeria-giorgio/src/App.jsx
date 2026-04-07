import { Routes, Route } from "react-router-dom";
import Navbar from "./components/layout/Navbar";
import Footer from "./components/layout/Footer";

import Home from "./pages/Home";
import ProductosPage from "./pages/ProductosPage";
import Categorias from "./pages/Categorias";
import CategoriaView from "./pages/CategoriaView";
import Sobre from "./pages/Sobre";

function App() {
  return (
    <>
      <Navbar />

      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/productos" element={<ProductosPage />} />
        <Route path="/categorias" element={<Categorias />} />
        <Route path="/categoria/:nombre" element={<CategoriaView />} />
        <Route path="/sobre" element={<Sobre />} />
      </Routes>

      <Footer />
    </>
  );
}

export default App;