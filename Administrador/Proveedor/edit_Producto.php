<?php

include("connection.php");
$con = connection();

$id=$_POST["id"];
$Nombre_Producto = $_POST['Nombre_Producto'];
$Tipo_Producto = $_POST['Tipo_Producto'];
$Valor = $_POST['Valor'];
$Fecha_Caducidad = $_POST['Fecha_Caducidad'];
$Fecha_Registro = $_POST['Fecha_Registro'];


$sql="UPDATE producto SET Nombre_Producto='$Nombre_Producto', Tipo_Producto='$Tipo_Producto', Valor='$Valor', Fecha_Caducidad='$Fecha_Caducidad', Fecha_Registro='$Fecha_Registro'WHERE id='$id'";
$que = mysqli_query($con, $sql);

if($que){
    Header("Location: index.php");
}else{

}

?>