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
require_once(CONTROLLER_PATH . "medica_controller.php");
?>
<h1>Asignación de citas</h1>
<p>En esta sección podrá agenadar una nueva cita.</p>
<div class="card" style="width: 50rem;">
  <div class="card-body">
    <div class="container">
      <h5 class="card-title">Datos del paciente</h5>
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
      <p>Correo</p>
      <h5>Ingrese los datos de la cita</h5>
      <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">Hora de cita</label>
          <input type="time" class="form-control" id="validationCustom02" value="Otto" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-8">
          <label for="validationCustom03" class="form-label">Fecha de la cita</label>
          <input type="date" class="form-control" id="validationCustom03" required>
          <div class="invalid-feedback">
            Please provide a valid city.
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustom04" class="form-label">Lugar de la cita</label>
          <select class="form-select" id="validationCustom04" required>
            <option selected disabled value="">Choose...</option>
            <option>...</option>
          </select>
          <div class="invalid-feedback">
            Please select a valid state.
          </div>          
        </div>
        <div class="col-md-8 mt-5 d-flex justify-content-end">
          <button class="btn btn-primary" type="submit">Confirmar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php
include(VIEWS_PATH . "footer.php");
?>