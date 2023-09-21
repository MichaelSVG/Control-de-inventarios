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
<html>
<head>
    <title>Soporte SSI</title>
    <link rel="icon" type="image/jpg" href="IMAGENES/SSI.png">
   <link href="./CSS/pagina-soporte.css" rel="stylesheet" type="text/css">
   <link href="./CSS/Barra-Navegacion.css" rel="stylesheet" type="text/css">

            <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body background='./Imagenes/Fondo.jpg'>
  
<div id="menu">
            
  <ul>   
    <li><a href="../../views/user.php">Usuarios</a></li>
    <li><a href="../Inicio/index.PHP ">Inicio</a></li>
    <li><a href="../Proveedor/Ingresos.php">Ingresos</a></li>
    <li><a href="../Proveedor/Inventario.php">Inventario</a></li>
    <li><a href="../Proveedor/index.php">Proveedores</a></li>
    <li class="B-soporte"><a href="modulo soporte.php">Soporte</a></li>
    <a href="../../includes/_sesion/cerrarSesion.php" style="color: white;">
    <i class="fa fa-power-off" aria-hidden="true"></i>
    Cerrar Sesion</a>
  </ul>


</div>
       
       
       <div class="w-33" style="text-align: center;">
<br>
              <h4 style="text-align: center; color: #525252">S O P O R T E</h4>
              <section> <br>
                   <p style="text-align: center;"> Contactate con nosotros a través de nuestra línea corporativa de 
                      atención describiendo el <b>"Nombre de la empresa", </b><b> "Correo", </b> <b>"Describes el error o falla 
                      que presenta el aplicativo web"</b> luego le das enviar y automaticamente nos notificas al correo
                      corporativo el cual estara activo las 24 horas.</p>
                      <br>
    
                    </section>
               <br> <br>
              <form  style="text-align: center; margin: auto; width: 70%;" action="https://formsubmit.co/3michael9vanegas0@gmail.com" method="POST">
   
                <div class="form-group">
                  <label for="exampleInputEmail1"> Nombre </label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre de la Empresa" name="name"  require >
                  <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Correo</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo personal o corporativo" name="email"  require >
                </div>
                <div>

                <div class="form-group">
                  <label for="exampleInputEmail1"> mensaje</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Describa el error" name="comments"  require >
                  <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <br>
                <input for="btn-eliminar" class="eliminar" type="submit" value="Enviar">
              
                <input type="hidden" name="_next" value="http://localhost/r_user/Administrador/Soporte/modulo%20soporte.php?select=value1">

              </div>
              </table>
            </form>


         </div>

<br>
<br>
<div style="padding: 4px;background-color: #c7c0bc"></div>

</body>
</html>