<?php

session_start();
error_reporting(0);

$validar = $_SESSION['nombre'];

if( $validar == null || $validar = ''){

  header("Location: ../includes/login.php");
  die();
  
}


?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/fontawesome-all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<style type="text/css">
.pag_btn {


  border-radius: 4px;
  margin: 4px;
  padding: 5px;

  cursor: pointer;
  border: none;
 }
  
 .pag_btn_des {

  border-radius: 4px;
  margin: 4px;
  padding: 5px;
  font-size: 14pt;
  cursor: pointer;
  border: none;
 }
  
 .pag_num {


  border-radius: 4px;
  margin: 4px;
  padding: 5px;
  
  cursor: pointer;
  border: none;
  
 }
</style>
    <title>Usuarios</title>
</head>
<br>

          <ul>     
            <li><a href="../../views/user.php">Usuarios</a></li>
            <li><a href=" ">Inicio</a></li>
            <li><a href="Ingresos.php">Ingresos</a></li>
            <li><a href="Inventario.php">Inventario</a></li>
            <li><a href="index.php">Proveedores</a></li>
            <li class="B-soporte"><a href="../Soporte/modulo soporte.php">Soporte</a></li>
            <a class="btn btn-warning" href="../../includes/_sesion/cerrarSesion.php">Cerrar Sesion
            <i class="fa fa-power-off" aria-hidden="true"></i>
            </a>
          </ul>

<div class="container is-fluid">




<div class="col-xs-12">
  		<h1>Bienvenido Administrador <?php echo $_SESSION['nombre']; ?></h1>
      <br>



		<h1>Registro de proveedor</h1>
    <br>
		<div>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create">
				<span class="glyphicon glyphicon-plus"></span> Registro de nuevo proveedor <i class="fa fa-plus"></i> </a></button>

       <a class="btn btn-primary" href="../includes/excel.php">Exportar Excel
       <i class="fa fa-table" aria-hidden="true"></i>
       </a>
       <a href="../includes/reporte.php" class="btn btn-primary"><b>Exportar PDF</b> </a>
		</div>
		<br>


<!-- Aquí puedes escribir tu comentario 
    <div class="container-fluid"> 
  <form class="d-flex">
			<form action="" method="GET">
			<input class="form-control me-2" type="search" placeholder="Buscar con PHP" 
			name="busqueda"> <br>
			<button class="btn btn-outline-info" type="submit" name="enviar"> <b>Buscar </b> </button> 
			</form>
  </div>-->
  <?php
$conexion=mysqli_connect("localhost","root","","r_user"); 
$where="";

if(isset($_GET['enviar'])){
  $busqueda = $_GET['busqueda'];


	if (isset($_GET['busqueda']))
	{
		$where="WHERE proveedorCedula.correo LIKE'%".$busqueda."%' OR Nombre  LIKE'%".$busqueda."%'
    OR Correo  LIKE'%".$busqueda."%'";
	}
  
}


?>

<br>

<div class="container-fluid">
  <form class="d-flex">
    <input class="form-control me-2 light-table-filter" data-table="table_id" type="text" placeholder="Ingresa usuario para buscar">
    <hr>
  </form>
</div>

<br>

<table class="table table-striped table-dark table_id " id="tblDatos">
              
<thead>    
  <tr>
    <th>id</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Cedula</th>
    <th>Genero</th>
    <th>Correo</th>
    <th>Empresa</th>
    <th>Numero_Cel</th>
    <th>Producto</th>

  </tr>
</thead>


<tbody>

<?php
$conexion=mysqli_connect("localhost","root","","r_user");               
$SQL="SELECT user.id, user.Nombre, user.Apellido user.Cedula, user.Genero, user.Correo,
user.Empresa, user.Numero_Cel, user.Producto FROM user
LEFT JOIN permisos ON user.rol = permisos.id $where";
$dato = mysqli_query($conexion, $SQL);

if($dato -> num_rows >0){
    while($fila=mysqli_fetch_array($dato)){  
?>
<tr>
  <td><?php echo $fila['id']; ?></td>
  <td><?php echo $fila['Nombre']; ?></td>
  <td><?php echo $fila['Apellido']; ?></td>
  <td><?php echo $fila['Cedula']; ?></td>
  <td><?php echo $fila['Genero']; ?></td>
  <td><?php echo $fila['Correo']; ?></td>
  <td><?php echo $fila['Empresa']; ?></td>
  <td><?php echo $fila['Numero_Cel']; ?></td>
  <td><?php echo $fila['Producto']; ?></td>

  <td><a class="btn btn-danger"  href="eliminar_user.php?id=<?php echo $fila['id']?>">Eliminar</a></td>

</tr>

<?php
}
}else{

    ?>
    <tr class="text-center">
    <td colspan="16">No existen registros</td>
    </tr>

    
<?php } ?>



	</body>
  </table>
  <div id="paginador" class=""></div>

  
<script src="../js/page.js"></script>
<script src="../js/buscador.js"></script>
<script src="../acciones.js"></script>


		<?php include('../index.php'); ?>
		<?php include('editar_user.php'); ?>
</html>

