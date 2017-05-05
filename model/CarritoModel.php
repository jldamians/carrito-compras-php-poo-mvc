<?php
require_once './data/CarritoData.php';

class CarritoModel extends CarritoData {
  public function __construct() {
    parent::__construct();
  }
  
  public function agregarCarrito($producto) {
    return $this->agregar($producto);
  }

  public function quitarCarrito($producto) {
    return $this->quitar($producto->getId());
  }

  public function listarCarrito() {
    return $this->listar();
  }

  public function itemsCarrito() {
    return count($this->listar());
  }

  public function montoNeto() {
    return $this->mntNeto();
  }

  public function montoTotalIgv() {
    return $this->mntTotalIgv();
  }

  public function montoTotal() {
    return $this->mntTotal();
  }
}
