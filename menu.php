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
                <a href="#">Comidas</a>
                <div id="subseccion1">
                <p><a href="#" onclick="carnes();"> Carnes</a></p>
                <p><a href="#" onclick="pastas();"> Pastas</a></p>
                <p><a href="#" onclick="ensaladas();"> Ensaladas</a></p>
              </div>
            </li>

            <li id="seccion2" onmouseover="ver_submenu(2)" onmouseout="ocultar_submenu(2)">
                <a href="#">Bebidas</a>
                <div id="subseccion2">
                <p><a href="#" onclick="cocteles();" > Cocteles</a></p>
                <p><a href="#" onclick="limonadas();"> Limonadas</a></p>
              </div>
            </li>

            <li id="seccion3" onmouseover="ver_submenu(3)" onmouseout="ocultar_submenu(3)">
                <a href="#">Postres</a>
                <div id="subseccion3">
                <p><a href="#" onclick="tartas();"> Tartas</a></p>
              </div>
            </li>

            <li>
               <a> <img src="https://lh3.googleusercontent.com/xxRQTTyJbLbzxOR2arpG8B8Z_BtOJGZxYgUcSRpyYxxw0Kqh_Ndy_75kQMq7M7dAVFDxZSBsNS1cRTL-9HwE=s0" alt="" width="25" height="30">&nbsp; Llamar al mesero</a>
            </li>
            <li>
               <a href="#" id="cuenta"> <img src="https://images.vexels.com/media/users/3/204880/isolated/preview/728b85714fd73f10e946dc7c9ab97adf-icono-plano-de-pluma-de-notas-by-vexels.png" width="27" height="32">Ordenes</a>
            </li>
        </ul>
    </nav>
            <div id="cuentap" class="modal">
                <div id="mostrar_formulario" class="form-register">
                  <span id="closepa" class="close">&times;</span>
                  <h4>Cuenta</h4>
                  <input class="botons" type="submit" value="Pagar en efectivo" onclick="();">
                  <input class="botons" type="submit" value="Pagar con tarjeta" onclick="cocteles();">
                </div>
            </div>
    </header>
 <script src="js\main.js"></script>
</body>

</html>