<?php
define('CONTROLLER_PATH', '../Controller/');
define('VIEWS_PATH', '../Views/');
define('MODELS_PATH', '../Models/');
define('LIBRARIES_PATH', '../libraries/');
define('CSS_PATH', '../css/');
define('JS_PATH', '../js/');
define('IMG_PATH', '../img/');
define('CONFIG_PATH', '../config/');
include(VIEWS_PATH . "header.php");
?>
<?php
if (isset($_GET["info"])) {
    if ($_GET["info"] == 1) {
?>
        <div class="alert alert-danger d-flex alert-dismissible fade show" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                <use xlink:href="#exclamation-triangle-fill" />
            </svg>
            <strong>¡Datos Incorrectos!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
    }
    if ($_GET["info"] == 2) {
    ?>
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                <use xlink:href="#info-fill" />
            </svg>
            <strong>¡Cerró Sesión!</strong> Adiós
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
<?php
    }
}
?>
<div class="container2">
    <form action="<?php echo CONTROLLER_PATH; ?>login_controller.php" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="correo">
        <div id="emailHelp" class="form-text">Ingrese su correo.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="clave">
            <div id="passwordHelp" class="form-text">Ingrese su contraseña.</div>
        </div>

        <button type="submit" class="btn2 btn-outline-success mt-4">Iniciar sesión</button>
            <p class="mt-2">¿Aún no tienes cuenta?
            <a style="color:blue!important"href="<?php echo VIEWS_PATH; ?>registro.php">Registrarme</a>
            </p>
    </form>
</div>
<?php
include(VIEWS_PATH . "footer.php");
?>