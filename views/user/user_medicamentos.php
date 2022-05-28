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
require_once(CONTROLLER_PATH . "formulas_user.php");
?>

<div id="padre">
<h1>Fórmulas médicas</h1>
<p>En esta sección encontrará todas sus formulas medicas, aquí podra consultarlas o eliminarlas</p>
<table class="table table-bordered border-primary">
  <thead>
    <tr>
      <th>Descripción de la fórmula</th>
      <th>Eliminar</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $id = $_SESSION["id_user"];
    $result = getAllFormulas($id);
    if ($result != null) {
      //Vamos a recorrer la bd
      while ($formula = mysqli_fetch_assoc($result)) {
        //Para enviar mas de un parametro se usa ?
    ?>
        <tr>
        <td>Medicamento: <?php echo $formula["medicamento"]; ?>. Tomar <?php echo $formula["cantidad"]; ?> cada <?php echo $formula["tiempo_horas"]; ?> horas durante <?php echo $formula["tiempo_dias"]; ?> días.</td>                        
         
          <td>
            <a href="?id_formula=<?php echo $formula["id_formula"]; ?>&elimina=1">
            <i class="fa fa-trash" aria-hidden="true"style="color:#109E49"></i>
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
<?php
include(VIEWS_PATH . "footer.php");
?>