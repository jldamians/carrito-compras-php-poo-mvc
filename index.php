<?php
	// referencia: http://victorroblesweb.es/2013/11/18/tutorial-mvc-en-php-nativo/
	$accion = null;

	if(!empty($_GET["accion"])) {
	    $accion = $_GET["accion"];
	} elseif (!empty($_POST)) {
		$accion = $_POST["accion"];
	}
	
	switch ($accion) {
		case "agregar":
			$id = $_GET["id"];

			require_once('./controller/AgregarCantidadProductoController.php');
			break;
		case "eliminar":
			$id = $_GET["id"];

			require_once('./controller/EliminarProductoCarritoController.php');
			break;
		case "registrar":
			$params = array(
				"id" => $_POST["id"],
				"nombre" => $_POST["nombre"],
				"precio" => $_POST["precio"],
				"cantidad" => $_POST["cantidad"],
			);

			require_once('./controller/RegistrarProductoCarritoController.php');
			break;
		case "carrito":
			require_once('./controller/CarritoController.php');
			break;
		default:
			require_once('./controller/ProductoController.php');
			break;
	}
?>