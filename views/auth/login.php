<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo;?></h2>
    <p class="auth__texto">Inicia sesión en DevWebCamp</p>
    <?php require_once __DIR__ . '/../templates/alertas.php';
    ?>
    <form method="POST" action="/login" class="formulario">
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input 
            type="email"
            id="email"
            class="formulario__input"
            name="email"
            placeholder="Ingresa tu email"
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
        <input type="submit" class="formulario__submit"  value="Iniciar Sesión">
    </form>
    <div class="acciones">
        <a href="/registro" class="acciones__enlaces">Aún no tienes una cuenta ? obtener una</a>
        <a href="/olvide" class="acciones__enlaces">Olvide mi Password</a>
    </div>

</main>