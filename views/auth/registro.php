<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo;?></h2>
    <p class="auth__texto">Registrate en DevWebCamp</p>

    <?php
    require_once __DIR__ . '/../templates/alertas.php';
    ?>

    <form method="POST" action="/registro" class="formulario">
        <div class="formulario__campo">
            <label for="nombre" class="formulario__label">Nombre</label>
            <input 
            type="text"
            id="nombre"
            class="formulario__input"
            name="nombre"
            placeholder="Ingresa tu Nombre"
            value="<?php echo $usuario->$nombre; ?>"
            />
        </div>
        <div class="formulario__campo">
            <label for="apellido" class="formulario__label">Apellido</label>
            <input 
            type="text"
            id="apellido"
            class="formulario__input"
            name="apellido"
            placeholder="Ingresa tu Apellido"
            value="<?php echo $usuario->$apellido; ?>"
            />
        </div>
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input 
            type="email"
            id="email"
            class="formulario__input"
            name="email"
            placeholder="Ingresa tu Email"
            value="<?php echo $usuario->$email; ?>"
            />
        </div>
        <div class="formulario__campo">
            <label for="password" class="formulario__label">Password</label>
            <input 
            type="password"
            id="password"
            class="formulario__input"
            name="password"
            placeholder="Ingresa tu Password"
            />
        </div>
        <div class="formulario__campo">
            <label for="password2" class="formulario__label">Confirmar Password</label>
            <input 
            type="password"
            id="password2"
            class="formulario__input"
            name="password2"
            placeholder="Confirma tu Password"
            />
        </div>
        <input type="submit" class="formulario__submit" value="Crear Cuenta">
    </form>
    <div class="acciones">
        <a href="/login" class="acciones__enlaces">Ya tienes cuenta? Iniciar Sesión</a>
        <a href="/olvide" class="acciones__enlaces">Olvide mi Password</a>
    </div>

</main>