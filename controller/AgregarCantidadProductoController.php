<?php
//Llamada al modelo
require_once('./model/ProductoModel.php');
require_once('./bean/ProductoBean.php');

$productoModel = null;
$producto = null;

$productoModel = new ProductoModel();
$productoBean = new ProductoBean();

$productoBean->setId($id);

$producto = $productoModel->buscarProducto($productoBean);

//Llamada a la vista
require_once("./view/AgregarProductoView.php");