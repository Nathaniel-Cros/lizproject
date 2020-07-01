<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="css\s.css">
</head>
<body class="bod">
    <header id="main-header">
    <img src="img\logob.png" class="logo">

    <nav>
        <ul >
            <li id="seccion1" onmouseover="ver_submenu(1)" onmouseout="ocultar_submenu(1)">
                <a href="#">Ordenes</a>
            </li>

            <li id="seccion2" onmouseover="ver_submenu(2)" onmouseout="ocultar_submenu(2)">
                <a href="#">Cuentas</a>
            </li>

            <li id="seccion3" onmouseover="ver_submenu(3)" onmouseout="ocultar_submenu(3)">
                <a href="#">Solicitud al mesera</a>
            </li>
        </ul>
    </nav>

    </header>
<?php include './components/footer.php'; ?>
