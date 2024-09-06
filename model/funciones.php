<?php
if($accion=="mostrarContacto"){
	?>
    <img src="../img/familia.png" class="image" >
    <div class="container2" style="max-width: 500px;">
        <div class="header">
            <a href="javascript:void(0);" onclick="volverMenu0()"><img src="../img/volver.png" width="50" height="50" /></a><span class="title" id="titulo1">CONTACTO</span>
            <span class="date" > <span id="Fecha"></span></span>
        </div>
        <div class="contact-info">
            <div class="contact-item">
                <img  src="../img/mapa.png" alt="Address Icon" class="contact-icon">
                <span>1234 Calle Ejemplo, Ciudad</span>
            </div>
            <div class="contact-item">
                <img src="../img/telefono-fijo.png" alt="Phone Icon" class="contact-icon">
                <span>(+123) 456-7890</span>
            </div>
            <div class="contact-item">
                <img src="../img/gmail.png"  alt="Email Icon" class="contact-icon">
                <span>contacto@ejemplo.com</span>
            </div>
            <div class="contact-item">
                <img src="../img/whatsapp.png" alt="WhatsApp Icon" class="contact-icon">
                <span>(+123) 456-7890</span>
            </div>
            <div class="contact-item">
                <img src="../img/instagram.png" alt="Instagram Icon" class="contact-icon">
                <span>@ejemplo</span>
            </div>
            <div class="contact-item">
                <img src="../img/facebook.png" alt="Facebook Icon" class="contact-icon">
                <span>facebook.com/ejemplo</span>
            </div>
                <a href="javascript:void(0);" onclick="mostrarPopUpPrecio()" >
                    <div class="card precios" style="background-color:  #d6eaff;">
                        <img src="../img/signo-de-dolar.png" alt="Facebook Icon" class="contact-icon">
                        <span>Precios</span>
                    </div>
                </a>       
        </div>    
        <!-- Contenedor del popup -->
        <div id="popupPrecio" class="popup2" style="Display: none;">
            <div class="popup2-content">
                <div class="popup2-info">
                    <div class="info2-item">
                        <strong>Consultas</strong>
                        <p>De Lunes a Sabado 10.000</p>
                        <p>Domigos y festivos 15.000</p>
                    </div>
                    <div class="info2-item">
                        <strong>Cortes de pelo</strong>
                        <p>10.000 Como minimo</p>
                    </div>
                    <div class="info2-item">
                        <strong>Desparacitaciones</strong>
                        <p>6.000</p>
                    </div>
                    <div class="info2-item">
                        <strong>Vacunas</strong>
                        <p>15.000</p>
                    </div>
                    <div class="info2-item">
                        <strong>Citas</strong>
                        <p>5.000</p>
                    </div>
                    <div class="info2-item">
                        <strong>Emergencia Domiciliar</strong>
                        <p>20.000</p>
                    </div>
                </div>
                <button onclick="cerrarPopup2()">Cerrar</button>
            </div>
        </div>
        <script>
            function mostrarPopUpPrecio() {
                document.getElementById("popupPrecio").style.display = "flex";
            }

            function cerrarPopup2() {
                document.getElementById("popupPrecio").style.display = "none";
            }
        </script>  
    </div>
    <script>
        /*
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();

        today = dd + '/' + mm + '/' + yyyy;
        console.log(today);
        document.getElementById("Fecha").innerHTML = today;
        */
    </script>
    <?php	
}
if($accion=="mostrarMascota"){
	?>
    <img src="../img/familia.png" class="image" >
    <div class="container2">
        <div class="header">
            <a href="javascript:void(0);" onclick="volverMenu()"><img src="../img/volver.png" width="50" height="50" /></a><span class="title">Detalle Mascota</span>
            <span class="date" > <span id="Fecha"></span></span>
        </div>
        <div class="content">
            <div class="sidebar">
                <div class="item">
                    <a href="javascript:void(0);" onclick="detMascota()">
                        <div style="display: flex; align-items: center;">
                            <img src="../img/lista.png" alt="Foto de Thanos" style="width: 40px; height: 40px;  margin-right: 10px;">
                            <strong style="font-size: 18px;">Thanos</strong>
                        </div>
                    </a>
                </div>
                
                <!-- Más bloques pueden ser agregados aquí -->
            </div>
            <div class="main-content">
                <div class="info-box" id="detMascotaP">
                    <!-- informacion mascota -->
                </div>
            </div>
        </div>
    </div>
    <script>
        /*
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();

        today = dd + '/' + mm + '/' + yyyy;
        console.log(today);
        document.getElementById("Fecha").innerHTML = today;
        */
    </script>
    <?php	
}
if($accion=="mostrarAnti"){
	?>
    <img src="../img/familia.png" class="image" >
    <div class="container2">
        <div class="header">
            <a href="javascript:void(0);" onclick="volverMenu2()"><img src="../img/volver.png" width="50" height="50" /></a><span class="title">Detalle Antiparasitario</span>
            <span class="date" ><span id="Fecha"></span></span>
        </div>
        <div class="content">
            <div class="sidebar">
                <div class="item">
                    <a href="javascript:void(0);" onclick="detMascotaAnti()">
                        <div style="display: flex; align-items: center;">
                            <img src="../img/lista.png" alt="Foto de Thanos" style="width: 40px; height: 40px;  margin-right: 10px;">
                            <strong style="font-size: 18px;">Thanos</strong>
                        </div>
                    </a>
                </div>
                <!-- Más bloques pueden ser agregados aquí -->
            </div>
            <div class="sidebar" id="detMascotaAntiD">
                
                <!-- Más bloques pueden ser agregados aquí -->
            </div>
            <div class="main-content">
                <div class="info-box" id="detAntiP">
                    <!-- detalle de antiparasitario -->
                     

                </div>
            </div>
        </div>
    </div>
    <script>
        /* 
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();

        today = dd + '/' + mm + '/' + yyyy;
        console.log(today);
        document.getElementById("Fecha").innerHTML = today;
        */
    </script>
    <?php	
}
if($accion=="mostrarVacuna"){
	?>
    <img src="../img/familia.png" class="image" >
    <div class="container2">
        <div class="header">
            <a href="javascript:void(0);" onclick="volverMenu3()"><img src="../img/volver.png" width="50" height="50" /></a><span class="title">Detalle Vacuna</span>
            <span class="date" ><span id="Fecha"></span></span>
        </div>
        <div class="content">
            <div class="sidebar" >
                <div class="item">
                    <a href="javascript:void(0);" onclick="detMascotaVacuna()">
                        <div style="display: flex; align-items: center;">
                            <img src="../img/lista.png" alt="Foto de Thanos" style="width: 40px; height: 40px;  margin-right: 10px;">
                            <strong style="font-size: 18px;">Thanos</strong>
                        </div>
                    </a>
                </div>
                <!-- Más bloques pueden ser agregados aquí -->
            </div>
            <div class="sidebar" id="detMascotaVacunaD">
                
                <!-- Más bloques pueden ser agregados aquí -->
            </div>
            <div class="main-content">
                <div class="info-box" id="detVacunaP"></div>
            </div>
        </div>
    </div>
    <script>
        /*
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();

        today = dd + '/' + mm + '/' + yyyy;
        console.log(today);
        document.getElementById("Fecha").innerHTML = today;
         */
    </script>
    <?php	
}
if($accion=="mostrarCita"){
	?>
    <img src="../img/familia.png" class="image" >
    <div class="container2">
        <div class="header">
            <a href="javascript:void(0);" onclick="volverMenu4()"><img src="../img/volver.png" width="50" height="50" /></a><span class="title">Detalle Citas</span>
            <span class="date" ><span id="Fecha"></span></span>
        </div>
        <div class="content">
            <div class="sidebar" >
                <div class="item">
                    <a href="javascript:void(0);" onclick="detMascotaCitas()">
                        <div style="display: flex; align-items: center;">
                            <img src="../img/lista.png" alt="Foto de Thanos" style="width: 40px; height: 40px;  margin-right: 10px;">
                            <strong style="font-size: 18px;">Thanos</strong>
                        </div>
                    </a>
                </div>
                <!-- Más bloques pueden ser agregados aquí -->
            </div>
            <div class="sidebar" id="detMascotaCitasD">
                
                <!-- Más bloques pueden ser agregados aquí -->
            </div>
            <div class="main-content">
                <div class="info-box" id="detCitaP"></div>
            </div>
        </div>
    </div>
    <script>
        /*
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();

        today = dd + '/' + mm + '/' + yyyy;
        console.log(today);
        document.getElementById("Fecha").innerHTML = today;
         */
    </script>
    <?php	
}
if($accion=="mostrarConsulta"){
	?>
    <img src="../img/familia.png" class="image" >
    <div class="container2">
        <div class="header">
            <a href="javascript:void(0);" onclick="volverMenu5()"><img src="../img/volver.png" width="50" height="50" /></a><span class="title">Detalle Consultas</span>
            <span class="date" ><span id="Fecha"></span></span>
        </div>
        <div class="content">
            <div class="sidebar" >
                <div class="item">
                    <a href="javascript:void(0);" onclick="detMascotaConsulta()">
                        <div style="display: flex; align-items: center;">
                            <img src="../img/lista.png" alt="Foto de Thanos" style="width: 40px; height: 40px;  margin-right: 10px;">
                            <strong style="font-size: 18px;">Thanos</strong>
                        </div>
                    </a>
                </div>
                <!-- Más bloques pueden ser agregados aquí -->
            </div>
            <div class="sidebar" id="detMascotaConsultaD">
                
                <!-- Más bloques pueden ser agregados aquí -->
            </div>
            <div class="main-content">
                <div class="info-box" id="detConsultaP"></div>
            </div>
        </div>
    </div>
    <script>
        /*
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();

        today = dd + '/' + mm + '/' + yyyy;
        console.log(today);
        document.getElementById("Fecha").innerHTML = today;
         */
    </script>
    <?php	
}
if($accion=="mostrarEmergencia"){
	?>
    <img src="../img/familia.png" class="image" >
    <div class="container2">
        <div class="header">
            <a href="javascript:void(0);" onclick="volverMenu6()"><img src="../img/volver.png" width="50" height="50" /></a><span class="title">Detalle Emergencia</span>
            <span class="date" ><span id="Fecha"></span></span>
        </div>
        <div class="content">
            <div class="sidebar" >
                <div class="item">
                    <a href="javascript:void(0);" onclick="detMascotaEmergencia()">
                        <div style="display: flex; align-items: center;">
                            <img src="../img/lista.png" alt="Foto de Thanos" style="width: 40px; height: 40px;  margin-right: 10px;">
                            <strong style="font-size: 18px;">Thanos</strong>
                        </div>
                    </a>
                </div>
                <!-- Más bloques pueden ser agregados aquí -->
            </div>
            <div class="sidebar" id="detMascotaEmergenciaD">
                
                <!-- Más bloques pueden ser agregados aquí -->
            </div>
            <div class="main-content">
                <div class="info-box" id="detEmergenciaP"></div>
            </div>
        </div>
    </div>
    <script>
        /*
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();

        today = dd + '/' + mm + '/' + yyyy;
        console.log(today);
        document.getElementById("Fecha").innerHTML = today;
         */
    </script>
    <?php	
}





