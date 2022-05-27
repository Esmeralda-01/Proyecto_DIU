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

<div class="container3">
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
    <button type="submit" class="btn2 btn-outline-success mt-4">Iniciar sesión</button>
</form>
</div>
<?php
include(VIEWS_PATH . "footer.php");
?>