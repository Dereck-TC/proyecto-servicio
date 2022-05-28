<?php 
	const BASE_URL = "http://localhost/serviciosx";
	//const BASE_URL = "https://takdev.herokuapp.com";

	//Zona horaria
	date_default_timezone_set('America/Lima');

	//Datos de conexión a Base de Datos
	const DB_HOST = "localhost:3307";
	const DB_NAME = "servicios";
	const DB_USER = "root";
	const DB_PASSWORD = "admin123456";
	const DB_CHARSET = "utf8";

	//Base de datos en produccion
	// const DB_HOST = "us-cdbr-east-05.cleardb.net";
	// const DB_NAME = "heroku_fef7b695df6e7a3";
	// const DB_USER = "b45ab83be1831d";
	// const DB_PASSWORD = "2d2138f6";
	// const DB_CHARSET = "utf8";

	//Para envío de correo
	const ENVIRONMENT = 1; // Local: 0, Produccón: 1;

	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "S/.";
	const CURRENCY = "PEN";

	//Api PayPal
	//SANDBOX PAYPAL
	const URLPAYPAL = "https://api-m.sandbox.paypal.com";
	const IDCLIENTE = "";
	const SECRET = "";
	//LIVE PAYPAL
	//const URLPAYPAL = "https://api-m.paypal.com";
	//const IDCLIENTE = "";
	//const SECRET = "";

	//Datos envio de correo
	const NOMBRE_REMITENTE = "Venta de Servicios";
	const EMAIL_REMITENTE = "no-reply@abelosh.com";
	const NOMBRE_EMPESA = "Servicios";
	const WEB_EMPRESA = "serviciosd@gmail.com";

	const DESCRIPCION = "Los mejores servicios que atienden sus necesidades.";
	const SHAREDHASH = "Venta de Servicios";

	//Datos Empresa
	const DIRECCION = "#";
	const TELEMPRESA = "#";
	const WHATSAPP = "#";
	const EMAIL_EMPRESA = "servicios@gmail.com";
	const EMAIL_PEDIDOS = "servicios@gmail.com"; 
	const EMAIL_SUSCRIPCION = "servicios@gmail.com";
	const EMAIL_CONTACTO = "servicios@gmail.com";

	const CAT_SLIDER = "1,2,3";
	const CAT_BANNER = "4,5,6";
	const CAT_FOOTER = "1,2,3,4,5";

	//Datos para Encriptar / Desencriptar
	const KEY = 'dereck';
	const METHODENCRIPT = "AES-128-ECB";

	//Envío
	const COSTOENVIO = 2;

	//Módulos
	const MDASHBOARD = 1;
	const MUSUARIOS = 2;
	const MCLIENTES = 3;
	const MPRODUCTOS = 4;
	const MPEDIDOS = 5;
	const MCATEGORIAS = 6;
	const MSUSCRIPTORES = 7;
	const MDCONTACTOS = 8;
	const MDPAGINAS = 9;

	//Páginas
	const PINICIO = 1;
	const PTIENDA = 2;
	const PCARRITO = 3;
	const PNOSOTROS = 4;
	const PCONTACTO = 5;
	const PPREGUNTAS = 6;
	const PTERMINOS = 7;
	const PSUCURSALES = 8;
	const PERROR = 9;

	//Roles
	const RADMINISTRADOR = 1;
	const RSUPERVISOR = 2;
	const RCLIENTES = 3;

	const STATUS = array('Completo','Aprobado','Cancelado','Reembolsado','Pendiente','Entregado');

	//Servicios por página
	const CANTPORDHOME = 8;
	const PROPORPAGINA = 4;
	const PROCATEGORIA = 4;
	const PROBUSCAR = 4;

	//REDES SOCIALES
	const FACEBOOK = "#";
	const INSTAGRAM = "#";
	

 ?>