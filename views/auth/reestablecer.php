<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo;?></h2>
    <p class="auth__texto">Coloca tu nuevo Password</p>
    <?php require_once __DIR__ . '/../templates/alertas.php';
    ?>

    <?php if($token_valido) { ?>
        <form method="POST"  class="formulario">
            <div class="formulario__campo">
                <label for="password" class="formulario__label">Nuevo Password</label>
                <input 
                type="password"
                id="password"
                class="formulario__input"
                name="password"
                placeholder="Ingresa tu nuevo password"
                />
            </div>
            <input type="submit" class="formulario__submit" value="Guardar Password">
        </form>
    <?php } ?>
    <div class="acciones">
        <a href="/login" class="acciones__enlaces">Ya tienes una cuenta? Iniciar Sesión</a>
        <a href="/login" class="acciones__enlaces">Aún no tienes una cuenta ? obtener una</a>
        
    </div>

</main>