if($accion=="detMascota"){
	?>
    <div class="tabla-detalle">
        <div class="fila">
            <div class="columna">
                <div class="detalle">
                    <strong>Edad</strong><br>
                    1 año
                </div>
            </div>
            <div class="columna">
                <div class="detalle">
                    <strong>Raza</strong><br>
                    mestizo 
                </div>
            </div>
        </div>
        <div class="fila">
            <div class="columna">
                <div class="detalle">
                    <strong>Sexo</strong><br>
                    Masculino
                </div>
            </div>
            <div class="columna">
                <div class="detalle">
                    <strong>Peso</strong><br>
                    9.5
                </div>
            </div>
        </div>
        <div class="fila">
            <div class="columna">
                <div class="detalle">
                    <strong>Fecha de nacimiento:</strong><br>
                    01/01/2024
                </div>
            </div>
            <div class="columna">
                <div class="detalle">
                    <strong>Fecha de ingreso:</strong><br>
                    01/01/2023
                </div>
            </div>
        </div>
        <!-- Agrega más filas según sea necesario -->
    </div>
    <?php	
}

if($accion=="detAnti"){
	?>
    <div class="tabla-detalle">
        <div class="fila">
            <div class="columna">
                <div class="detalle">
                    <strong>Nombre Antiparasitario</strong><br>
                    Brabecto
                </div>
            </div>
        </div>
        <div class="fila">
            <div class="columna">
                <div class="detalle">
                    <strong>Fecha</strong><br>
                    01/01/2024
                </div>
            </div>
        </div>
        <div class="fila">
            <div class="columna">
                <div class="detalle">
                    <strong>Peso</strong><br>
                    8.5
                </div>
            </div>
        </div>
        <!-- Agrega más filas según sea necesario -->
    </div>
    <?php	
}
if($accion=="detMascotaAnti"){
	?>
    <div class="item">
        <a href="javascript:void(0);" onclick="detAnti()">
            <div style="display: flex; align-items: center;">
                <img src="../img/capsulas.png" alt="Foto de Thanos" style="width: 40px; height: 40px;  margin-right: 10px;">
                <strong style="font-size: 18px;">Brabecto</strong>
            </div>
        </a>
    </div>
    <div class="item">
        <a href="javascript:void(0);" onclick="detAnti()">
            <div style="display: flex; align-items: center;">
                <img src="../img/capsulas.png" alt="Foto de Thanos" style="width: 40px; height: 40px;  margin-right: 10px;">
                <strong style="font-size: 18px;">Brabecto</strong>
            </div>
        </a>
    </div>
    <div class="item">
        <a href="javascript:void(0);" onclick="detAnti()">
            <div style="display: flex; align-items: center;">
                <img src="../img/capsulas.png" alt="Foto de Thanos" style="width: 40px; height: 40px;  margin-right: 10px;">
                <strong style="font-size: 18px;">Brabecto</strong>
            </div>
        </a>
    </div>
    <div class="item">
        <a href="javascript:void(0);" onclick="detAnti()">
            <div style="display: flex; align-items: center;">
                <img src="../img/capsulas.png" alt="Foto de Thanos" style="width: 40px; height: 40px;  margin-right: 10px;">
                <strong style="font-size: 18px;">Brabecto</strong>
            </div>
        </a>
    </div>
    <?php	
}

