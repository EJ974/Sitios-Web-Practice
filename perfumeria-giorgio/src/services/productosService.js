export async function obtenerProductos() {

  const res = await fetch("https://script.google.com/macros/s/AKfycbzyXENOm0XBgA78oY5St6I56GnwXwPjyoW7BuSriOg-4_g9vlXm5b3nxrroOSueKBWUQw/exec");
  const data = await res.json();

  return data.map(p => ({
    id: Number(p.id),
    nombre: p.nombre,
    marca: p.marca,
    precio: Number(p.precio),
    categoria: p.categoria,
    masVendido: p.masVendido === true || p.masVendido === "TRUE",
    imagen: p.imagen,
    stock: Number(p.stock)
  }));

}