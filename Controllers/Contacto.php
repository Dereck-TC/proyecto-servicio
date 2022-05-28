<?php 
	require_once("Models/TComentario.php");
	class Contacto extends Controllers{
		use TComentario;
		public function __construct()
		{
			parent::__construct();
			session_start();
			getPermisos(MDPAGINAS);
		}

		public function contacto()
		{
			$pageContent = getPageRout('contacto');
			if(empty($pageContent)){
				header("Location: ".base_url());
			}else{
				$data['page_tag'] = NOMBRE_EMPESA;
				$data['page_title'] = NOMBRE_EMPESA." - ".$pageContent['titulo'];
				$data['page_name'] = $pageContent['titulo'];
				$data['page'] = $pageContent;
				$idservicio = 10;
				$data['comentarios'] = $this->getComentariosT($idservicio);
				$this->views->getView($this,"contacto",$data); 
			}

		}

	}
 ?>
