<<?php 
include 'vista/html/almacenRegistro-view.php';

$server = "localhost";
$user = "root";
$password = "";
$dbname = "tiendabendicion";

$conexion = new mysqli("localhost","root","","tiendabendicion");

if ($conexion) {
   echo "<script type=\"text/javascript\"> alert ('Conectado a la DB');";
   echo "</script>";
} else{
    echo "<script type=\"text/javascript\"> alert ('No se Puedo establecer conexion a la DB');";
    echo "</script>";
}

$selectDB = mysqli_select_db($conexion,'tiendabendicion');

if ($selectDB) {
    echo "<script type=\"text/javascript\"> alert ('Se selecciono correctamente la DB');";
    echo "</script>";
} else {
    echo "<script type=\"text/javascript\"> alert ('No se encontro la DB');";
    echo "</script>";
}


if (isset($_POST['regProducto'])) {
    $nombresProd = $_POST['nombreProd'];
    $marcaProd = $_POST['marcaProd'];
    $fechaVenc = $_POST['fechaVen'];
    $cantEntr = $_POST['cantEnt'];
    $fechaEnt = $_POST['fechaEnt'];
    $valorUnEnt = $_POST['valorUnEnt'];
    $cantVend = $_POST['cantVen'];
    $valorUCom = $_POST['valorUCom'];
    $fechaSa = $_POST['fechaSa'];
    $cantidadD = $_POST['cantidadD'];
    $utilidad = $_POST['utilidad'];


    $consulta = '';

    $consulta = "INSERT INTO almacen(IDProd, nombreProd, marcaProd, fechaVenProd, cantEntrProd, fechaEntrProd, valorUnEntrProd, cantVendProd, valorUnComProd, fechaSalProd, cantDisProd, utilidadProd) VALUES (null, '$nombresProd', '$marcaProd', '$fechaVenc', '$cantEntr', '$fechaEnt', '$valorUnEnt', '$cantVend', '$valorUCom', '$fechaSa', '$cantidadD','$utilidad')";

        
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
       echo "<script type=\"text/javascript\"> alert ('REGISTRO DE PRODUCTO EXITOSO');";
        echo "</script>";

            
    } else {
        echo "<script type=\"text/javascript\"> alert ('NO SE PUEDO REALIZAR EL REGISTRO');";
        echo "</script>";
    }

    if (mysqli_close($conexion)) {

        echo "<script type=\"text/javascript\"> alert ('DESCONEXION EXITOSA');";
        echo "</script>";

    } else {
        echo "<script type=\"text/javascript\"> alert ('ERROR EN LA DESCONEXION');";
        echo "</script>";
    }

    
        

} else {
    echo "<script type=\"text/javascript\"> alert ('ERROR EN EL REGISTRO');";
    echo "</script>";
}

 ?>