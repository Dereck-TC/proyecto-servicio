<?php
require_once("Libraries/Core/Mysql.php");
trait TComentario{
    private $con;
    private $intIdComentario;
    private $strNombre;
    private $strEmail;
    private $strMensaje;
    private $strFecha;

    public function getComentariosT(int $idservicio){
        $this->intIdservicio = $idservicio;
        $this->con = new Mysql();
        $sql = "SELECT id, nombre, email, mensaje, datecreated, valoracion 
        FROM comentario WHERE idservicio = '{$this->intIdservicio}' ORDER BY datecreated DESC LIMIT 6";
        $request = $this->con->select_all($sql);
        return $request;
    }

    public function getRating(int $idServicio){
        $this->con = new Mysql();
        $sql = "SELECT id, valoracion
        FROM comentario WHERE idservicio = '{$idServicio}'";
        $request = $this->con->select_all($sql);
        return json_encode($request);
    }
}