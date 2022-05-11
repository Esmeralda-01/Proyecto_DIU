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
            <nav>
                    <a href="index.php" class="opciones">
                    <img src="<?php echo IMG_PATH;?>icono.png" alt="logo de la compañia">
                    <h2 class="nombre-empresa">DoctApp</h2>
                    </a>
            </nav>

            <nav class="navbar navbar-expand-lg "  >
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                 aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarResponsive">
                         <ul class="navbar-nav">
                            <li class="nav-item"><a class="opciones" href="<?php echo VIEWS_PATH; ?>user/medicamentos_user.php">Medicamentos</a></li>
                            <li class="nav-item"><a class="opciones" href="<?php echo VIEWS_PATH; ?>user/citas_user.php">Citas</a></li>
                            <li class="nav-item dropdown ml-md-auto">
                             <a class="opciones dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                             data-toggle="dropdown">Nombre de usuario</a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another
                            action</a> <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider">
                            </div> <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                             </li>
                         </ul>
                     </div>
            </nav>
        </header>
    
</body>
