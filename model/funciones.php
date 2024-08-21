<?php
if($accion=="mostrarMascota"){
	?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="container2">
        <div class="header">
            <a href="javascript:void(0);" onclick="volverMenu()"><img src="../img/volver.png" width="50" height="50" /></a><span class="title">Detalle Mascota</span>
            <span class="date" >Fecha: <span id="Fecha"></span></span>
        </div>
        <div class="content">
            <div class="sidebar">
                <!-- Aquí podrías agregar una imagen o información adicional -->
            </div>
            <div class="main-content">
                <div class="info-box"></div>
            </div>
        </div>
    </div>
    <script>
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();

        today = dd + '/' + mm + '/' + yyyy;
        console.log(today);
        document.getElementById("Fecha").innerHTML = today;
    </script>
    <?php	
}
?>