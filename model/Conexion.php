<?php
class Conexion{
    private $con;
    function _construct(){
        $this->con = new mysqli("localhost","root","", "Proyecto_DIU");
    }

    public function getUsuarios(){
        $query = $this->con->query("SELECT * FROM usuarios");
        $usuarios = [];

        $cont = 0;
        while($fila = $query->fetch_Assoc()){
            $usuarios [$cont] = $fila;
            $cont++;
        }
        return $usuarios;
    }
}