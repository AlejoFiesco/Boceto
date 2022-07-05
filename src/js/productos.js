let reveladores = document.querySelectorAll(".revelar-filtro");
let aRevelar = document.querySelectorAll(".filtro");
let iconos = document.querySelectorAll(".revelar-filtro i");
[].map.call( reveladores, (boton, indice) => {
    boton.addEventListener("click", () => {
        aRevelar[indice].classList.toggle("mostrar");
        iconos[indice].classList.toggle("rotar");
    });
});