<?php
//Llamada al modelo
require_once("./model/ProductoModel.php");
require_once("./model/CarritoModel.php");

$objProducto = null;
$objCarrito = null;
$productos = null;
$items = null;

$objProducto = new ProductoModel();
$objCarrito = new CarritoModel();

$productos = $objProducto->listarProductos();
$items = $objCarrito->itemsCarrito();

//Llamada a la vista
require_once("./view/ProductosView.php");