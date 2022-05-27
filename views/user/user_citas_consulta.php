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
require_once(CONTROLLER_PATH . "doctappdb_controller.php");
?>

<div id="padre">
<h1>Citas</h1>
<p>En esta sección encotrará todas las citas que han sido agendadas.</p>
<?php
$result = getAllMedicamentos();
if ($result != null) {
    //Vamos a recorrer la bd
    while ($medicamento = mysqli_fetch_assoc($result)) {
        //Para enviar mas de un parametro se usa ?
?>
        <tr>
            <td><?php echo $medicamento["nombre"]; ?></td>
            <td>
                <a href="?id=<?php echo $viaje["id"]; ?>" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fa-solid fa-folder-open"></i>
                </a>
            </td>
            <td>
                <a href="?id=<?php echo $viaje["id"]; ?>&elimina=1" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </a>
            </td>
        </tr>
<?php
    }
}
?>

<div class="card" style="width: 70rem; border-color: green" id="hijo">
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <h5 class="card-title d-flex justify-content-center">Reserva de citas Doctapp</h5>
                </div>
                <div class="col d-flex flex-row-reverse bd-highlight">
                    <a class="p-2 bd-highlight" href="?id=<?php echo $viaje["id"]; ?>&elimina=1" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <p>Centro médico responsable</p>
                </div>
                <div class="col">
                    <p class="d-flex justify-content-end mb-0">Cita No.</p>
                    <p class="d-flex justify-content-end mb-2">Fecha</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Nombre</p>
                </div>
                 <div class="col">
                    <p>Cc.</p>
                </div>
                <div class="col">
                    <p>Correo</p>
                </div>
                <div class="col">
                    <p>Teléfono</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Médico</p>
                </div>
                <div class="col">
                    <p>Consultorio</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Dirección</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Hora de la cita</p>
                </div>
                <div class="col">
                    <p>Fecha de la cita</p>
                </div>
            </div>
        </div>
    </div>
</div>

<a type="button" class="btn btn-outline-success mt-4" href="<?php echo VIEWS_PATH; ?>user/user_citas_agregar.php"><i class="fa-solid fa-plus"></i> Nuevo</a>

</div>


<?php
include(VIEWS_PATH . "footer.php");
?>