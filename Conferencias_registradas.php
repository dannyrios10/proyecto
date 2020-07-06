<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<meta http-equiv="X-UA-Compatible" content="ie=edge">-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <!-- Font Awesome Icons -->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

<!-- Plugin CSS -->
<link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

<!-- Theme CSS - Includes Bootstrap -->
<link href="css/creative.min.css" rel="stylesheet">
<link href="css/estilo.css" rel="stylesheet">
</head>
    <title>
        Eventos Registrados
    </title>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Modelos de prueba de software</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="conferencias_registradas.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="Registro_conferencias.php">Registrar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="eliminar.php">Eliminar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Eventos Registrados</h1>
          <hr class="divider light my-4">
        </div>
       

<br>
<?php 
 //$conexion=mysqli_connect('localhost','root','','login','Eventos');
  function conexion()
  {
    return $conexion=mysqli_connect("localhost","root","","Eventos");
  }
  $conexion=conexion();
 ?>
 <H4>
 <font face="Arial" >
<table border="5" >
  <tr>
    <td>Folio</td>
    <td>Conferencia</td>
    <td>Sede</td>
    <td>fecha</td>
    <td>Inicio</td>
    <td>termino</td>	
    <td colspan="3">Conferencista</td>	
    <td>Lugares</td>
  </tr>

<?php

  $sql="SELECT folio, nombre_conferencia, sede, fecha, inicio, termino, 
  nombre_conferencista,apellido_pat,apellido_mat, numero_asientos FROM conferencia";
  
  $result=mysqli_query($conexion,$sql);
  while($mostrar=mysqli_fetch_array($result)){
  ?>

  
  <tr>
    <td><?php echo $mostrar['folio'] ?></td>
    <td><?php echo $mostrar['nombre_conferencia'] ?></td>
    <td><?php echo $mostrar['sede'] ?></td>
    <td><?php echo $mostrar['fecha'] ?></td>
    <td><?php echo $mostrar['inicio'] ?></td>
    <td><?php echo $mostrar['termino'] ?></td>
    <td><?php echo $mostrar['nombre_conferencista'] ?></td>
    <td><?php echo $mostrar['apellido_mat'] ?></td>
    <td><?php echo $mostrar['apellido_pat'] ?></td>
    <td><?php echo $mostrar['numero_asientos'] ?></td>
  </tr>
<?php 
}
 ?>
</table>
</font></H4>
       <br><br>

  <!-- Footer -->
  <footer class="bg-light py-5">
   
      <div class="small text-center text-muted">Escalona Espinosa Omam Sebastian/ Modelos de Prueba de Software / 3CV61</div>

  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/creative.min.js"></script>

</body>

</html>