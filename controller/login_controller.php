<?php

define('CONTROLLER_PATH', '../controller/');
define('VIEWS_PATH', '../views/');
define('LIBRARIES_PATH', '../libraries/');

require_once(LIBRARIES_PATH."Conexion.php");

$db = Conexion::getConnection();
$query = "SELECT * FROM usuarios WHERE correo = '" . $_POST["correo"] . "' AND clave = '" . $_POST["clave"] . "' ";
$result = $db->query($query);
if ($result->num_rows > 0) {
    //echo "Datos Correctos";
    while ($row = mysqli_fetch_assoc($result)) {
        session_start();
        $_SESSION["nombre"] = $row["nombre"];
        $_SESSION["id_user"] = $row["id_user"];
        $_SESSION["cc"] = $row["cc"];
        $_SESSION["telefono"] = $row["telefono"];
        $_SESSION["correo"] = $row["correo"];
        if ($row["rol"] == 0) { //Usuario con menos privilegios
            header("Location:".VIEWS_PATH."user/user_home.php");
        }
        if ($row["rol"] == 1) { //Administrador
            header("Location:".VIEWS_PATH."admin/admin_home.php");
        }
    }
    //header("Location:".VIEWS_PATH."home_user.php");
} else {
    //echo "Datos Incorrectos";
    header("Location:".VIEWS_PATH."login.php?info=1");
}
?>