if($accion=="detVacuna"){

	?>
    <div class="tabla-detalle">
        <div class="fila">
            <div class="columna">
                <div class="detalle">
                    <strong>Nombre Vacuna</strong><br>
                    Brabecto
                </div>
            </div>
        </div>
        <div class="fila">
            <div class="columna">
                <div class="detalle">
                    <strong>Fecha</strong><br>
                    01/01/2024
                </div>
            </div>
        </div>
        <div class="fila">
            <div class="columna">
                <div class="detalle">
                    <strong>Peso</strong><br>
                    8.5
                </div>
            </div>
        </div>
        <!-- Agrega más filas según sea necesario -->
    </div>
    <?php	
}
if($accion=="detMascotaVacuna"){
	?>
    <div class="item">
        <a href="javascript:void(0);" onclick="detVacuna()">
            <div style="display: flex; align-items: center;">
                <img src="../img/jeringa.png" alt="Foto de Thanos" style="width: 40px; height: 40px;  margin-right: 10px;">
                <strong style="font-size: 18px;">Brabecto</strong>
            </div>
        </a>
    </div>
    <div class="item">
        <a href="javascript:void(0);" onclick="detVacuna()">
            <div style="display: flex; align-items: center;">
                <img src="../img/jeringa.png" alt="Foto de Thanos" style="width: 40px; height: 40px;  margin-right: 10px;">
                <strong style="font-size: 18px;">Brabecto</strong>
            </div>
        </a>
    </div>
    <div class="item">
        <a href="javascript:void(0);" onclick="detVacuna()">
            <div style="display: flex; align-items: center;">
                <img src="../img/jeringa.png" alt="Foto de Thanos" style="width: 40px; height: 40px;  margin-right: 10px;">
                <strong style="font-size: 18px;">Brabecto</strong>
            </div>
        </a>
    </div>
    <?php	
}

