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
    $queryCitas = "SELECT id_cita, fecha_cita, fecha_agendacion, hora,u.nombre, u.telefono, u.correo, u.cc, d.nombre_doctor, d.consultorio, m.ubicacion, m.nombre_centro FROM citas  c INNER JOIN usuarios u on c.id_user = u.id_user INNER JOIN centro_medico m on c.id_centro = m.id_centro INNER JOIN doctores d on c.id_doctor = d.id_doctor";
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
if (isset($_POST["eliminar"]) && isset($_POST["id_cita"])) {
    deleteOneCita($_POST["id_cita"]);
    header("Location:".VIEWS_PATH."admin/admin_citas.php");
}

function newCita($fecha_cita, $fecha_agendacion, $hora, $id_doctor,$id_centro,$id_admin)
{
    $db = Conexion::getConnection();
    //crear variable para hacer consultas SQL
    $queryCitas = "INSERT INTO citas (fecha_cita, fecha_agendacion, hora, id_doctor, id_centro, id_admin) VALUES ('$fecha_cita', '$fecha_agendacion', '$hora','$id_doctor','$id_centro','$id_admin')";
    //echo $queryCitas;
    $db->query($queryCitas);
}

if (isset($_POST['nuevo_cita'])) {
    newCita($_POST["fecha_cita"], $_POST["fecha_agendacion"], $_POST["hora"], $_POST["id_doctor"], $_POST["id_centro"], $_POST["id_admin"]);
    header("Location:".VIEWS_PATH."admin/admin_citas.php");
}