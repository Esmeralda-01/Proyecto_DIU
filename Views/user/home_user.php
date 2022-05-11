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
<!--
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" style="background-color: black;">
            <ul class="nav d-flex justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Messages</a>
                </li>
                <li class="nav-item dropdown ml-md-auto">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Dropdown link</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider">
                        </div> <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    
</div>-->

     <nav class="navbar navbar-expand-lg navbar-dark bg-primary" id="sideNav">
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
    

  <!--  
<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo VIEWS_PATH; ?>user/medicamentos_user.php">Medicamentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo VIEWS_PATH; ?>user/citas_user.php">Citas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Nombre usuario</a>
                    </li>
                </ul>
            </div>
        </div>

    </div>-->


<div class="container-fluid">


    <div class="jumbotron ">
        <h2 class="d-flex justify-content-center">
            Bienvenido Usuario
        </h2>
        <p class="d-flex justify-content-center">
            <img alt="Imagen de inicio usuario" src="<?php echo IMG_PATH; ?>usuario.jpg" />

        </p>

    </div>

</div>
</div>

<?php
include(VIEWS_PATH . "footer.php");
?>