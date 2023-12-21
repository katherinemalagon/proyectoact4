<?php
include_once('../config/config.php');
include('asesoria.php');

$p = new asesoria ();
$data = $p->getAll();

if(isset($_GET['id']) && !empty($_GET['id'])){
    $borrar= $p->delete($_GET['id']);

    if($borrar){ /* SI SE BORRA */
        header('Location'. ROOT . 'asesoria/index.php'); /* QUE SE ACTUALIZA LISTA */
    }else{ /* SINO SE BORRA QUE ME MUESTRE QUE HUBO UN ERROR */
        $mensaje= "<div class='alert-danger' rol='alert'>Error al eleminar </div>";
    }
}

?>
<!DOCTYPE html> 
<html>
    <head> 
        <meta charset="UTF-8"/>
        <title> Agenda de asesoria </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
       
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300&family=Poiret+One&family=Sulphur+Point&family=Unbounded:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../estilos/style.css">
    <link rel="stylesheet" href="../estilos/mq.css">
    
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
    <div class = "container">
        <h2 class="text-center mb-2"> Agenda </h2>
        <div class = "row"> 
            <?php
            while ($pt=mysqli_fetch_object($data)){
                $date = $pt->fecha;
            echo "<div class='col'>";
                echo"<div class='border border-info p-3'>";
                echo "<h5> <img src='".ROOT."/images/$pt->imagen' width='70' height='70' /> $pt->nombrecompleto <br>
                $pt->profesion</h5>";
                echo "<p> <b>Fecha:</b> ". date('D', strtotime($date)) . " ". date('M-Y H:i',strtotime($date) )."
                </p>";
                echo"<div class='text-center'>";
                echo "<div class='center'> <a class='btn btn-success' href='". ROOT ."/asesoria/edit.php?id=$pt->id' >Modificar</a> - <a class='btn btn-danger' href='". ROOT ."/asesoria/index.php?id=$pt->id' >Eliminar</a> </div>";
               
                echo"</div>";
             echo"</div>";
            echo"</div>";
            }
            ?>
            </div>
        </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>