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

        <h2 class="text-center mb-2"> Agendar Sesión </h2>
        <form method="POST" enctype="multipart/form-data">

        <div class="row mb-2">
            <div class="col" >
                <input type="number" name="documento" id="documento" placeholder=" Documento de identidad" class= "form-control" />
            </div>
               <div class="row mb-2">
            <div class="col" >
                <input type="text" name="nombrecompleto" id="nombrecompleto" placeholder="Nombre del Candidato" class= "form-control" />
                 </div>
                 <div class="row mb-2">
            <div class="col" >
                <input type="number" name="celular" id="celular" placeholder="Número de celular" class= "form-control" />
                 </div>
                 <div class="row mb-2">
            <div class="col" >
                <input type="email" name="correo" id="correo" placeholder="Correo electrónico" class= "form-control" />
                 </div>
                 <div class="row mb-2">
            <div class="col" >
                <input type="datetime-local" name="fecha" id="fecha" placeholder="Fecha de asesoria" class= "form-control" />
                 </div>
                 <div class="row mb-2">
            <div class="col" >
                <input type="text" name="profesion" id="profesion" placeholder="Profesión u ocupación" class= "form-control" />
                 </div>
                 <div class="row mb-2">
            <div class="col" >
                <input type="file" name="imagen" id="imagen" placeholder="Carga tu hoja de vida" class= "form-control" />
                 </div>
        </div>
        <button class="btn btn-success"> Agendar </button>
</form>
<div>

</body>
</html>