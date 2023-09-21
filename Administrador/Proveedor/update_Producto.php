<?php 
    include("connection.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM producto WHERE id='$id'";
    $que=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($que);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Editar usuarios</title>
        
    </head>
    <body>
        <div class="users-form">
            <form action="./edit_Producto.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <input type="text" name="Nombre_Producto" placeholder="Nombre" value="<?= $row['Nombre_Producto']?>">
                <input type="text" name="Tipo_Producto" placeholder="Apellidos" value="<?= $row['Tipo_Producto']?>">
                <input type="number" name="Valor" placeholder="Username" value="<?= $row['Valor']?>">
                <input type="datetime-local" name="Fecha_Caducidad" placeholder="Password" value="<?= $row['Fecha_Caducidad']?>">
                <input type="datetime-local" name="Fecha_Registro" placeholder="Email" value="<?= $row['Fecha_Registro']?>">
        

                <input type="submit" value="Actualizar">
                <button><a href="Ingresos.php">Volver</a></button>
            </form>
        </div>
    </body>
</html>