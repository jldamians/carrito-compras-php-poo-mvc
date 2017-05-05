<?php
require_once './data/ProductoData.php';
require_once './bean/ProductoBean.php';

class ProductoModel extends ProductoData {
  public function __construct() {
    parent::__construct();

    $producto1 = null;
    $producto2 = null;
    $producto3 = null;
    $producto4 = null;
    $producto5 = null;

    $producto1 = new ProductoBean();
    $producto2 = new ProductoBean();
    $producto3 = new ProductoBean();
    $producto4 = new ProductoBean();
    $producto5 = new ProductoBean();

    $producto1->setNombre('Zapatillas Deportivas Adidas');
    $producto1->setPrecio(300);

    $producto2->setNombre('Short Deportivo Fila');
    $producto2->setPrecio(60);

    $producto3->setNombre('Polo Deportivo Nike');
    $producto3->setPrecio(97);

    $producto4->setNombre('Medias Deportivas Rebook');
    $producto4->setPrecio(20);

    $producto5->setNombre('Casaca Deportiva Adidas');
    $producto5->setPrecio(236);

    $this->agregar($producto1);
    $this->agregar($producto2);
    $this->agregar($producto3);
    $this->agregar($producto4);
    $this->agregar($producto5);
  }
  
  public function listarProductos() {
    return $this->listar();
  }

  public function buscarProducto($producto) {
    return $this->buscar($producto->getId());
  }
}
