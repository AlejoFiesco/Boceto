<?php
    include 'includes/head.php';
    include 'includes/header.php';
?>
<div id="nosotros">
    <div id="banner-nosotros">
        <div class="tarjeta fondo">
            <div class="izquierda">
                <h1 class="barra">Misión</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi nemo nostrum voluptas molestias amet at ipsum incidunt, dolore quibusdam cupiditate voluptates impedit optio quam? Quibusdam ullam pariatur excepturi inventore numquam at laborum cupiditate veritatis a iusto, doloremque suscipit quos magnam quod in sequi ratione, enim natus eum? Facere, rerum voluptatum numquam aliquid reprehenderit cum deserunt adipisci vel dolore ipsam architecto dolorem illum! Reiciendis accusantium magnam consequatur, nobis natus veritatis dolor doloribus sequi odio architecto! Laboriosam optio ipsam aspernatur assumenda voluptatum dignissimos sequi quaerat illum necessitatibus, sint tenetur dolor error beatae odio, nisi, consequuntur adipisci nihil est totam perspiciatis voluptates repellat.</p>
            </div>
        </div>
        <div class="tarjeta fondo">
            <div class="derecha">
                <h1 class="barra">Visión</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi nemo nostrum voluptas molestias amet at ipsum incidunt, dolore quibusdam cupiditate voluptates impedit optio quam? Quibusdam ullam pariatur excepturi inventore numquam at laborum cupiditate veritatis a iusto, doloremque suscipit quos magnam quod in sequi ratione, enim natus eum? Facere, rerum voluptatum numquam aliquid reprehenderit cum deserunt adipisci vel dolore ipsam architecto dolorem illum! Reiciendis accusantium magnam consequatur, nobis natus veritatis dolor doloribus sequi odio architecto! Laboriosam optio ipsam aspernatur assumenda voluptatum dignissimos sequi quaerat illum necessitatibus, sint tenetur dolor error beatae odio, nisi, consequuntur adipisci nihil est totam perspiciatis voluptates repellat.</p>
            </div>
        </div>
        <div class="tarjeta fondo">
            <div class="izquierda">
                <h1 class="barra">Quiénes somos</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi nemo nostrum voluptas molestias amet at ipsum incidunt, dolore quibusdam cupiditate voluptates impedit optio quam? Quibusdam ullam pariatur excepturi inventore numquam at laborum cupiditate veritatis a iusto, doloremque suscipit quos magnam quod in sequi ratione, enim natus eum? Facere, rerum voluptatum numquam aliquid reprehenderit cum deserunt adipisci vel dolore ipsam architecto dolorem illum! Reiciendis accusantium magnam consequatur, nobis natus veritatis dolor doloribus sequi odio architecto! Laboriosam optio ipsam aspernatur assumenda voluptatum dignissimos sequi quaerat illum necessitatibus, sint tenetur dolor error beatae odio, nisi, consequuntur adipisci nihil est totam perspiciatis voluptates repellat.</p>
            </div>
        </div>
    </div>
</div>

<div class="contenedor-contacto">
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
    <div class="info">
        <div>
            <div class="title">
                Telefono <i class="fa-solid fa-phone"></i>
            </div> 
            1234567890
        </div>
        <div>
            <div class="title">
                Dirección <i class="fa-solid fa-location-dot"></i>
            </div> 
            Calle 0 # 00-00
        </div>
    </div>
</div>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="./src/js/nosotros.js"></script>
<?php include 'includes/footer.php'; ?>