<<?php
/**
  * 
  */
 class proveedores extends AnotherClass
 {
 	private $nombresProv;
	private $tipoDocProv;
	private $numeroDocProv;
	private $telefonoProv;
	private $direccionProv;
	private $emailProv;

 	function __construct($nomProv, $tiDocProv, $nuDocProv, $telProv, $dirProv, $emaProv)
 	{
 		$this->$nombresProv=$nomProv;
	    $this->$tipoDocProv=$tiDocProv;
	    $this->$numeroDocProv=$nuDocProv;
	    $this->$telefonoProv=$telCli;
	    $this->$direccionProv=$dirProv;
	    $this->$emailProv=$emaProv;
 	}

 	public function obtenerNombresProv()
	{
		return $this->nombresProv;
	}

	public function obtenerTipoDocProv()
	{
		return $this->tipoDocProv;
	}

	public function obtenernumeroDocProv()
	{
		return $this->numeroDocProv;
	}

	public function obtenerTelefonoProv()
	{
		return $this->telefonoProv;
	}

	public function obtenerDireccionProv()
	{
		return $this->direccionProv;
	}

	public function obtenerEmailProv()
	{
		return $this->emailProv;
	}
 } 







 ?>