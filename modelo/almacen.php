<<?php 
/**
 * 
 */
require_once './modelo/conexion.php';

class almacen 
{
	private $idProd;
	private $nombresProd;
	private $marcaProd;
	private $fechavenc;
	private $CantidadEntr;
	private $fechaEntr;
	private $valorUnEntr;
	private $cantVend;
	private $valorUCom;
	private $fechaSa;
	private $cantidadD;
	private $utilidad;
	
	function __construct($idP, $nomP, $marP, $feVenP, $canEnP, $feEnP, $vaUnEnP, $canVenP, $vaUnCoP, $feSaP, $canDisP, $uti)
	{
		$this->$idProd=$idP;
	    $this->$nombresProd=$nomP;
	    $this->$marcaProd=$marP;
	    $this->$fechavenc=$feVenP;
	    $this->$CantidadEntr=$canEnP;
	    $this->$fechaEntrProd=$feEnP;
	    $this->$valorUnEntr=$vaUnEnP;
	    $this->$cantVend=$canVenP;
	    $this->$valorUCom=$vaUnCoP;
	    $this->$fechaSa=$feSaP;
	    $this->$cantidadD=$canDisP;
	    $this->$utilidad=$uti;
		
	}

	public function obtenerIdP()
	{
		return $this->idProd;
	}

	public function obtenerNombreP()
	{
		return $this->nombresProd;
	}

	public function obtenerMarcaP()
	{
		return $this->marcaProd;
	}

	public function obtenerFechaVen()
	{
		return $this->fechavencProd;
	}

	public function obtenerCantEntProd()
	{
		return $this->CantidadEntrProd;
	}

	public function obtenerFechaEntrProd()
	{
		return $this->fechaEntrProd;
	}

	public function obtenerValorUniEntProd()
	{
		return $this->valorUnEntrProd;
	}

	public function obtenerCantidadVenProd()
	{
		return $this->cantidadVendProd;
	}

	public function obtenervalorUniCom()
	{
		return $this->valorUnComerProd;
	}

	public function obtenerFechaSalidaProd()
	{
		return $this->fechaSalidaProd;
	}

	public function obtenerCantidadDisProd()
	{
		return $this->cantidadDispProd;
	}

	public function obtenerUtilidad()
	{
		return $this->utilidadProd;
	}

	protected static function consultaProductos($sql){

		$conexion= new conexion();
		$conexion->abrirConexion();

		$sql = $conexion->prepare("SELECT * FROM almacen WHERE IDProd = $doc;");

		$resultado=$conexion->consulta($sql);

		$resultado=$conexion->obtenerResultado();

		return $resultado;
	}

	protected static function guardarProductos($sql){

		$conexion= new conexion();
		$conexion->abrirConexion();

		$sql = $conexion->prepare("INSERT INTO almacen(IDProd, nombreProd, marcaProd, fechaVenProd, cantEntrProd, fechaEntrProd, valorUnEntrProd, cantVendProd, valorUnComProd, fechaSalProd, cantDisProd, utilidadProd) VALUES (null, '$nombresProd', '$marcaProd', '$fechaVenc', '$cantEntr', '$fechaEnt', '$valorUnEnt', '$cantVend', '$valorUCom', '$fechaSa', '$cantidadD','$utilidad')");

		$resultado=$conexion->consulta($sql);

		$resultado=$conexion->obtenerResultado();

		return $resultado;

	}
}



 ?>