<?php

if (!defined('LIBRARIES_PATH')) {
    define('LIBRARIES_PATH', '../libraries/');
}

if (!defined('VIEWS_PATH')) {
    define('VIEWS_PATH', '../Views/');
}

require_once(LIBRARIES_PATH . "conexion.php");

function getAllCitas()
{
    $db = Conexion::getConnection();
    //crear variable para hacer consultas SQL
    $queryCitas = "SELECT * FROM citas";
    $result = $db->query($queryCitas);
    return $result;
}

function getOneCita($id)
{
    $db = Conexion::getConnection();
    $queryCita = "SELECT * FROM citas WHERE id_cita=" . $id;
    $result = $db->query($queryCita);
    if ($result->num_rows > 0) {
        return $result;
    }
    return null;
}

function deleteOneCita($id)
{
    $db = Conexion::getConnection();
    //crear variable para hacer consultas SQL
    $queryCitas = "DELETE FROM Citas WHERE id_cita=" . $id;
    //echo $queryCitas;
    $db->query($queryCitas);
}
if (isset($_GET["elimina"]) && isset($_GET["id_cita"])) {
    deleteOneCita($_GET["id_cita"]);
    header("Location:".VIEWS_PATH."user/user_citas_consulta.php");
}

function newCita($fecha_cita, $fecha_agendacion, $hora, $id_doctor,$id_centro,$id_user)
{
    $db = Conexion::getConnection();
    //crear variable para hacer consultas SQL
    $queryCitas = "INSERT INTO citas (fecha_cita, fecha_agendacion, hora, id_doctor, id_centro, id_user) VALUES ('$fecha_cita', '$fecha_agendacion', '$hora','$id_doctor','$id_centro','$id_user')";
    //echo $queryCitas;
    $db->query($queryCitas);
}

if (isset($_POST['nuevo_cita'])) {
    newCita($_POST["fecha_cita"], $_POST["fecha_agendacion"], $_POST["hora"], $_POST["id_doctor"], $_POST["id_centro"], $_POST["id_user"]);
    header("Location:".VIEWS_PATH."user/user_citas_consulta.php");
}