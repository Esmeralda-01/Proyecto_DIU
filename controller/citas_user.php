<?php

if (!defined('LIBRARIES_PATH')) {
    define('LIBRARIES_PATH', '../libraries/');
}

if (!defined('VIEWS_PATH')) {
    define('VIEWS_PATH', '../Views/');
}

require_once(LIBRARIES_PATH . "conexion.php");

function getAllCitas($id)
{
    $db = Conexion::getConnection();
    //crear variable para hacer consultas SQL
    $queryCitas = "SELECT id_cita, fecha_cita, fecha_agendacion, hora,u.nombre, u.telefono, u.correo, u.cc, d.nombre_doctor, d.consultorio, m.ubicacion, m.nombre_centro FROM citas  c INNER JOIN usuarios u on c.id_user =u.id_user INNER JOIN centro_medico m on c.id_centro = m.id_centro INNER JOIN doctores d on c.id_doctor = d.id_doctor where c.id_user=".$id;
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

if (isset($_POST['nueva_cita'])) {
   // $db = Conexion::getConnection();
    //$queryCentro = "SELECT id_centro FROM centro_medico where nombre_centro=".$_POST["nombre_cita"];
   // $id_centro= $db->query($queryCentro);
   // echo $id_centro;
   // $db2 = Conexion::getConnection();
    //$queryDoctor = "SELECT id_doctor FROM doctores where nombre_centro=".$_POST["especializacion"];
   // $id_doctor= $db2->query($queryDoctor);
//echo $id_doctor;
    newCita($_POST["fecha_cita"], "SYSDATE", $_POST["hora"], 1, 1, $_SESSION["id_user"]);
    header("Location:".VIEWS_PATH."user/user_citas_agreagr.php");
}