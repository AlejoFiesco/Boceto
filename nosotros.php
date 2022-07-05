<?php
    include 'includes/head.php';
    include 'includes/header.php';
?>
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
<?php include 'includes/footer.php'; ?>