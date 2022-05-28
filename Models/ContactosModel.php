<?php 

class ContactosModel extends Mysql{

	public function selectContactos()
	{
		$sql = "SELECT id, nombre, email, DATE_FORMAT(datecreated, '%d/%m/%Y') as fecha
				FROM comentario ORDER BY id DESC";
		$request = $this->select_all($sql);
		return $request;
	}

	public function selectMensaje(int $idmensaje){
		$sql = "SELECT id, nombre, email, DATE_FORMAT(datecreated, '%d/%m/%Y') as fecha, mensaje
				FROM comentario WHERE id = {$idmensaje}";
		$request = $this->select($sql);
		return $request;
	}

}
 ?>