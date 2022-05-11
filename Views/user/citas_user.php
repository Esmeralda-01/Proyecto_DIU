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