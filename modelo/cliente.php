<<?php 

/**
 * 
 */
class clientes 
{
	private $nombresClient;
	private $tipoDocClient;
	private $numeroDocClient;
	private $telefonoClient;
	private $direccionClient;
	private $emailClient;

	function __construct($nomCli, $TiDocCli, $nuDocCli, $telCli, $dirCli, $emaCli)
	{
		$this->$nombresClient=$nomCli;
	    $this->$tipoDocClient=$tiDocCli;
	    $this->$numeroDocClient=$nuDocCli;
	    $this->$telefonoClient=$telCli;
	    $this->$direccionClient=$dirCli;
	    $this->$emailClient=$emaCli;
	}

	public function obtenerNombresCliente()
	{
		return $this->nombresClient;
	}

	public function obtenerTipoDocCliente()
	{
		return $this->tipoDocClient;
	}

	public function obtenernumeroDocCliente()
	{
		return $this->numeroDocClient;
	}

	public function obtenerTelefonocliente()
	{
		return $this->telefonoClient;
	}

	public function obtenerDireccionCliente()
	{
		return $this->direccionClient;
	}

	public function obtenerEmailCliente()
	{
		return $this->emailClient;
	}
}


 ?>