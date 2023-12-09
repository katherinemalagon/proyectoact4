<?php

include ('config/config.php');


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title> Soluciones de Empleabilidad </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark mb-5 ">
        <ul class= 'navbar-nav'>
            <li class=" nav-item">
                <a class="nav-link" href="<?php echo ROOT ?>/asesoria/index.php"> Ver Agenda </a>
</li>
<li class="nav-item"> 
    <a class="nav-link" href="<?= ROOT ?>/asesoria/add.php"> Agendar Asesoria </a>
</li>
</ul>
</nav>
<div class="container"> 
    <h1 class="text-center"> ¡Agenda tu sesión! </h1>
</div>
</body>
</html>