<?php
//Llamada al modelo
require_once("./bean/CarritoBean.php");
require_once("./model/CarritoModel.php");

extract($params);

$carritoBean = null;
$carritoModel = null;

$carritoBean = new CarritoBean();
$carritoModel = new CarritoModel();

$carritoBean->setId($id);
$carritoBean->setNombre($nombre);
$carritoBean->setPrecio($precio);
$carritoBean->setCantidad($cantidad);

$carritoModel->agregarCarrito($carritoBean);

//Llamada a la vista
header("Location: ./index.php"); 

