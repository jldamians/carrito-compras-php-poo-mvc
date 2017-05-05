<?php
//Llamada al modelo
require_once('./model/CarritoModel.php');
require_once('./bean/CarritoBean.php');

$productoModel = null;
$producto = null;

$carritoModel = new CarritoModel();
$carritoBean = new CarritoBean();

$carritoBean->setId($id);

$carritoModel->quitarCarrito($carritoBean);

header("Location: ./index.php?accion=carrito"); 