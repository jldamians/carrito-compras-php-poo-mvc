<?php
session_start();

require_once './bean/CarritoBean.php';

class CarritoData {
	private $productos;

	public function __construct(){
		if (empty($_SESSION['carrito'])) {
			$this->productos = [];	
		} else {
			$this->productos = unserialize($_SESSION['carrito']);
		}
	}

	protected function agregar($producto) {
		$index = null;
		
		foreach ($this->productos as $key => $item) {
			if ($producto->getId() === $item->getId()) {
				$index = $key;
			}
		}

		if ($index === null) {
			$producto->setImporte(
				$producto->getCantidad() * $producto->getPrecio()	
			);
			$producto->setIgv(
				$producto->getImporte() * $producto->getTasa()
			);

			$this->productos[] = $producto;			
		} else {
			$productoActual = $this->productos[$index];

			$productoActual->setCantidad(
				$productoActual->getCantidad() + $producto->getCantidad()
			);
			$productoActual->setImporte(
				$productoActual->getCantidad() * $producto->getPrecio()
			);
			$productoActual->setIgv(
				$productoActual->getImporte() * $producto->getTasa()
			);

			$this->productos[$index] = $productoActual;
		}


		$_SESSION['carrito'] = serialize($this->productos);
	}

	protected function quitar($id) {
		foreach ($this->productos as $key => $producto) {
			if ($producto->getId() === $id) {
				unset($this->productos[$key]);
				$_SESSION['carrito'] = serialize($this->productos);
			}
		}
	}

	protected function mntNeto() {
		$mntNeto = 0;

		foreach ($this->productos as $producto) {
			$mntNeto += $producto->getImporte();
		}

		return $mntNeto;
	}

	protected function mntTotalIgv() {
		$mntTotalIgv = 0;

		foreach ($this->productos as $producto) {
			$mntTotalIgv += $producto->getIgv();
		}

		return $mntTotalIgv;	
	}

	protected function mntTotal() {
		return $this->montoNeto() + $this->montoTotalIgv();
	}

	protected function listar() {
		return $this->productos;
	}
}
