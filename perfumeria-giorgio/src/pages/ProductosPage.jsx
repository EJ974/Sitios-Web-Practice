import { useEffect, useState } from "react";
import { obtenerProductos } from "../services/productosService";

import Categorias from "./Categorias";
import MasVendidos from "../components/MasVendidos/MasVendidos";
import Beneficios from "../components/Beneficios";

import "./ProductosPage.css";

function ProductosPage() {

const [productos, setProductos] = useState([]);

useEffect(() => {

obtenerProductos().then(data => {
setProductos(data);
});

}, []);

return (

<main className="productos-page">

<Categorias productos={productos} />

<MasVendidos productos={productos} />

<Beneficios />

</main>

);

}

export default ProductosPage;