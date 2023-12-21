<?php
include_once('../config/config.php');
include('asesoria.php');

if (isset($_POST) && !empty($_POST) ){
    $p = new asesoria();

    if ($_FILES['imagen']['name'] !== ''){
        $_POST['imagen'] = saveImage($_FILES);
    } 

    $save = $p->save($_POST);
    if ($save) {
        $mensaje = '<div class = "alert alert-success" > Sesión registrada </div>';
    }else{
        $mensaje = '<div class = "alert alert-danger" > Error al registrar !</div>';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Agendar asesoria</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300&family=Poiret+One&family=Sulphur+Point&family=Unbounded:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../estilos/style.css">
    <link rel="stylesheet" href="../estilos/mq.css">
    <link rel="stylesheet" href="../estilos/paginastyle.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary barra nav">
        <div class="container-fluid" >
        <a class="navbar-brand" > <img  src="../imagenes/Logo.png" alt=""width="170px" > </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 letra">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="../index.html">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../index.html#Nosotros">Nosotros</a>
              </li>
        
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Servicios
                </a>
                <ul class="dropdown-menu barra letra">
                  <li><a class="dropdown-item" href="../Tipsdeempleabilidad.html "target="_blank" >Tips de empleabilidad</a></li>
                  <li><a class="dropdown-item" href="../Marcapersonal.html"target="_blank">Marca personal</a></li>
                  <li><a class="dropdown-item" href="../Tuhojadevida.html"target="_blank">Hoja de vida</a></li>
                  <li><hr class="dropdown-divider"></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./add.php ">Agéndate</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
      
    <div class = "container" >
<?php
if(isset($mensaje)){
    echo $mensaje;

}
?>
<section>
        <h2 class="text-center mb-2"> ¡Agenda tu sesión! </h2>
        <form  method="POST" enctype="multipart/form-data">
            <br>

        <div width="100%" class="row "> 
            <div class="col-12" >
                <input type="number" name="documento" id="documento" placeholder=" Documento de identidad" class= "form-control" />
            </div>
          
            <div class="col-12" >
                <input type="text" name="nombrecompleto" id="nombrecompleto" placeholder="Nombre del Candidato" class= "form-control" />
            </div>
            <div class="col-12" >
                <input type="number" name="celular" id="celular" placeholder="Número de celular" class= "form-control" />
                 </div>
                
            <div class="col-12" >
                <input type="email" name="correo" id="correo" placeholder="Correo electrónico" class= "form-control" />
                 </div>
                
            <div class="col-12" >
                <input type="datetime-local" name="fecha" id="fecha" placeholder="Fecha de asesoria" class= "form-control" />
                 </div>
               
            <div class="col-12" >
                <input type="text" name="profesion" id="profesion" placeholder="Profesión u ocupación" class= "form-control" />
                 </div>
                
            <div class="col-12" >
                <input type="file" name="imagen" id="imagen" placeholder="Carga tu hoja de vida" class= "form-control" />
                 </div>
        </div>
        <button  class="btn btn-success"> Agendar </button>
</form>
<div>
</section>
  <br>

<footer class="page-footer">
      <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
      <h6 class="text-uppercase font-weight-bold"><br> Redes sociales </h6>
      <br> 
      <div>
        <a href="https://www.linkedin.com/in/katherine-malag%C3%B3n-09178a144/" target="_blank">LinkdLn </a>|
        <a href="#">Facebook </a>|
        <a href="#">Instagram </a>
    </div>
    </div>
    <div class="col-md-4 col-md-4 col-sm-12">
    <h6 class="text-uppercase font-weight-bold">Contacto</h6>
    <div>
    <p>Colombia
    <br>asesorias@solucionesempresariales.com
    <br />+57 320 000 00 00
    </p>
  </div>
  <div class="footer-copyright text-center">Copyright © 2023 <br> Katherine Malagón </div>
    </footer>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>