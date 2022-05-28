<?php

if (!defined('LIBRARIES_PATH')) {
    define('LIBRARIES_PATH', '../libraries/');
}

if (!defined('VIEWS_PATH')) {
    define('VIEWS_PATH', '../Views/');
}

require_once(LIBRARIES_PATH . "conexion.php");


function getAllCentros()
{
    $db = Conexion::getConnection();
    //crear variable para hacer consultas SQL
    $queryCitas = "SELECT * FROM centro_medico";
    $result = $db->query($queryCitas);
    return $result;
}
