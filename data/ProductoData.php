<?php
class ProductoData{
	private $productos;

	public function __construct(){
		$this->productos = [];
	}

	protected function agregar($producto) {
		$producto->setId(
			md5($producto->getNombre())
		);

		$this->productos[] = $producto;
	}

	protected function listar() {
		return $this->productos;
	}

	protected function buscar($id) {
		foreach ($this->productos as $producto) {
			if ($producto->getId() === $id) {
				return $producto;
			}
		}

		return null;		
	}
}
