export async function guardarPedido(pedido) {

  try {

    const res = await fetch("https://script.google.com/macros/s/AKfycbzyXENOm0XBgA78oY5St6I56GnwXwPjyoW7BuSriOg-4_g9vlXm5b3nxrroOSueKBWUQw/exec", {
      method: "POST",
      body: JSON.stringify(pedido) 
    });

    const data = await res.text();

    console.log("RESPUESTA BACK:", data);

    return data;

  } catch (error) {
    console.error("ERROR AL ENVIAR PEDIDO:", error);
    throw error;
  }

}