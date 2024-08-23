<?php
session_start();

// Verificar si la sesión de usuario está activa
if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Cliente</title>
    <link rel="stylesheet" href="../css/styleMenuBar.css">
    <link rel="stylesheet" href="../css/tabla.css">
    <link rel="stylesheet" href="../css/disenio.css">
    <link rel="stylesheet" href="../css/CSSmascota.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="" href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="funciones.js"></script>
</head>

<body>
    <div class="menu">
        <ion-icon name="menu-outline"></ion-icon>
        <ion-icon name="close-outline"></ion-icon>
    </div>

    <div class="barra-lateral">
        <div>
            <div class="nombre-pagina">
                <img src="../img/huellas-de-garras.png"  width="50" height="50" >    
                <span>Happy Paws</span>
            </div>
        </div>

        <nav class="navegacion">
            <ul>
                <li>
                    <a id="inbox" href="#">
                        <img src="../img/informacion personal.png"  width="30" height="30" >
                        <span><?php echo ".- "?>Información Personal</span>
                    </a>
                    
                </li>   
                <li>
                    <a href="#">
                        <img src="../img/mascota.png"  width="30" height="30" >
                        <span><?php echo ".- "?>Información Mascotas</span>
                    </a>
                </li>             
                <li>
                    <a href="#">
                        <img src="../img/capsulas.png"  width="30" height="30" >
                        <span><?php echo ".- "?>Antiparasitarios</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="../img/jeringuilla.png"  width="30" height="30" >
                        <span><?php echo ".- "?>Vacunas</span>
                    </a>
                </li>  
                <li>
                    <a href="#">
                        <img src="../img/libreta-de-contactos.png"  width="30" height="30" >
                        <span><?php echo ".- "?>Contacto</span>
                    </a>
                </li>                
            </ul>
        </nav>

        <div>
            <div class="linea"></div>

            <div class="modo-oscuro">
                <div class="info">
                    <ion-icon name="moon-outline"></ion-icon>
                    <span>Modo Oscuro</span>
                </div>
                <div class="switch">
                    <div class="base">
                        <div class="circulo">
                            
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="usuario">
                <img src="../img/avatar.png" alt="">
                <div class="info-usuario">
                    <div class="nombre-email">
                        <span class="nombre"><?php echo $username;?></span>
                        <form action="../logout.php" method="POST">
                            <button type="submit" class="btn">Cerrar Sesión</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 
    <div class="circulo1"></div>
    <div class="circulo2"></div>
    <div class="circulo3"></div>
    <div class="circulo4"></div>
    <div class="circulo5"></div>
    -->
    <div id="divMadre">
        <div class="container">
            <img src="../img/familia.png" class="image" >
            <table class="table">
                <caption class="titulo">Información Personal</caption>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-label="Nombre">Matias Alvarado</td>
                        <td data-label="Direccion">Los Marcos</td>
                        <td data-label="Telefono">+569 45852615</td>
                        <td data-label="Correo">mdiaz@gmail.com</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>
        <div class="container1">
            <div class="responsive-div">
                <table class="styled-table">
                    <tr>
                        <td><a href="javascript:void(0);" onclick="mostrarMascota()">MASCOTAS<br><br><img src="../img/mascota.png"  width="50" height="50" ></a></td>
                    </tr>
                </table>
            </div>
            <div class="responsive-div">
                <table class="styled-table">
                    <tr>
                        <td><a href="javascript:void(0);" onclick="mostrarAnti()">ANTIPARASITARIOS<br><br><img src="../img/capsulas.png"  width="50" height="50" ></a></td>
                    </tr>
                </table>
            </div>
            <div class="responsive-div">
                <table class="styled-table">
                    <tr>
                        <td><a href="javascript:void(0);" onclick="mostrarVacuna()">VACUNAS <br><br><img src="../img/jeringuilla.png"  width="50" height="50" ></a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div id="detalleMascota">
        <!--detalle de la informacion de cada mascota -->
    </div>
    <div id="detalleAnti">
        <!--detalle de la informacion de cada Antiparasitario -->
    </div>
    <div id="detalleVacuna">
        <!--detalle de la informacion de cada Vacuna -->
    </div>
    


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../js/jsMenuBar.js"></script>
</body>
</html>