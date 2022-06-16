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

    public function updateValoracion(int $idservicio){
		$this->con = new Mysql();
        $idservicio = $idservicio != "" ? $idservicio : "";

        $query_select = "SELECT SUM(valoracion)/count(valoracion) as prom FROM comentario WHERE idservicio = $idservicio";
        $request = $this->con->select_all($query_select);
        echo "<pre>";
        var_dump(number_format($request[0]["prom"],2));
		echo "</pre>";
        $promedio = number_format($request[0]["prom"],2);
        $query_update  = "UPDATE servicio SET valoracion = $promedio WHERE idservicio = $idservicio";
		$arrData = array($idservicio);
		$request_insert = $this->con->update($query_update,$arrData);
		return $request_insert;
        echo "<pre>";
        var_dump($request_insert);
		echo "</pre>";
	}
}