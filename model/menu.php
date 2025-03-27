<?php
session_start();

// Verificar si la sesión de usuario está activa
if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit();
}

$username = $_SESSION['username'];
$nick = $_SESSION['nick'];
$tipo_acceso = $_SESSION['tipo_acceso'];
$nomrbe = $_SESSION['nombre'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="../img/familia.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Cliente</title>
    <link rel="stylesheet" href="../css/styleMenuBar.css">
    <link rel="stylesheet" href="../css/tabla.css">
    <link rel="stylesheet" href="../css/disenio.css">
    <link rel="stylesheet" href="../css/CSSmascota.css">
    <link rel="stylesheet" href="../css/detalleMascota.css">
    <link rel="stylesheet" href="../css/contacto.css">
    <link rel="stylesheet" href="../css/cierreSesion.css">
    <link rel="stylesheet" href="../css/popUpDetConsulta.css">
    <link rel="stylesheet" href="../css/popUpDetEmergencia.css">
    <link rel="stylesheet" href="../css/popUpPrecio.css">
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
                    <a id="inbox"  href="javascript:void(0);" onclick="home()">
                        <img src="../img/informacion personal.png"  width="30" height="30" >
                       
                        <span><?php echo " .- "?>Información Personal</span>
                        
                    </a>
                    
                </li>   
                <li>
                    <a href="javascript:void(0);" onclick="mostrarMascota()">
                        <img src="../img/mascota.png"  width="30" height="30" >
                        <span><?php echo " .- "?>Información Mascotas</span>
                    </a>
                </li>             
                <li>
                    <a href="javascript:void(0);" onclick="mostrarAnti()">
                        <img src="../img/capsulas.png"   width="30" height="30" >
                        <span><?php echo " .- "?>Antiparasitarios</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" onclick="mostrarVacuna()">
                        <img src="../img/jeringa.png"  width="30" height="30" >
                        <span><?php echo " .- "?>Vacunas</span>
                    </a>
                </li> 
                <li>
                    <a href="javascript:void(0);" onclick="mostrarCita()">
                        <img src="../img/cita.png"  width="30" height="30" >
                        <span><?php echo " .- "?>Citas</span>
                    </a>
                </li>  
                <li>
                    <a href="javascript:void(0);" onclick="mostrarConsulta()">
                        <img src="../img/consulta.png"  width="30" height="30" >
                        <span><?php echo " .- "?>Consultas</span>
                    </a>
                </li> 
                <li>
                    <a href="javascript:void(0);" onclick="mostrarEmergencia()">
                        <img src="../img/ambulancia.png"  width="30" height="30" >
                        <span><?php echo " .- "?>Emergencias</span>
                    </a>
                </li> 
                <li>
                    <a href="javascript:void(0);" onclick="mostrarContacto()">
                        <img src="../img/libreta-de-contactos.png"  width="30" height="30" >
                        <span><?php echo " .- "?>Contacto</span>
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
    

            <style>
                /* Fondo oscuro para el popup */
                .popup-overlay {
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: rgba(0, 0, 0, 0.5);
                    display: none;
                    justify-content: center;
                    align-items: center;
                }

                /* Contenedor del popup */
                .popup-container {
                    background: white;
                    padding: 20px;
                    border-radius: 12px;
                    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
                    width: 350px;
                    text-align: center;
                    position: relative;
                }

                /* Botón principal */
                .popup-button-open {
                    padding: 10px 20px;
                    background-color: #007bff;
                    color: white;
                    border: none;
                    border-radius: 8px;
                    cursor: pointer;
                    font-size: 16px;
                }

                .popup-button-open:hover {
                    background-color: #0056b3;
                }

                /* Botón de cerrar */
                .popup-button-close {
                    background: red;
                    color: white;
                    border: none;
                    padding: 8px 15px;
                    border-radius: 5px;
                    cursor: pointer;
                    margin-top: 10px;
                }

                .popup-button-close:hover {
                    background: darkred;
                }

                /* Inputs del formulario */
                .popup-input {
                    width: 100%;
                    padding: 8px;
                    margin: 8px 0;
                    border: 1px solid #ccc;
                    border-radius: 5px;
                }

                /* Botón de guardar */
                .popup-button-save {
                    width: 100%;
                    padding: 10px;
                    background-color: green;
                    color: white;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                    margin-top: 10px;
                }

                .popup-button-save:hover {
                    background-color: darkgreen;
                }
            </style>

            
            <div class="usuario">
                <img src="../img/avatar.png" alt="">
                <div class="info-usuario">
                    <div class="nombre-email">
                        <span class="nombre"><?php echo $nick;?></span>
                        <form action="../logout.php" method="POST">
                            <button type="submit" class="btn">Cerrar Sesión</button>
                        </form>
                        <!-- Botón para abrir el popup -->
                        <?php
                        if($tipo_acceso == 'T'){
                            ?>
                                <button type="button" class="popup-button-open" onclick="abrirPopup()">Crear Cliente</button>    
                            <?php
                        }
                        ?>
                            <!-- Overlay del popup -->
                        <div class="popup-overlay" id="popupOverlay" onclick="cerrarPopup()">
                            <div class="popup-container" onclick="event.stopPropagation()">
                                    <input type="text" id="rut" class="popup-input" placeholder="rut" required>
                                    <input type="text" id="nombre" class="popup-input" placeholder="Nombre" required>
                                    <input type="text" id="gmail" class="popup-input" placeholder="Correo">
                                    <input type="text" id="direccion" class="popup-input" placeholder="Dirección" required>
                                    <input type="text" id="telefono" class="popup-input" placeholder="Teléfono" required>
                                    <input type="text" id="user" class="popup-input" placeholder="Usuario" required>
                                    <input type="password" id="clave" class="popup-input" placeholder="Contraseña" required>
                                    <select class="popup-input" id="tipoUsuario" required>
                                        <option value="V">Cliente</option>
                                        <option value="T">Veterinario</option>
                                    </select>
                                    <button type="submit" class="popup-button-save" onclick="guardarInfoCli()">Guardar</button>
                                <button class="popup-button-close" onclick="cerrarPopup()">Cancelar</button>
                            </div>
                        </div>

                        <script>
                            function abrirPopup() {
                                document.getElementById("popupOverlay").style.display = "flex";
                            }

                            function cerrarPopup() {
                                document.getElementById("popupOverlay").style.display = "none";
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div id="resuldIngreso" style="display:none"></div>
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
            <div class="title-container">
                <h1 >Información Personal</h1>
            </div>
                <br>
                <div class="search-bar">
                    <input type="text" id="search" placeholder="Buscar...">

                    <script>
                        const searchInput = document.getElementById('search');
                        searchInput.addEventListener('input', function () {
                            const filter = searchInput.value.toLowerCase();
                            const rows = document.querySelectorAll('.table tbody tr');

                            rows.forEach(row => {
                                const cells = row.querySelectorAll('td');
                                const match = Array.from(cells).some(cell =>
                                    cell.textContent.toLowerCase().includes(filter)
                                );
                                row.style.display = match ? '' : 'none';
                            });
                        });
                    </script>
                </div>
                <div class="table-container">
                <style>
                    
                    .search-bar {
                        margin-bottom: 10px;
                    }

                    .search-bar input {
                        width: 34%;
                        padding: 10px;
                        font-size: 1em;
                        border: 1px solid #ddd;
                        border-radius: 5px;
                        box-sizing: border-box;
                        position: relative;
                        left: 38%;
                    }
                    .table-container {
                        max-height: 200px; /* Muestra solo 4 filas */
                        overflow-y: auto;
                        border: 1px solid #ddd;
                        border-radius: 5px;
                    }
                    table {
                        width: 100%;
                        border-collapse: collapse;
                    }

                    .titulo {
                        font-size: 1.5em;
                        font-weight: bold;
                        text-align: left;
                        margin-bottom: 10px;
                        color: #444;
                    }
                </style>
                
                <table class="table">
                    
                    <thead>
                        <tr>
                            <th>RUT</th>
                            <th>Nombre</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Rut">19.254.755-5</td>
                            <td data-label="Nombre">Matias</td>
                            <td data-label="Direccion">Los Marcos</td>
                            <td data-label="Telefono">+569 45852615</td>
                            <td data-label="Correo">mdiaz@gmail.com</td>
                        </tr>
                        <tr>
                            <td data-label="Rut">15.447.811-3</td>
                            <td data-label="Nombre">Jorge</td>
                            <td data-label="Direccion">Los Marcos</td>
                            <td data-label="Telefono">+569 45852615</td>
                            <td data-label="Correo">mdiaz@gmail.com</td>
                        </tr>
                        <tr>
                            <td data-label="Rut">19.850.627-3</td>
                            <td data-label="Nombre">Daisy</td>
                            <td data-label="Direccion">Los Marcos</td>
                            <td data-label="Telefono">+569 45852615</td>
                            <td data-label="Correo">mdiaz@gmail.com</td>
                        </tr>
                        <tr>
                            <td data-label="Rut">20.700.003-6</td>
                            <td data-label="Nombre">Luis</td>
                            <td data-label="Direccion">Los Marcos</td>
                            <td data-label="Telefono">+569 45852615</td>
                            <td data-label="Correo">mdiaz@gmail.com</td>
                        </tr>
                    </tbody>
                </table>
            </div>
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
            <div class="responsive-div2">
                <table class="styled-table">
                    <tr>
                        <td><a href="javascript:void(0);" onclick="mostrarAnti()">ANTIPARASITARIOS<br><br><img src="../img/capsulas.png"  width="50" height="50" ></a></td>
                    </tr>
                </table>
            </div>
            <div class="responsive-div3">
                <table class="styled-table">
                    <tr>
                        <td><a href="javascript:void(0);" onclick="mostrarVacuna()">VACUNAS <br><br><img src="../img/jeringa.png"  width="50" height="50" ></a></td>
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
    <div id="detalleContacto">
        <!--detalle de la informacion de contacto -->
    </div>
    <div id="detalleCita">
        <!--detalle de la informacion de citas -->
    </div>
    <div id="detalleConsulta">
        <!--detalle de la informacion de consultas -->
    </div>
    <div id="detalleEmergencia">
        <!--detalle de la informacion de emergencias -->
    </div>
    


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../js/jsMenuBar.js"></script>
</body>
</html>