function mostrarMascota() {
     
	setTimeout(function() {
		$("#divMadre").fadeOut(500);
	},100);

    var accion="mostrarMascota";
    $.ajax({
        type: 'POST',
        url: "funciones.php",
        data: $('#form').serialize()+"&accion="+accion,
        success: function(data){
            //data=data.split("#");
            setTimeout(function() {
                $('#detalleMascota').html(data);
                $("#detalleMascota").fadeIn(500);
            },600);
        }
    });
    
    return false;

	
}
function mostrarAnti() {
     
	setTimeout(function() {
		$("#divMadre").fadeOut(500);
		$("#detalleVacuna").fadeOut(500);
		$("#detalleMascota").fadeOut(500);
		$("#detalleContacto").fadeOut(500);
		$("#detalleConsulta").fadeOut(500);
		$("#detalleEmergencia").fadeOut(500);
		$("#detalleCita").fadeOut(500);
	},100);

    var accion="mostrarAnti";
    $.ajax({
        type: 'POST',
        url: "funciones.php",
        data: $('#form').serialize()+"&accion="+accion,
        success: function(data){
            //data=data.split("#");
            setTimeout(function() {
                $('#detalleAnti').html(data);
                $("#detalleAnti").fadeIn(500);
            },600);
        }
    });
    
    return false;

	
}
function mostrarVacuna() {
     
	setTimeout(function() {
		$("#divMadre").fadeOut(500);
		$("#detalleAnti").fadeOut(500);
		$("#detalleMascota").fadeOut(500);
		$("#detalleContacto").fadeOut(500);
		$("#detalleConsulta").fadeOut(500);
		$("#detalleEmergencia").fadeOut(500);
		$("#detalleCita").fadeOut(500);
	},100);

    var accion="mostrarVacuna";
    $.ajax({
        type: 'POST',
        url: "funciones.php",
        data: $('#form').serialize()+"&accion="+accion,
        success: function(data){
            //data=data.split("#");
            setTimeout(function() {
                $('#detalleVacuna').html(data);
                $("#detalleVacuna").fadeIn(500);
            },600);
        }
    });
    return false;
}
function mostrarCita() {    
	setTimeout(function() {
		$("#divMadre").fadeOut(500);
		$("#detalleAnti").fadeOut(500);
		$("#detalleMascota").fadeOut(500);
		$("#detalleContacto").fadeOut(500);
		$("#detalleConsulta").fadeOut(500);
		$("#detalleEmergencia").fadeOut(500);
		$("#detalleVacuna").fadeOut(500);
		
	},100);

    var accion="mostrarCita";
    $.ajax({
        type: 'POST',
        url: "funciones.php",
        data: $('#form').serialize()+"&accion="+accion,
        success: function(data){
            //data=data.split("#");
            setTimeout(function() {
                $('#detalleCita').html(data);
                $("#detalleCita").fadeIn(500);
            },600);
        }
    });
    return false;
}
function mostrarConsulta() {    
	setTimeout(function() {
		$("#divMadre").fadeOut(500);
		$("#detalleAnti").fadeOut(500);
		$("#detalleMascota").fadeOut(500);
		$("#detalleContacto").fadeOut(500);
		$("#detalleCita").fadeOut(500);
		$("#detalleEmergencia").fadeOut(500);
		$("#detalleVacuna").fadeOut(500);
	},100);

    var accion="mostrarConsulta";
    $.ajax({
        type: 'POST',
        url: "funciones.php",
        data: $('#form').serialize()+"&accion="+accion,
        success: function(data){
            //data=data.split("#");
            setTimeout(function() {
                $('#detalleConsulta').html(data);
                $("#detalleConsulta").fadeIn(500);
            },600);
        }
    });
    return false;
}
function mostrarEmergencia() {    
	setTimeout(function() {
		$("#divMadre").fadeOut(500);
		$("#detalleAnti").fadeOut(500);
		$("#detalleMascota").fadeOut(500);
		$("#detalleContacto").fadeOut(500);
		$("#detalleCita").fadeOut(500);
		$("#detalleConsulta").fadeOut(500);
		$("#detalleVacuna").fadeOut(500);
	},100);

    var accion="mostrarEmergencia";
    $.ajax({
        type: 'POST',
        url: "funciones.php",
        data: $('#form').serialize()+"&accion="+accion,
        success: function(data){
            //data=data.split("#");
            setTimeout(function() {
                $('#detalleEmergencia').html(data);
                $("#detalleEmergencia").fadeIn(500);
            },600);
        }
    });
    return false;
}
function mostrarContacto() {
     
	setTimeout(function() {
		$("#divMadre").fadeOut(500);
		$("#detalleAnti").fadeOut(500);
		$("#detalleMascota").fadeOut(500);
		$("#detalleVacuna").fadeOut(500);
		$("#detalleConsulta").fadeOut(500);
		$("#detalleEmergencia").fadeOut(500);
		$("#detalleCita").fadeOut(500);
	},100);
	
    var accion="mostrarContacto";
    $.ajax({
        type: 'POST',
        url: "funciones.php",
        data: $('#form').serialize()+"&accion="+accion,
        success: function(data){
            //data=data.split("#");
            setTimeout(function() {
                $('#detalleContacto').html(data);
                $("#detalleContacto").fadeIn(500);
            },600);
        }
    });
    
    return false;

	
}
function mostrarMascota() {
	setTimeout(function() {
		$("#divMadre").fadeOut(500);
		$("#detalleVacuna").fadeOut(500);
		$("#detalleAnti").fadeOut(500);
		$("#detalleContacto").fadeOut(500);
		$("#detalleConsulta").fadeOut(500);
		$("#detalleEmergencia").fadeOut(500);
		$("#detalleCita").fadeOut(500);
	},100);

    var accion="mostrarMascota";
    $.ajax({
        type: 'POST',
        url: "funciones.php",
        data: $('#form').serialize()+"&accion="+accion,
        success: function(data){
            //data=data.split("#");
            setTimeout(function() {
                $('#detalleMascota').html(data);
                $("#detalleMascota").fadeIn(500);
            },600);
        }
    });
    
    return false;

	
}




