<?php
if($accion=="mostrarMascota"){
	?>
    <br><br><br><br><br><br>
    <div class="container2">
        <div class="header">
            <a href="javascript:void(0);" onclick="volverMenu()"><img src="../img/volver.png" width="50" height="50" /></a><span class="title">Detalle Mascota</span>
            <span class="date" > <span id="Fecha"></span></span>
        </div>
        <div class="content">
            <div class="sidebar">
                <div class="item">Bloque 1</div>
                <div class="item">Bloque 2</div>
                <div class="item">Bloque 3</div>
                <div class="item">Bloque 3</div>
                <div class="item">Bloque 3</div>
                <div class="item">Bloque 3</div>
                <!-- Más bloques pueden ser agregados aquí -->
            </div>
            <div class="main-content">
                <div class="info-box"></div>
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
    <br><br><br><br><br><br>
    <div class="container2">
        <div class="header">
            <a href="javascript:void(0);" onclick="volverMenu2()"><img src="../img/volver.png" width="50" height="50" /></a><span class="title">Detalle Antiparasitario</span>
            <span class="date" ><span id="Fecha"></span></span>
        </div>
        <div class="content">
            <div class="sidebar">
                <div class="item">Bloque 1</div>
                <div class="item">Bloque 2</div>
                <div class="item">Bloque 3</div>
                <div class="item">Bloque 3</div>
                <div class="item">Bloque 3</div>
                <div class="item">Bloque 3</div>
                <!-- Más bloques pueden ser agregados aquí -->
            </div>
            <div class="main-content">
                <div class="info-box"></div>
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
    <br><br><br><br><br><br>
    <div class="container2">
        <div class="header">
            <a href="javascript:void(0);" onclick="volverMenu3()"><img src="../img/volver.png" width="50" height="50" /></a><span class="title">Detalle Vacuna</span>
            <span class="date" ><span id="Fecha"></span></span>
        </div>
        <div class="content">
            <div class="sidebar">
                <div class="item">Bloque 1</div>
                <div class="item">Bloque 2</div>
                <div class="item">Bloque 3</div>
                <div class="item">Bloque 3</div>
                <div class="item">Bloque 3</div>
                <div class="item">Bloque 3</div>
                <!-- Más bloques pueden ser agregados aquí -->
            </div>
            <div class="main-content">
                <div class="info-box"></div>
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
?>