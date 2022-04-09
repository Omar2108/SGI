<<?php 

/**
 * 
 */
class factura extends AnotherClass
{
	private $idFact;
	private $nombresClientFact;
	private $tipoIdentClientFact;
	private $numeroIdentClientFact;
	private $FechaFactura;
	private $telefonoClientFact;
	private $direccionClientFact;
	private $emailClientFact;
	private $cantidadProdFact;
	private $descripProdFact;
	private $valorUFact;
	private $ivaProdFact;
	private $valorProdTotal;
	private $ivaTotalFact;
	private $subtotalFact;
	private $totalFact;
	
	function __construct($id, $nomClien, $tiIden, $numIden, $feFact, $telFact, $dirFact, $emaFact, $canFact, $descripFact, $vuFact, $ivaPFact, $vtProdFact, $ivaTFact, $subtFact, $toFact)
	{
		$this->idFact=$id;
	    $this->nombresClientFact=$nomClien;
	    $this->tipoIdentClientFact=$tiIden;
	    $this->numeroIdentClientFact=$numIden;
	    $this->FechaFactura=$feFact;
	    $this->telefonoClientFact=$telFact;
	    $this->direccionClientFact=$dirFact;
	    $this->emailClientFact=$emaFact;
	    $this->cantidadProdFact=$canFact;
	    $this->descripProdFact=$descripFact;
	    $this->valorUFact=$vuFact;
	    $this->ivaProdFact=$ivaPFact;
	    $this->valorProdTotal=$vtProdFact;
	    $this->ivaTotalFact=$ivaTFact;
	    $this->subtotalFact=$subtFact;
	    $this->totalFact=$toFact;
	}

	public function obtenerIdFact()
	{
		return $this->idFact;
	}

	public function obtenernombresClientFact()
	{
		return $this->nombresClientFact;
	}

	public function obtenerTipoIdentificacionFact()
	{
		return $this->tipoIdentClientFact;
	}

	public function obtenerNumeroIdentFact()
	{
		return $this->numeroIdentClientFact;
	}

	public function obtenerFechaFact()
	{
		return $this->FechaFacturaFact;
	}

	public function obtenerTelefonoFact()
	{
		return $this->telefonoClientFact;
	}

	public function obtenerDireccionFact()
	{
		return $this->direccionClientFact;
	}

	public function obtenerEmailFact()
	{
		return $this->emailClientFact;
	}

	public function obtenerCantidadProdFact()
	{
		return $this->cantidadProdFact;
	}

	public function obtenerDescripProdFact()
	{
		return $this->descripProdFact;
	}

	public function obtenerValorUfact()
	{
		return $this->valorUFact;
	}

	public function obtenerIvaPFact()
	{
		$ivaPFact = $valorUFact * 19%;
		return $this->ivaPFact;
	}

	public function obtenerValorProdTFact()
	{
		$valorProdTFact = $cantidadProdFact * ($valorUFact + $ivaPFact);
		return $this->valorProdTotal;
	}

	public function obtenerSubtotalFact()
	{
		$subtotalFact = $valorProdTFact;
		return $this->subtotalFact;
	}

	public function obtenerIvaTfact()
	{
		$ivaTFact = $subtotalFact * 19%;
		return $this->ivaTFact;
	}

	public function obtenerTotalFact()
	{ 
		$totalFact = $subtotalFact + $ivaTFact;
		return $this->totalFact;
	}


}



 ?>