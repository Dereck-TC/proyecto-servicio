<?php 
	require_once("Models/TCategoria.php");
	require_once("Models/TServicio.php");
	require_once("Models/TTipoPago.php");
	require_once("Models/TCliente.php");
	class Carrito extends Controllers{
		use TCategoria, TServicio, TTipoPago, TCliente;
		public function __construct()
		{
			parent::__construct();
			session_start();
		}

		public function carrito()
		{
			if(empty($_SESSION['arrCarrito'])){ 
				header("Location: ".base_url());
				die();
			}
			$data['page_tag'] = NOMBRE_EMPESA.' - Carrito';
			$data['page_title'] = 'Carrito de compras';
			$data['page_name'] = "carrito";
			$data['tiposPago'] = $this->getTiposPagoT();
			$this->views->getView($this,"carrito",$data); 
		}
		public function procesarpago()
		{
			if(empty($_SESSION['arrCarrito'])){ 
				header("Location: ".base_url());
				die();
			}

			$data['page_tag'] = NOMBRE_EMPESA.' - Procesar Pago';
			$data['page_title'] = 'Procesar Pago';
			$data['page_name'] = "procesarpago";
			$data['tiposPago'] = $this->getTiposPagoT();
			$this->views->getView($this,"procesarpago",$data); 
		}

	}
 ?>
