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
require_once(CONTROLLER_PATH . "formulas_admin.php");
?>
<div id="padre">
    <h1>Formulas medicas</h1>
    <p>En esta sección encontrará todas sus formulas medicas, aquí podra consultarlas, eliminarlas o agregar una nueva.</p>
    <table class="table table-bordered border-primary">
        <thead>
            <tr>
                <th>Descripción de la fórmula</th>
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
                        <td>Medicamento: <?php echo $formula["medicamento"]; ?>. Tomar <?php echo $formula["cantidad"]; ?> cada <?php echo $formula["tiempo_horas"]; ?> horas durante <?php echo $formula["tiempo_dias"]; ?> días.</td>                        
                        <td>
                            <a data-bs-toggle="modal" data-bs-target="#nuevoModal">
                                <i class="fa-solid fa-plus" style="color:#109E49"></i>
                            </a>
                        </td>
                        <td>
                            <a href="?id_formula=<?php echo $formula["id_formula"]; ?>&elimina=1">
                                <i class="fa fa-trash" aria-hidden="true" style="color:#109E49"></i>
                            </a>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>
    <?php  
    if (isset($_GET["elimina"]) && isset($_GET["id_formula"])) {
        deleteOneFormula($_GET["id_formula"]);
    }
    ?>
    <div class="modal fade" id="nuevoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Inserte los datos de la fórmula médica</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?php echo CONTROLLER_PATH; ?>formulas_admin.php">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nombre</label>
                            <input type="text" class="form-control" id="recipient-name" name="medicamento">
                            <div id="emailHelp" class="form-text">Ingrese el nombre del medicamento.</div>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Tiempo en días de consumo del medicamento.</label>
                            <input type="number" class="form-control" id="message-text" name="tiempo_dias"></input>
                            <div id="emailHelp" class="form-text">Ingrese el número de días.</div>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Cantidad de dosis para el consumo del medicamento.</label>
                            <input type="number" class="form-control" id="message-text" name="cantidad"></input>
                            <div id="emailHelp" class="form-text">Ingrese el número de dosis.</div>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Lapso de tiempo que el paciente debe tomar antes de volver a tomar el medicamento.</label>
                            <input type="number" class="form-control" id="message-text" name="tiempo_horas"></input>
                            <div id="emailHelp" class="form-text">Ingrese el número de horas.</div>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Identificación.</label>
                            <input type="number" class="form-control" id="message-text" name="cc"></input>
                            <div id="emailHelp" class="form-text">Ingrese el número de identificación del paciente.</div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <input type="hidden" name="nueva_formula">
                    <button type="summit" class="btn btn-primary">Agregar</button>
                </div>
            </div>
        </div>
    </div>

</div>
<?php
include(VIEWS_PATH . "footer.php");
?>