<?php

if (!defined('LIBRARIES_PATH')) {
    define('LIBRARIES_PATH', '../libraries/');
}

if (!defined('VIEWS_PATH')) {
    define('VIEWS_PATH', '../Views/');
}

require_once(LIBRARIES_PATH . "conexion.php");

function getAllFormulas($id)
{
    $db = Conexion::getConnection();
    //crear variable para hacer consultas SQL
    $queryFormulas = "SELECT * FROM formulas_medicas where id_user=".$id;
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
    header("Location:".VIEWS_PATH."user/user_medicamentos.php");
}