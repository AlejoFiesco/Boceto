<?php
    include 'includes/head.php';
    include 'includes/header.php';
?>
<div id="index">
    <div id="banner-principal">
        <div class="formulario resaltado">
            <h1>¿Lo contactamos?</h1>
            <form action="">
                <div class="input-group">
                    <label for="inputNombre">Nombre</label>
                    <input id="inputNombre" type="text">
                </div>
                <div class="input-group">
                    <label for="inputNumero">Numero</label>
                    <input id="inputNumero" type="number">
                </div>
                <div class="input-group">
                    <label for="inputCiudad">Ciudad</label>
                    <input id="inputCiudad" type="text">
                </div>
                <select name="selectServicio" id="selectServicio">
                    <option value="1">Servicio 1</option>
                    <option value="2">Servicio 2</option>
                    <option value="3">Servicio 3</option>
                </select>
                <input id="botonEnviar" type="button" value="Enviar">
            </form>
        </div>
    </div>
    <h1 class="expandir titulo-seccion">
        En qué nos destacamos
    </h1>
    <div id="contenedor-destacados">
        <div class="destacado rev-1">
            <div class="frente">
                <h1>Destacado 1</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, veritatis.</p>
            </div>
            <div class="contenido ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id repellat similique illo officia, consequatur accusamus! 1</div>
        </div>
        <div class="destacado rev-1">
            <div class="frente">
                <h1>Destacado 2</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, veritatis.</p>
            </div>
            <div class="contenido ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id repellat similique illo officia, consequatur accusamus! 2</div>
        </div>
        <div class="destacado rev-1">
            <div class="frente">
                <h1>Destacado 3</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, veritatis.</p>
            </div>
            <div class="contenido ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id repellat similique illo officia, consequatur accusamus! 3</div>
        </div>
        <div class="destacado rev-1">
            <div class="frente ">
                <h1>Destacado 4</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, veritatis.</p>
            </div>
            <div class="contenido ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id repellat similique illo officia, consequatur accusamus! 4</div>
        </div>
        <div class="destacado rev-1">
            <div class="frente ">
                <h1>Destacado 5</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, veritatis.</p>
            </div>
            <div class="contenido ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id repellat similique illo officia, consequatur accusamus! 5</div>
        </div>
        <div class="destacado rev-1">
            <div class="frente ">
                <h1>Destacado 6</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, veritatis.</p>
            </div>
            <div class="contenido ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id repellat similique illo officia, consequatur accusamus! 6</div>
        </div>
        <div class="destacado rev-1">
            <div class="frente ">
                <h1>Destacado 7</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, veritatis.</p>
            </div>
            <div class="contenido ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id repellat similique illo officia, consequatur accusamus! 7</div>
        </div>
        <div class="destacado rev-1">
        <div class="frente ">
                <h1>Destacado 7</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, veritatis.</p>
            </div>
            <div class="contenido ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id repellat similique illo officia, consequatur accusamus! 7</div>
        </div>
    </div>
</div>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="./src/js/index.js"></script>
<?php include 'includes/footer.php'; ?>