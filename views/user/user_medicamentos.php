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
require_once(CONTROLLER_PATH . "medica_controller.php");
?>
<h1>Formulas medicas</h1>
<p>En este apartado encontrará todas sus formulas medicas, aquí podra consultarlas o eliminarlas</p>
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
                        <a href="?id=<?php echo $viaje["id"]; ?>&elimina=1"data-bs-toggle="modal" data-bs-target="#exampleModal1">
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
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Fórmula médica</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      https://es.scribd.com/document/476576742/formula-medica-pdf
        
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Message:</label>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
<?php
include(VIEWS_PATH . "footer.php");
?>