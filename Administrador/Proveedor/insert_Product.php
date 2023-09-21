<?php
include("connection.php");
$con = connection();

$id = null;
$Nombre_Producto = $_POST['Nombre_Producto'];
$Tipo_Producto = $_POST['Tipo_Producto'];
$Valor = $_POST['Valor'];
$Fecha_Caducidad = $_POST['Fecha_Caducidad'];
$Fecha_Registro = $_POST['Fecha_Registro'];


$sql = "INSERT INTO producto VALUES('$id','$Nombre_Producto','$Tipo_Producto','$Valor','$Fecha_Caducidad','$Fecha_Registro')";
$query = mysqli_query($con, $sql);
Header("Location: Ingresos.php");

if($query){
    Header("Location: Ingresos.php");
}else{

}

?>