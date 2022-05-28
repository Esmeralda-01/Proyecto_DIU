<?php
define('CONTROLLER_PATH', '../../Controller/');
define('VIEWS_PATH', '../../Views/');
define('MODELS_PATH', '../../Models/');
define('LIBRARIES_PATH', '../../libraries/');
define('CSS_PATH', '../../css/');
define('JS_PATH', '../../js/');
define('IMG_PATH', '../../img/');
define('CONFIG_PATH', '../../config/');
include(VIEWS_PATH . "user/header.php");
require_once(CONTROLLER_PATH . "citas_user.php");

?>

<div id="padre">
<h1>Citas</h1>
<p>En esta sección encotrará todas las citas que han sido agendadas.</p>
<?php
$id = $_SESSION["id_user"];
$result = getAllCitas($id);
if ($result != null) {
    //Vamos a recorrer la bd
    while ($cita = mysqli_fetch_assoc($result)) {
        //Para enviar mas de un parametro se usa ?
?>
     <div class="card" style="width: 70rem; border-color: green" id="hijo">
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h5 class="card-title d-flex justify-content-center">Reserva de citas Doctapp</h5>
                </div>                
            </div>
            <div class="row mt-2">
                <div class="col">
                    <p>Centro médico responsable <?php echo $cita["nombre_centro"]; ?></p>
                </div>
                <div class="col">
                    <p class="d-flex justify-content-end mb-0">Cita No. <?php echo $cita["id_cita"]; ?></p>
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
                    <p>Dirección <?php echo $cita["ubicacion"]; ?></p>
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
<?php
    }
}
?>



<a type="button" class="btn btn-outline-success mt-4" href="<?php echo VIEWS_PATH; ?>user/user_citas_agregar.php"><i class="fa-solid fa-plus"></i> Nuevo</a>

</div>


<?php
include(VIEWS_PATH . "footer.php");
?>