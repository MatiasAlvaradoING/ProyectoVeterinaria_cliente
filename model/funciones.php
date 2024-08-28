<?php
if($accion=="mostrarContacto"){
	?>
    <img src="../img/familia.png" class="image" >
    <div class="container2">
        <div class="header">
            <a href="javascript:void(0);" onclick="volverMenu0()"><img src="../img/volver.png" width="50" height="50" /></a><span class="title"></span>
            <span class="date" > <span id="Fecha"></span></span>
        </div>
        <div class="header" style="height: 350px;">
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
                            <img src="../img/capsulas.png" alt="Foto de Thanos" style="width: 40px; height: 40px;  margin-right: 10px;">
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
                            <img src="../img/jeringa.png" alt="Foto de Thanos" style="width: 40px; height: 40px;  margin-right: 10px;">
                            <strong style="font-size: 18px;">Brabecto</strong>
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
?>