<?php
//Llamada al modelo
require_once("./model/CarritoModel.php");

$objCarrito = null;
$carrito = null;

$objCarrito = new CarritoModel();
$carrito = $objCarrito->listarCarrito();
$mntTotal = $objCarrito->montoTotal();
$mntTotalIgv = $objCarrito->montoTotalIgv();
$mntNeto = $objCarrito->montoNeto();

//Llamada a la vista
require_once("./view/CarritoView.php");