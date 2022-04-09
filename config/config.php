<<?php 
$server = "localhost";
$user = "root";
$password = "";
$dbname = "tiendabendicion";




$conexion = new mysqli("localhost","root","","tiendabendicion");
    if(mysqli_connect_error()){
        return 0;
    } else {
        return 1;
        }

mysqli_select_db($conexion, $dbname);






 ?>







 



 



