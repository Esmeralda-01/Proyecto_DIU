<?php

define('CONTROLLER_PATH', '../../Controllers/');
define('VIEWS_PATH', '../../Views/');
define('MODELS_PATH', '../../Models/');
define('LIBRARIES_PATH', '../../libraries/');
define('CSS_PATH', '../../css/');
define('JS_PATH', '../../JS/');
define('IMG_PATH', '../../img/');

include(VIEWS_PATH . "header.php");
?>
    


    <div class="container-fluid">
        
            <div class="col-md-9 container-fluid">
                <div class="jumbotron">
                    <h2 class="d-flex justify-content-center">
                        Todas sus formulas médicas
                    </h2>
                    <p class="d-flex justify-content-center">
                        En esta sección se pueden agregar nuevos viajes, modificarlos o eliminarlos.
                    </p>
                    <table class="table table-stripped d-flex justify-content-center">
                        <thead>
                            <tr>
                                <th scope="col">Destino</th>
                                <th scope="col">Tipo de Hospedaje</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Calificación</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $result = getAllViajes();
                            if ($result != null) {
                                //Vamos a recorrer la bd
                                while ($viaje = mysqli_fetch_assoc($result)) {
                                    //Para enviar mas de un parametro se usa ?
                            ?>
                                    <tr>
                                        <td><?php echo $viaje["destino"]; ?></td>
                                        <td><?php echo $viaje["tipo_hospedaje"]; ?></td>
                                        <td><?php echo $viaje["precio"]; ?></td>
                                        <td><?php echo $viaje["calificacion"]; ?></td>
                                        <td>
                                            <a href="?id=<?php echo $viaje["id"]; ?>">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="?id=<?php echo $viaje["id"]; ?>&elimina=1">
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
                    <?php

                    if (isset($_GET["id"]) && !isset($_GET["elimina"])) {
                        //echo $_GET["id"];
                        $result_one_viaje = getOneViaje($_GET["id"]);
                        //print_r($result_one_viaje);
                        while ($row = mysqli_fetch_assoc($result_one_viaje)) {
                            //print_r($row);
                    ?>
                            <form method="POST" action="<?php echo CONTROLLER_PATH; ?>viajes.php">
                                <div class="mb-3">
                                    <label for="destino" class="form-label">Destino</label>
                                    <input type="text" value="<?php echo $row["destino"]; ?>" class="form-control" id="destino" name="destino" aria-describedby="textHelp">
                                    <div id="textHelp" class="form-text">Ingrese el destino.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="tipo_hospedaje" class="form-label">Tipo de Hospedaje</label>
                                    <input type="text" value="<?php echo $row["tipo_hospedaje"]; ?>" class="form-control" id="tipo_hospedaje" name="tipo_hospedaje" aria-describedby="textHelp">
                                    <div id="textHelp" class="form-text">Ingrese el destino.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="precio" class="form-label">Precio</label>
                                    <input type="number" value="<?php echo $row["precio"]; ?>" class="form-control" id="precio" name="precio" aria-describedby="numberHelp">
                                    <div id="numberHelp" class="form-text">Ingrese el precio.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="calificacion" class="form-label">Calificación</label>
                                    <input type="number" value="<?php echo $row["calificacion"]; ?>" class="form-control" id="calificacion" name="calificacion" aria-describedby="numberHelp">
                                    <div id="numberHelp" class="form-text">Ingrese la calificación.</div>
                                </div>
                                <input type="hidden" value="<?php echo $row["id"]; ?>" name="id">
                                <input type="hidden" name="actualiza_viaje">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </form>
                    <?php
                        }
                    }

                    if (isset($_GET["elimina"]) && isset($_GET["id"])) {
                        deleteOneViaje($_GET["id"]);
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php
    include(VIEWS_PATH . "footer.php");
    ?>