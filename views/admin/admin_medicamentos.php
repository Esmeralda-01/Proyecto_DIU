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
require_once(CONTROLLER_PATH . "doctappdb_controller.php");
?>
<div id="padre">
    <h1>Formulas medicas</h1>
    <p>En esta sección encontrará todas sus formulas medicas, aquí podra consultarlas, eliminarlas o agregar una nueva.</p>
    <table class="table table-bordered border-primary">
        <thead>
            <tr>
                <th>Nombre del medicamento/formula</th>
                <th>Abrir</th>
                <th>Nueva</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = getAllFormulas();
            if ($result != null) {
                //Vamos a recorrer la bd
                while ($formula = mysqli_fetch_assoc($result)) {
                    //Para enviar mas de un parametro se usa ?
            ?>
                    <tr>
                        <td><?php echo $formula["medicamento"]; ?></td>
                        <td>
                            <a href="?id=<?php echo $formula["id_formula"]; ?>" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fa-solid fa-folder-open"></i>
                            </a>
                        </td>
                        <td>
                            <a href="?id=<?php echo $formula["id_formula"]; ?>&elimina=1" data-bs-toggle="modal" data-bs-target="#nuevoModal">
                                <i class="fa-solid fa-plus"></i>
                            </a>
                        </td>
                        <td>
                            <a href="?id=<?php echo $formula["id_formula"]; ?>&elimina=1" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar fórmula médica</h5>
                </div>
                <div class="modal-body">
                    ¿Esta seguro que quiere eliminar esta fórmula médica?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Eliminar</button>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_GET["id_formula"]) && !isset($_GET["elimina"])) {
        //echo $_GET["id"];
        $result_one_formula = getOneFormula($_GET["id_formula"]);
        //print_r($result_one_viaje);
        while ($row = mysqli_fetch_assoc($result_one_formula)) {
            //print_r($row);
    ?>
            
    <?php
        }
    }
    if (isset($_GET["elimina"]) && isset($_GET["id_formula"])) {
        deleteOneFormula($_GET["id_formula"]);
    }
    ?><div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Fórmula médica</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <h5>Datos del paciente</h5>
                                <div class="row mt-2">
                                    <div class="col">
                                        <p>Centro médico responsable</p>
                                    </div>
                                    <div class="col">
                                        <p class="d-flex justify-content-end mb-0">Fórmula No.</p>
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
                                        <p>Teléfono</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p>Correo</p>
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
                                    <h5>Descripción</h5>
                                    <p>Medicamento ... tomar ... cada ... horas durante ... días.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <div class="modal fade" id="nuevoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Inserte los datos de la fórmula médica</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nombre</label>
                            <input type="text" class="form-control" id="recipient-name">
                            <div id="emailHelp" class="form-text">Ingrese el nombre del medicamento.</div>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Tiempo en días de consumo del medicamento.</label>
                            <input type="number" class="form-control" id="message-text"></input>
                            <div id="emailHelp" class="form-text">Ingrese el número de días.</div>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Cantidad de dosis para el consumo del medicamento.</label>
                            <input type="number" class="form-control" id="message-text"></input>
                            <div id="emailHelp" class="form-text">Ingrese el número de dosis.</div>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Lapso de tiempo que el paciente debe tomar antes de volver a tomar el medicamento.</label>
                            <input type="number" class="form-control" id="message-text"></input>
                            <div id="emailHelp" class="form-text">Ingrese el número de horas.</div>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Identificación.</label>
                            <input type="number" class="form-control" id="message-text"></input>
                            <div id="emailHelp" class="form-text">Ingrese el número de identificación del paciente.</div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Agregar</button>
                </div>
            </div>
        </div>
    </div>

</div>
<?php
include(VIEWS_PATH . "footer.php");
?>