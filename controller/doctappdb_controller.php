<?php

if (!defined('LIBRARIES_PATH')) {
    define('LIBRARIES_PATH', '../libraries/');
}

if (!defined('VIEWS_PATH')) {
    define('VIEWS_PATH', '../Views/');
}

require_once(LIBRARIES_PATH . "conexion.php");
function getAllMedicamentos()
{
    $db = Conexion::getConnection();
    //crear variable para hacer consultas SQL
    $queryMedicamentos = "SELECT * FROM medicamentos";
    $result = $db->query($queryMedicamentos);
    return $result;
}
