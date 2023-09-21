<?php

function connection(){
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "r_user";


    $connect=mysqli_connect($host, $user, $pass, $database);
    if(!$connect){
        echo "No se realizo la conexion a la basa de datos, el error fue:".
        mysqli_connect_error() ;
        
        }

    return $connect;

}


?>