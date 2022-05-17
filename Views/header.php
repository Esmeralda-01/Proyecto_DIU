<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo CSS_PATH."bootstrap.min.css"; ?>">
    <link rel="stylesheet" href="<?php echo CSS_PATH."style.css"; ?>">
    <link rel="icon" type="imagen/x-icon" href="<?php echo IMG_PATH."icono.ico"?>">
    <title>DoctApp</title>
</head>

<body>
    
<header>
<div class="container-fluid">
            <nav class="navbar navbar-expand-lg "  >
                 <a href="index.php" class="opciones">
                    <img src="<?php echo IMG_PATH;?>icono.png" alt="logo de la compañia">
                    <h2 class="nombre-empresa">DoctApp</h2>
                 </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                 aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                         <ul class="navbar-nav">
                            <li class="nav-item"><a class="opciones" href="<?php echo VIEWS_PATH; ?>user/medicamentos_user.php">Medicamentos</a></li>
                            <li class="nav-item"><a class="opciones" href="<?php echo VIEWS_PATH; ?>user/citas_user.php">Citas</a></li>
                            <li class="nav-item dropdown">
                             <a class="opciones dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Nombre de usuario</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" class="dropdown-item"></a></li>
                                    <li><a href="#" class="dropdown-item"></a></li>
                                </ul>
                             </li>
                         </ul>
                     </div>
            </nav>
</div>



</header>



