<?php

define('CONTROLLER_PATH', '../../Controllers/');
define('VIEWS_PATH', '../../Views/');
define('MODELS_PATH', '../../Models/');
define('LIBRARIES_PATH', '../../libraries/');
define('CSS_PATH', '../../css/');
define('JS_PATH', '../../JS/');
define('IMG_PATH', '../../img/');

include(VIEWS_PATH . "header.php");
?>
     <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="background-color: white;">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="<?php echo VIEWS_PATH; ?>user/medicamentos_user.php">Medicamentos</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo VIEWS_PATH; ?>user/citas_user.php">Citas</a></li>
                <li class="nav-item dropdown ml-md-auto">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                        data-toggle="dropdown">Nombre de usuario</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another
                            action</a> <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider">
                        </div> <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>


    <div class="container-fluid ">
        <div class="row justify-content-center">
           
            <div class="col-md-9 justify-content-center">
                <div class="jumbotron justify-content-center">
                    <h2 class="justify-content-center">
                        Agendación de citas
                    </h2>
                    <p class="justify-content-center">
                        En esta sección encontrará todas sus citas registradas.
                    </p>
                    <div class="card justify-content-center">
                        <div class="card-body">
                            <h5 class="card-title">Clinica pepito</h5>
                            <!--Aquí va el formulario-->
                            <form role="form" action="<?php echo CONTROLLER_PATH; ?>valida_login.php" method="POST">
                                <div class="form-group">


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include(VIEWS_PATH . "footer.php");
    ?>