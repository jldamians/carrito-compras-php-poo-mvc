<?php
require_once './bean/ProductoBean.php';

class CarritoBean extends ProductoBean {
	// atributos
	private $cantidad;
	private $importe;
	private $igv;
	private $tasa;

	// constructor
	public function __construct(){
		parent::__construct();
		
		$this->tasa = 0.18;
	}

	// getter's y setter's
	public function setCantidad($valor){ 
		$this->cantidad = $valor; 
	}
	public function getCantidad(){ 
		return $this->cantidad; 
	}

	public function setImporte($valor){ 
		$this->importe = $valor;
	}
	public function getImporte(){ 
		return $this->importe;
	}

	public function setIgv($valor){ 
		$this->igv = $valor;
	}
	public function getIgv(){ 
		return $this->igv;
	}

	public function setTasa($valor){ 
		$this->tasa = $valor;
	}
	public function getTasa(){ 
		return $this->tasa;
	}
}