function home(){
	setTimeout(function() {
		$("#detalleVacuna").fadeOut(500);
		$("#detalleMascota").fadeOut(500);
		$("#detalleAnti").fadeOut(500);
		$("#detalleConsulta").fadeOut(500);
		$("#detalleEmergencia").fadeOut(500);
		$("#detalleCita").fadeOut(500);
	},100);
	
	setTimeout(function() {
		$("#divMadre").fadeIn(500);
	},700);
}
function volverMenu0(){
	setTimeout(function() {
		$("#detalleContacto").fadeOut(500);
	},100);
	
	setTimeout(function() {
		$("#divMadre").fadeIn(500);
	},700);
}
function volverMenu(){
	setTimeout(function() {
		$("#detalleMascota").fadeOut(500);
	},100);
	
	setTimeout(function() {
		$("#divMadre").fadeIn(500);
	},700);
}
function volverMenu2(){
	setTimeout(function() {
		$("#detalleAnti").fadeOut(500);
	},100);
	
	setTimeout(function() {
		$("#divMadre").fadeIn(500);
	},700);
}
function volverMenu3(){
	setTimeout(function() {
		$("#detalleVacuna").fadeOut(500);
	},100);
	
	setTimeout(function() {
		$("#divMadre").fadeIn(500);
	},700);
}
function volverMenu4(){
	setTimeout(function() {
		$("#detalleCita").fadeOut(500);
	},100);
	
	setTimeout(function() {
		$("#divMadre").fadeIn(500);
	},700);
}
function volverMenu5(){
	setTimeout(function() {
		$("#detalleConsulta").fadeOut(500);
	},100);
	
	setTimeout(function() {
		$("#divMadre").fadeIn(500);
	},700);
}
function volverMenu6(){
	setTimeout(function() {
		$("#detalleEmergencia").fadeOut(500);
	},100);
	
	setTimeout(function() {
		$("#divMadre").fadeIn(500);
	},700);
}





function detMascota() {
	setTimeout(function() {
		$("#detMascotaP").fadeOut(500);
	},100);

    var accion="detMascota";
    $.ajax({
        type: 'POST',
        url: "funciones.php",
        data: $('#form').serialize()+"&accion="+accion,
        success: function(data){
            //data=data.split("#");
            setTimeout(function() {
                $('#detMascotaP').html(data);
                $("#detMascotaP").fadeIn(500);
            },600);
        }
    });
    
    return false;

	
}

function detMascotaAnti() {
	setTimeout(function() {
		$("#detMascotaAntiD").fadeOut(500);
	},100);

    var accion="detMascotaAnti";
    $.ajax({
        type: 'POST',
        url: "funciones.php",
        data: $('#form').serialize()+"&accion="+accion,
        success: function(data){
            //data=data.split("#");
            setTimeout(function() {
                $('#detMascotaAntiD').html(data);
                $("#detMascotaAntiD").fadeIn(500);
            },600);
        }
    });
    
    return false;

	
}
function detAnti() {
	setTimeout(function() {
		$("#detAntiP").fadeOut(500);
	},100);

    var accion="detAnti";
    $.ajax({
        type: 'POST',
        url: "funciones.php",
        data: $('#form').serialize()+"&accion="+accion,
        success: function(data){
            //data=data.split("#");
            setTimeout(function() {
                $('#detAntiP').html(data);
                $("#detAntiP").fadeIn(500);
            },600);
        }
    });
    
    return false;

	
}