if($accion=="detCita"){

	?>
    <div class="tabla-detalle">
        <div class="fila">
            <div class="columna">
                <div class="detalle">
                    <strong>Resfriado Comun</strong><br>
                    Perro se presente con sintomas de resfriado
                </div>
            </div>
        </div>
        <!-- Agrega más filas según sea necesario -->
    </div>
    <?php	
}
if($accion=="detMascotaCitas"){
	?>
    <div class="item">
        <a href="javascript:void(0);" onclick="detCita()">
            <div style="display: flex; align-items: center;">
                <img src="../img/jeringa.png" alt="Foto de Thanos" style="width: 40px; height: 40px;  margin-right: 10px;">
                <strong style="font-size: 18px;">Resfriado Comun</strong>
            </div>
        </a>
    </div>
    <div class="item">
        <a href="javascript:void(0);" onclick="detCita()">
            <div style="display: flex; align-items: center;">
                <img src="../img/jeringa.png" alt="Foto de Thanos" style="width: 40px; height: 40px;  margin-right: 10px;">
                <strong style="font-size: 18px;">Dolor abdominal</strong>
            </div>
        </a>
    </div>
    <div class="item">
        <a href="javascript:void(0);" onclick="detCita()">
            <div style="display: flex; align-items: center;">
                <img src="../img/jeringa.png" alt="Foto de Thanos" style="width: 40px; height: 40px;  margin-right: 10px;">
                <strong style="font-size: 18px;">Conjuntivitis</strong>
            </div>
        </a>
    </div>
    <?php	
}

