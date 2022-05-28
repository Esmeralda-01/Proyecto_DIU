<?php

if (!defined('LIBRARIES_PATH')) {
    define('LIBRARIES_PATH', '../libraries/');
}

if (!defined('VIEWS_PATH')) {
    define('VIEWS_PATH', '../Views/');
}

require_once(LIBRARIES_PATH . "conexion.php");


function getAllDoctores()
{
    $db = Conexion::getConnection();
    //crear variable para hacer consultas SQL
    $queryDoctores = "SELECT * FROM doctores";
    $result = $db->query($queryDoctores);
    return $result;
}