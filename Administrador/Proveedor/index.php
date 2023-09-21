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
            <li><a href="../Proveedor/Ingresos.php">Ingresos</a></li>
            <li><a href="../Proveedor/Inventario.php">Inventario</a></li>
            <li><a href="../Proveedor/index.php">Proveedores</a></li>
            <li class="B-soporte"><a href="../Soporte/modulo soporte.php">Soporte</a></li>
            <a class="btn btn-warning" href="../../includes/_sesion/cerrarSesion.php" style="color:azure">
            <i class="fa fa-power-off" aria-hidden="true"></i>
            Cerrar Sesion</a>
        </ul>
</div>

    <div class="users-form" >
        <h1>Registrar proveedor</h1>
        <form action="insert_user.php" method="POST" class="Contenedor-registro">
            <input type="text" name="name" placeholder="Nombre Completo" autocomplete="off">
            <input type="text" name="lastname" placeholder="Cedula" autocomplete="off">
            <input type="text" name="username" placeholder="Correo" autocomplete="off">
            <input type="password" name="password" placeholder="Empresa" autocomplete="off">
            <input type="email" name="email" placeholder="Email" autocomplete="off">
            <input type="text" name="Telefono" placeholder="Telefono" autocomplete="off">
            <input type="text" name="Producto" placeholder="Producto" autocomplete="off">

            <input type="submit" value="Agregar" style="color: black;">
        </form>
    </div>

    <div class="users-table">
        <h2>Usuarios registrados</h2>
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
                    <th>Editar</th>
                    <th>Eliminar</th>
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
                        <th><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_user.php?id=<?= $row['id'] ?>" class="users-table--delete" >Eliminar</a></th></tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>