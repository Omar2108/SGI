<<?php 

/**
 * 
 */
class empleado extends AnotherClass
{

	private $nombres;
	private $apellidos;
	private $cedula;
	private $genero;
	private $telefono;
	private $direccion;
	private $email;
	private $cargo;
	private $sueldo;
	private $eps;
	private $fondoPension;
	private $arl;
	
	function __construct($nom, $ape, $ced, $gen, $tel, $dir, $ema, $car, $suel, $esp, $fonP, $arl)
	{
		$this->$nombres=$nom;
	    $this->$apellidos=$ape;
	    $this->$cedula=$ced;
	    $this->$genero=$gen;
	    $this->$telefono=$tel;
	    $this->$direccion=$dir;
	    $this->$email=$ema;
	    $this->$cargo=$car;
	    $this->$sueldo=$suel;
	    $this->$eps=$esp;
	    $this->$fondoPension=$fonP;
	    $this->$arl=$arl;
	}

	public function obtenerNombres()
	{
		return $this->nombres;
	}

	public function obtenerApellidos()
	{
		return $this->apellidos;
	}

	public function obtenerCedula()
	{
		return $this->cedula;
	}

	public function obtenerGenero()
	{
		return $this->genero;
	}

	public function obtenerTelefono()
	{
		return $this->telefono;
	}

	public function obtenerDireccion()
	{
		return $this->direccion;
	}

	public function obtenerEmail()
	{
		return $this->email;
	}

	public function obtenerCargo()
	{
		return $this->cargo;
	}

	public function obtenerSueldo()
	{
		return $this->sueldo;
	}

	public function obtenerEsp()
	{
		return $this->esp;
	}

	public function obtenerFondoPension()
	{
		return $this->fondoPension;
	}

	public function obtenerArl()
	{
		return $this->arl;
	}
}




 ?>