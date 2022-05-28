<?php

if (!defined('LIBRARIES_PATH')) {
    define('LIBRARIES_PATH', '../libraries/');
}

if (!defined('VIEWS_PATH')) {
    define('VIEWS_PATH', '../Views/');
}

require_once(LIBRARIES_PATH . "conexion.php");

function getAllFormulas()
{
    $db = Conexion::getConnection();
    //crear variable para hacer consultas SQL
    $queryFormulas = "SELECT medicamento,cantidad, tiempo_horas, tiempo_dias id_formula,u.nombre, u.telefono, u.correo, u.cc, d.nombre_doctor, d.consultorio, m.ubicacion, m.nombre_centro FROM formulas_medicas f INNER JOIN usuarios u on f.id_user = u.id_user INNER JOIN citas c on c.id_user = u.id_user INNER JOIN centro_medico m on c.id_centro = m.id_centro INNER JOIN doctores d on c.id_doctor = d.id_doctor";
    $result = $db->query($queryFormulas);
    return $result;
}

function getOneFormula($id)
{
    $db = Conexion::getConnection();
    $queryFormula = "SELECT * FROM formulas_medicas WHERE id_formula=" . $id;
    $result = $db->query($queryFormula);
    if ($result->num_rows > 0) {
        return $result;
    }
    return null;
}

function deleteOneFormula($id)
{
    $db = Conexion::getConnection();
    //crear variable para hacer consultas SQL
    $queryFormulas = "DELETE FROM formulas_medicas WHERE id_formula=" . $id;
    //echo $queryFormulas;
    $db->query($queryFormulas);
}
if (isset($_GET["elimina"]) && isset($_GET["id_formula"])) {
    deleteOneFormula($_GET["id_formula"]);
    header("Location:".VIEWS_PATH."admin/admin_medicamentos.php");
}

function newFormula($medicamento, $cantidad, $tiempo_dias, $tiempo_horas,$id_user)
{
    $db = Conexion::getConnection();
    //crear variable para hacer consultas SQL
    $queryFormulas = "INSERT INTO Formulas (medicamento, cantidad, tiempo_dias, tiempo_horas, id_user) VALUES ('$medicamento', '$cantidad', '$tiempo_dias','$tiempo_horas','$id_user')";
    //echo $queryFormulas;
    $db->query($queryFormulas);
}

if (isset($_POST['nuevo_Formula'])) {
    newFormula($_POST["medicamento"], $_POST["cantidad"], $_POST["tiempo_dias"], $_POST["tiempo_horas"], $_POST["id_user"]);
    header("Location:".VIEWS_PATH."admin/admin_medicamentos.php");
}