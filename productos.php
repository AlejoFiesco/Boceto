<?php
    include 'includes/head.php';
    include 'includes/header.php';
?>
<div id="productos">
    <span id="mostrarFiltros" class="oculto"><i class="fa-solid fa-gears"></i></span>
    <section id="filtros">
        <h1>Filtros</h1>
        <span id="cerrarFiltros" class="oculto">Cerrar Filtros</span>
        <div class="revelar-filtro"> marca<i class="fa-solid fa-caret-up"></i></div>
        <div class="filtro mostrar">
            <label ><input type="checkbox" name="" id="" value="Filtro 1">Filtro 1</label>
            <label ><input type="checkbox" name="" id="" value="Filtro 1">Filtro 2</label>
            <label ><input type="checkbox" name="" id="" value="Filtro 1">Filtro 3</label>
            
        </div>
        <div class="revelar-filtro"> categoría<i class="fa-solid fa-caret-up"></i></div>
        <div class="filtro mostrar">
            <label ><input type="checkbox" name="" id="" value="Filtro 1">Categoría 1</label>
            <label ><input type="checkbox" name="" id="" value="Filtro 1">Categoría 2</label>
            <label ><input type="checkbox" name="" id="" value="Filtro 1">Categoría 3</label>
        </div>
        <div class="revelar-filtro"> especificaciones<i class="fa-solid fa-caret-up"></i></div>
        <div class="filtro mostrar">
            <label ><input type="checkbox" name="" id="" value="Filtro 1">Especificación 1</label>
            <label ><input type="checkbox" name="" id="" value="Filtro 1">Especificación 2</label>
            <label ><input type="checkbox" name="" id="" value="Filtro 1">Especificación 3</label>
        </div>
        <div class="revelar-filtro"> precio<i class="fa-solid fa-caret-up"></i></div>
        <div class="filtro mostrar">
            <label ><input type="checkbox" name="" id="" value="Filtro 1">Precio 1</label>
            <label ><input type="checkbox" name="" id="" value="Filtro 1">Precio 2</label>
            <label ><input type="checkbox" name="" id="" value="Filtro 1">Precio 3</label>
        </div>
    </section>
    <section id="opciones-usuario">
        <div id="ingresar-usuario">
            <a href="#" class="boton" id="ingresar">Ingresar</a>
        </div>
    </section>
    <section id="catalogo">
        <div class="producto">
            <img src="./img/imagen-banner.png" alt="">
            <div class="descripcion">
                <h1>Titulo del artículo</h1>
                <table>
                    <tr>
                        <td>Especificación 1</td>
                        <td>Valor 1</td>
                    </tr>
                    <tr>
                        <td>Especificación 2</td>
                        <td>Valor 2</td>
                    </tr>
                </table>
            </div>
            <div class="precio">
                <h2>$999.999</h2>
                <input type="button" value="Ver producto">
            </div>
        </div>
        <div class="producto">
            <img src="./img/imagen-banner.png" alt="">
            <div class="descripcion">
                <h1>Titulo del artículo</h1>
                <table>
                    <tr>
                        <td>Especificación 1</td>
                        <td>Valor 1</td>
                    </tr>
                    <tr>
                        <td>Especificación 2</td>
                        <td>Valor 2</td>
                    </tr>
                </table>
            </div>
            <div class="precio">
                <h2>$999.999</h2>
                <input type="button" value="Ver producto">
            </div>
        </div>
        <div class="producto">
            <img src="./img/imagen-banner.png" alt="">
            <div class="descripcion">
                <h1>Titulo del artículo</h1>
                <table>
                    <tr>
                        <td>Especificación 1</td>
                        <td>Valor 1</td>
                    </tr>
                    <tr>
                        <td>Especificación 2</td>
                        <td>Valor 2</td>
                    </tr>
                </table>
            </div>
            <div class="precio">
                <h2>$999.999</h2>
                <input type="button" value="Ver producto">
            </div>
        </div>
        <div class="producto">
            <img src="./img/imagen-banner.png" alt="">
            <div class="descripcion">
                <h1>Titulo del artículo</h1>
                <table>
                    <tr>
                        <td>Especificación 1</td>
                        <td>Valor 1</td>
                    </tr>
                    <tr>
                        <td>Especificación 2</td>
                        <td>Valor 2</td>
                    </tr>
                </table>
            </div>
            <div class="precio">
                <h2>$999.999</h2>
                <input type="button" value="Ver producto">
            </div>
        </div>
    </section>
</div>
<script src="./src/js/productos.js"></script>
<?php include 'includes/footer.php'; ?>