function detMascotaVacuna() {
	setTimeout(function() {
		$("#detMascotaVacunaD").fadeOut(500);
	},100);

    var accion="detMascotaVacuna";
    $.ajax({
        type: 'POST',
        url: "funciones.php",
        data: $('#form').serialize()+"&accion="+accion,
        success: function(data){
            //data=data.split("#");
            setTimeout(function() {
                $('#detMascotaVacunaD').html(data);
                $("#detMascotaVacunaD").fadeIn(500);
            },600);
        }
    });
    
    return false;

	
}
function detVacuna() {
	setTimeout(function() {
		$("#detVacunaP").fadeOut(500);
	},100);

    var accion="detVacuna";
    $.ajax({
        type: 'POST',
        url: "funciones.php",
        data: $('#form').serialize()+"&accion="+accion,
        success: function(data){
            //data=data.split("#");
            setTimeout(function() {
                $('#detVacunaP').html(data);
                $("#detVacunaP").fadeIn(500);
            },600);
        }
    });
    
    return false;

	
}

function detMascotaCitas() {
	setTimeout(function() {
		$("#detMascotaCitasD").fadeOut(500);
	},100);

    var accion="detMascotaCitas";
    $.ajax({
        type: 'POST',
        url: "funciones.php",
        data: $('#form').serialize()+"&accion="+accion,
        success: function(data){
            //data=data.split("#");
            setTimeout(function() {
                $('#detMascotaCitasD').html(data);
                $("#detMascotaCitasD").fadeIn(500);
            },600);
        }
    });
    
    return false;

	
}
function detCita() {
	setTimeout(function() {
		$("#detCitaP").fadeOut(500);
	},100);

    var accion="detCita";
    $.ajax({
        type: 'POST',
        url: "funciones.php",
        data: $('#form').serialize()+"&accion="+accion,
        success: function(data){
            //data=data.split("#");
            setTimeout(function() {
                $('#detCitaP').html(data);
                $("#detCitaP").fadeIn(500);
            },600);
        }
    });
    
    return false;

	
}

function detMascotaConsulta() {
	setTimeout(function() {
		$("#detMascotaConsultaD").fadeOut(500);
	},100);

    var accion="detMascotaConsulta";
    $.ajax({
        type: 'POST',
        url: "funciones.php",
        data: $('#form').serialize()+"&accion="+accion,
        success: function(data){
            //data=data.split("#");
            setTimeout(function() {
                $('#detMascotaConsultaD').html(data);
                $("#detMascotaConsultaD").fadeIn(500);
            },600);
        }
    });
    
    return false;

	
}
function detConsulta() {
	setTimeout(function() {
		$("#detConsultaP").fadeOut(500);
	},100);

    var accion="detConsulta";
    $.ajax({
        type: 'POST',
        url: "funciones.php",
        data: $('#form').serialize()+"&accion="+accion,
        success: function(data){
            //data=data.split("#");
            setTimeout(function() {
                $('#detConsultaP').html(data);
                $("#detConsultaP").fadeIn(500);
            },600);
        }
    });
    
    return false;

	
}

function detMascotaEmergencia() {
	setTimeout(function() {
		$("#detMascotaEmergenciaD").fadeOut(500);
	},100);

    var accion="detMascotaEmergencia";
    $.ajax({
        type: 'POST',
        url: "funciones.php",
        data: $('#form').serialize()+"&accion="+accion,
        success: function(data){
            //data=data.split("#");
            setTimeout(function() {
                $('#detMascotaEmergenciaD').html(data);
                $("#detMascotaEmergenciaD").fadeIn(500);
            },600);
        }
    });
    
    return false;

	
}
function detEmergencia() {
	setTimeout(function() {
		$("#detEmergenciaP").fadeOut(500);
	},100);

    var accion="detEmergencia";
    $.ajax({
        type: 'POST',
        url: "funciones.php",
        data: $('#form').serialize()+"&accion="+accion,
        success: function(data){
            //data=data.split("#");
            setTimeout(function() {
                $('#detEmergenciaP').html(data);
                $("#detEmergenciaP").fadeIn(500);
            },600);
        }
    });
    
    return false;

	
}
