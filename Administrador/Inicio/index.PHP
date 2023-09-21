<!DOCTYPE html>
<?php

session_start();
error_reporting(0);

$validar = $_SESSION['nombre'];

if( $validar == null || $validar = ''){

  header("Location: ../includes/login.php");
  die();
  
}
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta property="og:image" content="http://www.imagehover.io/imagehover-og.jpg">
    <meta property="og:site_name" content="Imagehover.css">
    <meta property="og:title" content="Imagehover.css - An Image Hover CSS Library">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Imagehover.css - An Image Hover CSS Library</title>
    <link href="css/demo-page.css" rel="stylesheet" media="all">
    <link href="css/imagehover.min.css" rel="stylesheet" media="all">
    <link rel='shortcut icon' type='image/x-icon' href='/favicon.ico' />
    <link rel="stylesheet" href="./css/Barra-Navegacion.css">
  </head>
  <body ">
    <div id="menu">
            
      <ul>   
        <li><a href="../../views/user.php">Usuarios</a></li>
        <li><a href=" ">Inicio</a></li>
        <li><a href="../Proveedor/Ingresos.php">Ingresos</a></li>
        <li><a href="../Proveedor/Inventario.php">Inventario</a></li>
        <li><a href="../Proveedor/index.php">Proveedores</a></li>
        <li class="B-soporte"><a href="../Soporte/modulo soporte.php">Soporte</a></li>
        <a href="../../includes/_sesion/cerrarSesion.php" style="color: white;">
        <i class="fa fa-power-off" aria-hidden="true"></i>
        Cerrar Sesion</a>
      </ul>
    
    </div>

      <div class="markup" style="background-color:  rgb(145, 215, 248);"  >
        <b><h3>Mision y Vision</h3></b>
        <p><b>Nuentra Misión:</b>
          "Facilitar la gestión eficiente y precisa de inventarios para empresas y organizaciones de todo tipo, brindando herramientas tecnológicas innovadoras que simplifiquen el seguimiento y control de activos, optimicen los procesos de logística y contribuyan a la toma de decisiones informadas, impulsando así el crecimiento y la rentabilidad de nuestros clientes."
        </p>
        <p><b>Nuestra Visión</b> :
          "Ser la plataforma líder a nivel global en la gestión de inventarios, reconocida por su excelencia en tecnología, servicio al cliente y compromiso con la eficiencia empresarial. Trabajaremos incansablemente para innovar y adaptarnos a las necesidades cambiantes del mercado, empoderando a las empresas para que alcancen un nivel superior de eficiencia y rentabilidad a través de la gestión de inventarios inteligente y efectiva."</p>
        </p>

      </div>
      <hr>
      <div class="effects">
        <h3>Proximamente cursos de programación</h3>
        <div class="demo">
          <figure class="imghvr-fade"><center><img style="width: 75%; height: 100%; " src="HTML5.png" alt="example-image"></center>
            <figcaption>
              <h3>Curso HTML</h3>
              <p>En este curso encotraras todos los fundamentos basico de HTML 5</p>
            </figcaption><a href="javascript:;"></a>
          </figure>
          <textarea onclick="this.focus();this.select()" readonly="readonly">Curso HTML</textarea>
        </div>
        <div class="demo">
          <figure class="imghvr-push-up"><center><img style="width: 53%; height: 100%; " src="CSS3.png" alt="example-image"></center>
            <figcaption>
              <h3>Curso CSS</h3>
              <p>En este curso encotraras todos los fundamentos basico de CSS</p>
            </figcaption><a href="javascript:;"></a>
          </figure>
          <textarea onclick="this.focus();this.select()" readonly="readonly">Curso CSS</textarea>
        </div>
        <div class="demo">
          <figure class="imghvr-push-down"><img src="example-image.jpg" alt="example-image">
            <figcaption>
              <h3>Proximamente</h3>
              <p>Te notificaremos apenas el curso este disponible</p>
            </figcaption><a href="javascript:;"></a>
          </figure>
          <textarea onclick="this.focus();this.select()" readonly="readonly">Te notificaremos apenas el curso este disponible</textarea>
        </div>
        <div class="demo">
          <figure class="imghvr-push-left"><img src="example-image.jpg" alt="example-image">
            <figcaption>
              <h3>Proximamente</h3>
              <p>Te notificaremos apenas el curso este disponible</p>
            </figcaption><a href="javascript:;"></a>
          </figure>
          <textarea onclick="this.focus();this.select()" readonly="readonly">Te notificaremos apenas el curso este disponible</textarea>
        </div>
        <div class="demo">
          <figure class="imghvr-push-right"><img src="example-image.jpg" alt="example-image">
            <figcaption>
              <h3>Proximamente</h3>
              <p>Te notificaremos apenas el curso este disponible</p>
            </figcaption><a href="javascript:;"></a>
          </figure>
          <textarea onclick="this.focus();this.select()" readonly="readonly">Te notificaremos apenas el curso este disponible</textarea>
        </div>
        <div class="demo">
          <figure class="imghvr-slide-up"><img src="example-image.jpg" alt="example-image">
            <figcaption>
              <h3>Proximamente</h3>
              <p>Te notificaremos apenas el curso este disponible</p>
            </figcaption><a href="javascript:;"></a>
          </figure>
          <textarea onclick="this.focus();this.select()" readonly="readonly">Te notificaremos apenas el curso este disponible</textarea>
        </div>
        <div class="demo">
          <figure class="imghvr-slide-down"><img src="example-image.jpg" alt="example-image">
            <figcaption>
              <h3>Proximamente</h3>
              <p>Te notificaremos apenas el curso este disponible</p>
            </figcaption><a href="javascript:;"></a>
          </figure>
          <textarea onclick="this.focus();this.select()" readonly="readonly">Te notificaremos apenas el curso este disponible</textarea>
        </div>
        <div class="demo">
          <figure class="imghvr-slide-left"><img src="example-image.jpg" alt="example-image">
            <figcaption>
              <h3>Proximamente</h3>
              <p>Te notificaremos apenas el curso este disponible</p>
            </figcaption><a href="javascript:;"></a>
          </figure>
          <textarea onclick="this.focus();this.select()" readonly="readonly">Te notificaremos apenas el curso este disponible</textarea>
        </div>
      
