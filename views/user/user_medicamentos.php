<?php
define('CONTROLLER_PATH', '../../Controller/');
define('VIEWS_PATH', '../../Views/');
define('MODELS_PATH', '../../Models/');
define('LIBRARIES_PATH', '../../libraries/');
define('CSS_PATH', '../../css/');
define('JS_PATH', '../../js/');
define('IMG_PATH', '../../img/');
define('CONFIG_PATH', '../../config/');
include(VIEWS_PATH . "header.php");
require_once(CONTROLLER_PATH . "doctappdb_controller.php");
?>
<h1>Formulas medicas</h1>
<p>En esta sección encontrará todas sus formulas medicas, aquí podra consultarlas o eliminarlas</p>
<table class="table table-bordered border-primary">
  <thead>
    <tr>
      <th>Nombre del medicamento/formula</th>
      <th>Abrir</th>
      <th>Eliminar</th>
    </tr>
  </thead>
  <tbody>
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

<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
<?php
include(VIEWS_PATH . "footer.php");
?>