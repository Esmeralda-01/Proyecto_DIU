<?php
define('CONTROLLER_PATH', '../../Controller/');
define('VIEWS_PATH', '../../Views/');
define('MODELS_PATH', '../../Models/');
define('LIBRARIES_PATH', '../../libraries/');
define('CSS_PATH', '../../css/');
define('JS_PATH', '../../js/');
define('IMG_PATH', '../../img/');
define('CONFIG_PATH', '../../config/');
include(VIEWS_PATH . "admin/header.php");
require_once(CONTROLLER_PATH . "citas_admin.php");
?>
<div id="padre">
    <h1>Citas</h1>
    <p>En esta sección encotrará todas las citas que han sido agendadas y también podrá cancelarlas.</p>
    <?php
    $result = getAllCitas();
    if ($result != null) {
        //Vamos a recorrer la bd
        while ($cita = mysqli_fetch_assoc($result)) {
            //Para enviar mas de un parametro se usa ?
    ?>
            <div class="card" style="width: 70rem; border-color:green" id="hijo">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title d-flex justify-content-center">Reserva de citas Doctapp</h5>
                            </div>                            
                                <!--
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                -->                                                       
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <p>Centro médico responsable <?php echo $cita["nombre_centro"]; ?></p>
                            </div>
                            <div class="col">
                                <p class="d-flex justify-content-end mb-0">Cita No.<?php echo $cita["id_cita"]; ?></p>
                                <p class="d-flex justify-content-end mb-2">Fecha <?php echo $cita["fecha_agendacion"]; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>Nombre <?php echo $cita["nombre"]; ?></p>
                            </div>
                            <div class="col">
                                <p>Cc. <?php echo $cita["cc"]; ?></p>
                            </div>
                            <div class="col">
                                <p>Correo <?php echo $cita["correo"]; ?></p>
                            </div>
                            <div class="col">
                                <p>Teléfono <?php echo $cita["telefono"]; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>Médico <?php echo $cita["nombre_doctor"]; ?></p>
                            </div>
                            <div class="col">
                                <p>Consultorio <?php echo $cita["consultorio"]; ?></p>
                            </div>
                        </div>     
                        <div class="row">
                <div class="col">
                    <p>Localización <?php echo $cita["ubicacion"]; ?></p>
                </div>
            </div>                   
                        <div class="row">
                            <div class="col">
                                <p>Hora de la cita <?php echo $cita["hora"]; ?></p>
                            </div>
                            <div class="col">
                                <p>Fecha de la cita <?php echo $cita["fecha_cita"]; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Button trigger modal -->
<a type="button" class="btn btn-primary mt-3"  href="?id_cita=<?php echo $formula["id_formula"]; ?>&elimina=1">
  Eliminar
        </a>


    <?php
        }
    }
    ?>
<?php  
    if (isset($_GET["elimina"]) && isset($_GET["id_cita"])) {
        deleteOneCita($_GET["id_cita"]);
    }
    ?>

<?php
include(VIEWS_PATH . "footer.php");
?>