if($accion=="detConsulta"){

	?>
    <div class="tabla-detalle">
        <div class="fila">
            <div class="columna">
                <a href="javascript:void(0);" onclick="mostrarPopUpDetConsulta()">
                    <div class="detalle">
                        <strong>Consulta 1</strong><br>
                        Pastillas para pulgas
                    </div>
                </a>
            </div>
        </div>
        <!-- Agrega más filas según sea necesario -->
    </div>
    <!-- Contenedor del popup -->
    <div id="popupConsulta" class="popup" style="Display: none;">
        <div class="popup-content">
            <div class="popup-info">
                <div class="info-item">
                    <strong>Edad</strong>
                    <p>1 año</p>
                </div>
                <div class="info-item">
                    <strong>Raza</strong>
                    <p>mestizo</p>
                </div>
                <div class="info-item">
                    <strong>Sexo</strong>
                    <p>Masculino</p>
                </div>
                <div class="info-item">
                    <strong>Peso</strong>
                    <p>9.5</p>
                </div>
                <div class="info-item">
                    <strong>Fecha de nacimiento</strong>
                    <p>01/01/2024</p>
                </div>
                <div class="info-item">
                    <strong>Fecha de ingreso</strong>
                    <p>01/01/2023</p>
                </div>
            </div>
            <button onclick="cerrarPopup()">Cerrar</button>
        </div>
    </div>
    <script>
        function mostrarPopUpDetConsulta() {
            document.getElementById("popupConsulta").style.display = "flex";
        }

        function cerrarPopup() {
            document.getElementById("popupConsulta").style.display = "none";
        }
    </script>
    <?php	
}
if($accion=="detMascotaConsulta"){
	?>
    <div class="item">
        <a href="javascript:void(0);" onclick="detConsulta()">
            <div style="display: flex; align-items: center;">
                <img src="../img/jeringa.png" alt="Foto de Thanos" style="width: 40px; height: 40px;  margin-right: 10px;">
                <strong style="font-size: 18px;">Consulta 1</strong>
            </div>
        </a>
    </div>
    <div class="item">
        <a href="javascript:void(0);" onclick="detConsulta()">
            <div style="display: flex; align-items: center;">
                <img src="../img/jeringa.png" alt="Foto de Thanos" style="width: 40px; height: 40px;  margin-right: 10px;">
                <strong style="font-size: 18px;">Consulta 2</strong>
            </div>
        </a>
    </div>
    <?php	
}

if($accion=="detEmergencia"){

	?>
    <div class="tabla-detalle">
        <div class="fila">
            <div class="columna">
                <a href="javascript:void(0);" onclick="mostrarPopUpDetEmergencia()">
                    <div class="detalle">
                        <strong>Emergencia 1</strong><br>
                        Atropello
                    </div>
                </a>
            </div>
        </div>
        <!-- Agrega más filas según sea necesario -->
    </div>
    <!-- Contenedor del popup -->
    <div id="popupEmergencia" class="popup1" style="Display: none;">
        <div class="popup1-content">
            <div class="popup1-info">
                <div class="info1-item">
                    <strong>Edad</strong>
                    <p>1 año</p>
                </div>
                <div class="info1-item">
                    <strong>Raza</strong>
                    <p>mestizo</p>
                </div>
                <div class="info1-item">
                    <strong>Sexo</strong>
                    <p>Masculino</p>
                </div>
                <div class="info1-item">
                    <strong>Peso</strong>
                    <p>9.5</p>
                </div>
                <div class="info1-item">
                    <strong>Fecha de nacimiento</strong>
                    <p>01/01/2024</p>
                </div>
                <div class="info1-item">
                    <strong>Fecha de ingreso</strong>
                    <p>01/01/2023</p>
                </div>
            </div>
            <button onclick="cerrarPopup1()">Cerrar</button>
        </div>
    </div>
    <script>
        function mostrarPopUpDetEmergencia() {
            document.getElementById("popupEmergencia").style.display = "flex";
        }

        function cerrarPopup1() {
            document.getElementById("popupEmergencia").style.display = "none";
        }
    </script>
    <?php	
}
if($accion=="detMascotaEmergencia"){
	?>
    <div class="item">
        <a href="javascript:void(0);" onclick="detEmergencia()">
            <div style="display: flex; align-items: center;">
                <img src="../img/jeringa.png" alt="Foto de Thanos" style="width: 40px; height: 40px;  margin-right: 10px;">
                <strong style="font-size: 18px;">Emergencia 1</strong>
            </div>
        </a>
    </div>
    <div class="item">
        <a href="javascript:void(0);" onclick="detEmergencia()">
            <div style="display: flex; align-items: center;">
                <img src="../img/jeringa.png" alt="Foto de Thanos" style="width: 40px; height: 40px;  margin-right: 10px;">
                <strong style="font-size: 18px;">Emergencia 2</strong>
            </div>
        </a>
    </div>
    <?php	
}
?>