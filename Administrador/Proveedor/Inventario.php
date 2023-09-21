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

$sql = "SELECT * FROM users";
$query = mysqli_query($con, $sql);

$sq = "SELECT * FROM producto";
$quer = mysqli_query($con, $sq);

$sq = "SELECT * FROM user";
$quir = mysqli_query($con, $sq);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet">
    <link rel="stylesheet" href="./CSS/Barra-Navegacion.css">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Users CRUD</title>
</head>

<body style="background-color: rgb(145, 215, 248);">


    <div id="menu">
                
        <ul>     
            <li><a href="../../views/user.php">Usuarios</a></li>
            <li><a href="../Inicio/index.PHP ">Inicio</a></li>
            <li><a href="Ingresos.php">Ingresos</a></li>
            <li><a href="Inventario.php">Inventario</a></li>
            <li><a href="index.php">Proveedores</a></li>
            <li class="B-soporte"><a href="../Soporte/modulo soporte.php">Soporte</a></li>
            <a class="btn btn-warning" href="../../includes/_sesion/cerrarSesion.php" style="color:azure">
            <i class="fa fa-power-off" aria-hidden="true"></i>
            Cerrar Sesion</a>
        </ul>
    </div>
    
    <br><br><br><br>

<br>
      

    <div class="users-table" >
        <h2>Proveedores registrados</h2>
        <table>
            <thead style="color: black;">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Producto</th>

                </tr>
            </thead>
            <tbody style="color: black;">
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['name'] ?></th>
                        <th><?= $row['lastname'] ?></th>
                        <th><?= $row['username'] ?></th>
                        <th><?= $row['password'] ?></th>
                        <th><?= $row['email'] ?></th>
                        <th><?= $row['Telefono'] ?></th>
                        <th><?= $row['Producto'] ?></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
<br>
    <div class="users-table" >
        <h2>Productos registrados</h2>
        <table>
            <thead style="color: black;">
                <tr>
                    <th>ID</th>
                    <th>Nombre de Producto</th>
                    <th>Tipo de Producto</th>
                    <th>Valor</th>
                    <th>Fecha de Caducidad</th>
                    <th>Fecha de registro</th>
                </tr>
            </thead>
            <tbody style="color: black;">
                <?php while ($row = mysqli_fetch_array($quer)): ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['Nombre_Producto'] ?></th>
                        <th><?= $row['Tipo_Producto'] ?></th>
                        <th><?= $row['Valor'] ?></th>
                        <th><?= $row['Fecha_Caducidad'] ?></th>
                        <th><?= $row['Fecha_Registro'] ?></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
<br>
    <div class="users-table">
        <h2>Usuarios registrados</h2>
        <table>
            <thead style="color: black;">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Contraseña</th>
                    <th>Fecha</th>
                    <th>1 Admin - 2 Lector</th>
                </tr>
            </thead>
            <tbody style="color: black;">
                <?php while ($row = mysqli_fetch_array($quir)): ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['nombre'] ?></th>
                        <th><?= $row['correo'] ?></th>
                        <th><?= $row['telefono'] ?></th>
                        <th><?= $row['password'] ?></th>
                        <th><?= $row['fecha'] ?></th>
                        <th><?= $row['rol'] ?></th>

                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>
<div id="paginador" class=""></div>

  
<script src="../js/page.js"></script>
<script src="../js/buscador.js"></script>

<script src="../acciones.js"></script>

</html>