<<?php 

class Conexion {
	private $mySQLI;
    private $sql;
    private $resultado;
    private $filasAfectadas;
    private $tiendabendicionId;

    public function abrirConexion()
    {
    	$this->mySQLI=new mysqli("localhost","root","","tiendabendicion");
        if(mysqli_connect_error()){
            return 0;
        } else {
            return 1;
        }
    }

    public function cerrarConexion()
    {
    	$this->mySQLI->close();
    }

    public function consulta($sql)
    {
    	$this->sql = $sql;
        $this->resultado = $this->mySQLI->query($this->sql);
        $this->filasAfectadas = $this->mySQLI->affected_rows;
        $this->tiendabendicionId = $this->mySQLI->insert_id;
    }

    public function obtenerResultado()
    {
    	return $this->resultado;
    }

    public function obtenertiendabendicionId()
    {
    	return $this->tiendabendicionId;
    }



}



 ?>