<?php
include('../config/config.php');
include('asesoria.php');

    $p = new asesoria();
    $dp =mysqli_fetch_object ($p-> getOne($_GET['id'])) ;

    $date = new DateTime ($dp->fecha);

    if (isset($_POST) && !empty($_POST)){
        $_POST['imagen'] =$dp->imagen;
        if ( $_FILES['imagen']['name'] !==''){
            $_POST['imagen']= saveImage($_FILES);
        }
        $update = $p->update($_POST);
        if ($update){
            $mensaje = '<div class="alert alert-success" role="alert" >Sesión modificada con éxito. </div>';
        }else{
            $mensaje = '<div class="alert alert-danger" role="alert" > Error! </div>';

        }
    }



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Modificar asesoria</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <nav class="navbar navbar-expand navbar-dark bg-dark mb-5">
        <ul class= 'navbar-nav'>
            <li class=" nav-item">
                <a class="nav-link" href="<?php echo ROOT ?>/asesoria/index.php"> Ver Agenda </a>
</li>
<li class="nav-item"> 
    <a class="nav-link" href="<?= ROOT ?>/asesoria/add.php"> Agendar Asesoria </a>
</li>
</ul>
</nav>

</head>
<body>
    <div class = "container" >
<?php
if(isset($mensaje)){
    echo $mensaje;

}
?>

        <h2 class="text-center mb-2"> Modificar Sesión </h2>
        <form method="POST" enctype="multipart/form-data">

        <div class="row mb-2">
            <div class="col" >
                <input type="number" name="documento" id="documento" placeholder=" Documento de identidad" class= "form-control" 
                value="<?= $dp->documento ?>"/>
                <input type="hidden" name="id"  value="<?= $dp->id ?>" />
            </div>

               <div class="row mb-2">
            <div class="col" >
                <input type="text" name="nombrecompleto" id="nombrecompleto" placeholder="Nombre del Candidato" class= "form-control"  value="<?= $dp->nombrecompleto ?>"/>
                 </div>
                 <div class="row mb-2">
            <div class="col" >
                <input type="number" name="celular" id="celular" placeholder="Número de celular" class= "form-control"  value="<?= $dp->celular ?>"/> 
                 </div>
                 <div class="row mb-2">
            <div class="col" >
                <input type="email" name="correo" id="correo" placeholder="Correo electrónico" class= "form-control"  value="<?= $dp->correo ?>"/> 
                 </div>
                 <div class="row mb-2">
            <div class="col" >
                <input type="datetime-local" name="fecha" id="fecha" placeholder="Fecha de asesoria" class= "form-control"  value="<?= $date->format('Y-m-d\TH:i') ?>"/> 
                 </div>
                 <div class="row mb-2">
            <div class="col" >
                <input type="text" name="profesion" id="profesion" placeholder="Profesión u ocupación" class= "form-control"  value="<?= $dp->profesion ?>"/> 
                 </div>
                 <div class="row mb-2">
            <div class="col" >
                <input type="file" name="imagen" id="imagen" placeholder="Tu foto" class= "form-control" />
                 </div>
        </div>
        <button class="btn btn-success"> Modificar </button>
</form>
<div>

</body>
</html>