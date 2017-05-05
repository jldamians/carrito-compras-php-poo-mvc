<?php
class ProductoBean {
	// atributos
	private $id;
	private $nombre;
	private $precio;

	// constructor
	public function __construct() {}

	// getter's y setter's
	public function setId($valor){ 
		$this->id = $valor; 
	}
	public function getId(){ 
		return $this->id; 
	}

	public function setNombre($valor){ 
		$this->nombre = $valor;
	}
	public function getNombre(){ 
		return $this->nombre;
	}

	public function setPrecio($valor){ 
		$this->precio = $valor;
	}
	public function getPrecio(){ 
		return $this->precio;
	}
}