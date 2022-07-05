let reveladores = document.querySelectorAll(".revelar-filtro");
let aRevelar = document.querySelectorAll(".filtro");
let iconos = document.querySelectorAll(".revelar-filtro i");
[].map.call( reveladores, (boton, indice) => {
    boton.addEventListener("click", () => {
        aRevelar[indice].classList.toggle("mostrar");
        iconos[indice].classList.toggle("rotar");
    });
});

let mostrarFiltros = document.querySelector("#mostrarFiltros");
let filtros = document.querySelector("#filtros");
let catalogo = document.querySelector("#catalogo");
mostrarFiltros.addEventListener("click",() =>{
    filtros.style.left = '0px';
    catalogo.style.opacity = '.3';
    catalogo.style.border = "1px solid gray"
});
document.querySelector("#cerrarFiltros").addEventListener("click",() =>{
    filtros.style.left = '-100%';
    catalogo.style.opacity = '1';
    catalogo.style.border = "none";
});