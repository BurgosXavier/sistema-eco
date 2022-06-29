<?php
	$hostname="localhost";
	$username="bndqfuamnysa";
	$password="x2535218bgsCPANEL";
	$dbname="sistema_ecowaste";
	$usertable="empleado";
	
    $conection = mysqli_connect($hostname, $username, $password, $dbname);
    if($conection->connect_error){
        die("Eror al conectar".$conection->connect_error);
    }
    else(
        echo "conexion exitosa"
    )

?>