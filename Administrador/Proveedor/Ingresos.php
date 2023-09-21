<?php

session_start();
error_reporting(0);

$validar = $_SESSION['nombre'];

if( $validar == null || $validar = ''){

  header("Location: ../includes/login.php");
  die();
  
}
?>

<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM producto";
$que = mysqli_query($con, $sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet">
    <link rel="stylesheet" href="./CSS/Barra-Navegacion.css">
    <title>Users CRUD</title>
</head>

<body style="background-color: rgb(145, 215, 248);">


<div id="menu">
            
        <ul>     
            <li><a href="../../views/user.php">Usuarios</a></li>
            <li><a href="../Inicio/index.PHP">Inicio</a></li>
            <li><a href="Ingresos.php">Ingresos</a></li>
            <li><a href="Inventario.php">Inventario</a></li>
            <li><a href="index.php">Proveedores</a></li>
            <li class="B-soporte"><a href="../Soporte/modulo soporte.php">Soporte</a></li>
            <a class="btn btn-warning" href="../../includes/_sesion/cerrarSesion.php" style="color:azure">
            <i class="fa fa-power-off" aria-hidden="true"></i>
            Cerrar Sesion</a>
        </ul>
</div>

    <div class="users-form" >
        <h1>Registrar Producto</h1>
        <form action="insert_Product.php" method="POST" class="Contenedor-registro">
            <input type="text" name="Nombre_Producto" placeholder="Ingresa nombre del producto" autocomplete="off">
            <input type="text" name="Tipo_Producto" placeholder="Ingresa tipo de producto" autocomplete="off">
            <input type="text" name="Valor" placeholder="Valor" autocomplete="off">
            <input type="datetime-local" name="Fecha_Caducidad" placeholder="Fecha_Caducidad del producto" autocomplete="off">
            <input type="datetime-local" name="Fecha_Registro" placeholder="fecha del registro de producto" autocomplete="off">
            <input type="submit" value="Agregar" style="color: black;">
        </form>
    </div>

    <div class="users-table" style="height:1%;">
        <h2>Registra el producto</h2>
        <table>
            <thead style="color:dimgray;">
                <tr>
                    <th>ID</th>
                    <th>Nombre de Producto</th>
                    <th>Tipo de Producto</th>
                    <th>Valor</th>
                    <th>Fecha de Caducidad</th>
                    <th>Fecha de registro</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody style="color: black;">
                <?php while ($row = mysqli_fetch_array($que)): ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['Nombre_Producto'] ?></th>
                        <th><?= $row['Tipo_Producto'] ?></th>
                        <th><?= $row['Valor'] ?></th>
                        <th><?= $row['Fecha_Caducidad'] ?></th>
                        <th><?= $row['Fecha_Registro'] ?></th>
                        <th><a href="./update_Producto.php?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_Product.php?id=<?= $row['id'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>