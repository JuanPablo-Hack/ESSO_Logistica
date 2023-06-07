window.addEventListener("load", () => {
  setTimeout(cargar, 5000);
  function cargar() {
    document.getElementById("contenido").style.display = "inherit";
    document.getElementById("carga").style.display = "none";
  }
});
