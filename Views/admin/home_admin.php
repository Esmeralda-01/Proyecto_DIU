<?php
define('LIBRARIES_PATH', '../../libraries/');
define('CONTROLLER_PATH', '../../Controllers/');
define('VIEWS_PATH', '../../Views/');
define('MODELS_PATH', '../../Models/');
define('CSS_PATH', '../../css/');
define('JS_PATH', '../../js/');
define('CONFIG_PATH', '../../config/');
define('IMG_PATH', '../../img/');

include(VIEWS_PATH . "header.php");
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            
        <div class="col-md-9">
            <div class="jumbotron">
                <h2>
                    Bienvenido Administrador
                </h2>
                <p>
                <img alt="Imagen de inicio admin" src="<?php echo IMG_PATH;?>admin.jpg" />
                    Viajar solo o acompañado.
                </p>
                <p>
                    <a class="btn btn-primary btn-large" href="https://images.pexels.com/photos/1463924/pexels-photo-1463924.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">Learn more</a>
                </p>
            </div>
        </div>
    </div>
</div>

<?php
include(VIEWS_PATH . "footer.php");
?>