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
