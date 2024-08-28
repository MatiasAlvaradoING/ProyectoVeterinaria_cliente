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

function mostrarContacto() {
     
	setTimeout(function() {
		$("#divMadre").fadeOut(500);
		$("#detalleAnti").fadeOut(500);
		$("#detalleMascota").fadeOut(500);
		$("#detalleVacuna").fadeOut(500);
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

function manejarEnter2(event) {
	// Verificar si la tecla presionada es "Enter" (código 13)
	if (event.keyCode === 13) {
		document.getElementById('segundoPopup').style.display = 'flex';
		// obtengo el valor del input.
		var codIngrediente = event.target.value;
	  	var accion="cargarIngrediente";
	  	$.ajax({
			type: 'POST',
			url: "funciones.php",
			data: $('#form').serialize()+"&accion="+accion+"&codIngrediente="+codIngrediente,
			success: function(data){
				data=data.split("##");
				document.getElementById('cuerpoDetalle2').innerHTML=data[0];
			}
		});
		
		return false;

	}
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