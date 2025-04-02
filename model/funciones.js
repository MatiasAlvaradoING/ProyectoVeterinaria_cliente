
/*
function mostrarMascota() {
     
	setTimeout(function() {
		$("#divMadre").fadeOut(500);
        $(".responsive-div").fadeOut(500);
        $(".responsive-div2").fadeOut(500);
        $(".responsive-div3").fadeOut(500);
        $(".container1").fadeOut(500);
        
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
    */
function mostrarAnti() {
     
	setTimeout(function() {
		$("#divMadre").fadeOut(500);
		$("#detalleVacuna").fadeOut(500);
		$("#detalleMascota").fadeOut(500);
		$("#detalleContacto").fadeOut(500);
		$("#detalleConsulta").fadeOut(500);
		$("#detalleEmergencia").fadeOut(500);
		$("#detalleCita").fadeOut(500);
        $(".responsive-div").fadeOut(500);
        $(".responsive-div2").fadeOut(500);
        $(".responsive-div3").fadeOut(500);
        $(".container1").fadeOut(500);
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
        $(".responsive-div").fadeOut(500);
        $(".responsive-div2").fadeOut(500);
        $(".responsive-div3").fadeOut(500);
        $(".container1").fadeOut(500);
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
        $(".responsive-div").fadeOut(500);
        $(".responsive-div2").fadeOut(500);
        $(".responsive-div3").fadeOut(500);
        $(".container1").fadeOut(500);
		
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
        $(".responsive-div").fadeOut(500);
        $(".responsive-div2").fadeOut(500);
        $(".responsive-div3").fadeOut(500);
        $(".container1").fadeOut(500);
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
        $(".responsive-div").fadeOut(500);
        $(".responsive-div2").fadeOut(500);
        $(".responsive-div3").fadeOut(500);
        $(".container1").fadeOut(500);
        
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
        $(".responsive-div").fadeOut(500);
        $(".responsive-div2").fadeOut(500);
        $(".responsive-div3").fadeOut(500);
        $(".container1").fadeOut(500);
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
function mostrarMascota(rut,acceso) {
    
	setTimeout(function() {
		$("#divMadre").fadeOut(500);
		$("#detalleVacuna").fadeOut(500);
		$("#detalleAnti").fadeOut(500);
		$("#detalleContacto").fadeOut(500);
		$("#detalleConsulta").fadeOut(500);
		$("#detalleEmergencia").fadeOut(500);
		$("#detalleCita").fadeOut(500);
        $(".responsive-div").fadeOut(500);
        $(".responsive-div2").fadeOut(500);
        $(".responsive-div3").fadeOut(500);
        $(".container1").fadeOut(500);
	},100);

    var accion="mostrarMascota";
    $.ajax({
        type: 'POST',
        url: "funciones.php",
        data: $('#form').serialize()+"&accion="+accion+"&rut="+rut+"&acceso="+acceso,
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
        $(".responsive-div").fadeIn(500);
        $(".responsive-div2").fadeIn(500);
        $(".responsive-div3").fadeIn(500);
        $(".container1").fadeIn(500);
	},700);
}
function volverMenu0(){
	setTimeout(function() {
		$("#detalleContacto").fadeOut(500);
	},100);
	
	setTimeout(function() {
		$("#divMadre").fadeIn(500);
        $(".responsive-div").fadeIn(500);
        $(".responsive-div2").fadeIn(500);
        $(".responsive-div3").fadeIn(500);
        $(".container1").fadeIn(500);
	},700);
}
function volverMenu(){
	setTimeout(function() {
		$("#detalleMascota").fadeOut(500);
	},100);
	
	setTimeout(function() {
		$("#divMadre").fadeIn(500);
        $(".responsive-div").fadeIn(500);
        $(".responsive-div2").fadeIn(500);
        $(".responsive-div3").fadeIn(500);
        $(".container1").fadeIn(500);
	},700);
}
function volverMenu2(){
	setTimeout(function() {
		$("#detalleAnti").fadeOut(500);
	},100);
	
	setTimeout(function() {
		$("#divMadre").fadeIn(500);
        $(".responsive-div").fadeIn(500);
        $(".responsive-div2").fadeIn(500);
        $(".responsive-div3").fadeIn(500);
        $(".container1").fadeIn(500);
	},700);
}
function volverMenu3(){
	setTimeout(function() {
		$("#detalleVacuna").fadeOut(500);
	},100);
	
	setTimeout(function() {
		$("#divMadre").fadeIn(500);
        $(".responsive-div").fadeIn(500);
        $(".responsive-div2").fadeIn(500);
        $(".responsive-div3").fadeIn(500);
        $(".container1").fadeIn(500);
	},700);
}
function volverMenu4(){
	setTimeout(function() {
		$("#detalleCita").fadeOut(500);
	},100);
	
	setTimeout(function() {
		$("#divMadre").fadeIn(500);
        $(".responsive-div").fadeIn(500);
        $(".responsive-div2").fadeIn(500);
        $(".responsive-div3").fadeIn(500);
        $(".container1").fadeIn(500);
	},700);
}
function volverMenu5(){
	setTimeout(function() {
		$("#detalleConsulta").fadeOut(500);
	},100);
	
	setTimeout(function() {
		$("#divMadre").fadeIn(500);
        $(".responsive-div").fadeIn(500);
        $(".responsive-div2").fadeIn(500);
        $(".responsive-div3").fadeIn(500);
        $(".container1").fadeIn(500);
	},700);
}
function volverMenu6(){
	setTimeout(function() {
		$("#detalleEmergencia").fadeOut(500);
	},100);
	
	setTimeout(function() {
		$("#divMadre").fadeIn(500);
        $(".responsive-div").fadeIn(500);
        $(".responsive-div2").fadeIn(500);
        $(".responsive-div3").fadeIn(500);
        $(".container1").fadeIn(500);
	},700);
}





function detMascota(idMascota) {
	setTimeout(function() {
		$("#detMascotaP").fadeOut(500);
	},100);

    var accion="detMascota";
    $.ajax({
        type: 'POST',
        url: "funciones.php",
        data: $('#form').serialize()+"&accion="+accion+"&idMascota="+idMascota,
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




function guardarInfoCli() {

    let rut = document.getElementById("rut").value;
    let nombre = document.getElementById("nombre").value;
    let correo = document.getElementById("gmail").value;
    let direccion = document.getElementById("direccion").value;
    let telefono = document.getElementById("telefono").value;
    let usuario = document.getElementById("user").value;
    let contrasena = document.getElementById("clave").value;
    let tipoUsuario = document.getElementById("tipoUsuario").value; // Rescatar el valor (T o V)

    if (rut === "" || nombre === "" || correo === "" || direccion === "" ||
        telefono === "" || usuario === "" || contrasena === "" || tipoUsuario === "") {
        alert("Por favor, complete todos los campos antes de continuar.");
        return false;
    }

    // validacion de numero de telefono, no ingresar mas o menos de 9 numeros
    let telefonoRegex = /^[0-9]{9,9}$/;
    if (!telefonoRegex.test(telefono)) {
        alert("El teléfono ingresado no es válido. Debe contener 9 numeros.");
        return false;
    }

    /*
    console.log("Datos del Cliente:");
    console.log("Nombre:", nombre);
    console.log("Correo:", correo);
    console.log("Dirección:", direccion);
    console.log("Teléfono:", telefono);
    console.log("Usuario:", usuario);
    console.log("Contraseña:", contrasena);
    console.log("Tipo de Usuario:", tipoUsuario === "T" ? "Veterinario" : "Cliente");
    */

    var accion="guardarInfoCli";
    $.ajax({
        type: 'POST',
        url: "funciones.php",
        data: $('#form').serialize()+"&accion="+accion+
                                    "&nombre="+nombre+
                                    "&correo="+correo+
                                    "&direccion="+direccion+
                                    "&telefono="+telefono+
                                    "&usuario="+usuario+
                                    "&contrasena="+contrasena+
                                    "&tipoUsuario="+tipoUsuario+
                                    "&rut="+rut,
        success: function(data){
            //data=data.split("#");
            $('#resuldIngreso').html(data);
            if (data.trim() === "1") {
                alert("Usuario creado correctamente.");
                cerrarPopup();
                location.reload(); // Recargar la página después de aceptar el alert
            } else {
                alert("Error en los datos insertados. Inténtalo de nuevo.");
            }
        }
    });
    
    return false;
    	
}
function guardarDatos() {

    let rut1 = document.getElementById("edit-rut").value;
    let nombre1 = document.getElementById("edit-nombre").value;
    let correo1 = document.getElementById("edit-correo").value;
    let direccion1 = document.getElementById("edit-direccion").value;
    let telefono1 = document.getElementById("edit-telefono").value;
    let usuario1 = document.getElementById("edit-usuario").value;
    let contrasena1 = document.getElementById("edit-clave").value;
    let tipoUsuario1 = document.getElementById("edit-tipoacceso").value; // Rescatar el valor (T o V)

    if (rut1 === "" || nombre1 === "" || correo1 === "" || direccion1 === "" ||
        telefono1 === "" || usuario1 === "" || contrasena1 === "" || tipoUsuario1 === "") {
        alert("Por favor, complete todos los campos antes de continuar.");
        return false;
    }

    // validacion de numero de telefono, no ingresar mas o menos de 9 numeros
    let telefonoRegex = /^[0-9]{9,9}$/;
    if (!telefonoRegex.test(telefono1)) {
        alert("El teléfono ingresado no es válido. Debe contener 9 numeros.");
        return false;
    }

    /*
    console.log("Datos del Cliente:");
    console.log("Nombre:", nombre1);
    console.log("Correo:", correo1);
    console.log("Dirección:", direccion1);
    console.log("Teléfono:", telefono1);
    console.log("Usuario:", usuario1);
    console.log("Contraseña:", contrasena1);
    console.log("Tipo de Usuario:", tipoUsuario1 === "T" ? "Veterinario" : "Cliente");
    */

    var accion="guardarDatos";
    $.ajax({
        type: 'POST',
        url: "funciones.php",
        data: $('#form').serialize()+"&accion="+accion+
                                    "&nombre1="+nombre1+
                                    "&correo1="+correo1+
                                    "&direccion1="+direccion1+
                                    "&telefono1="+telefono1+
                                    "&usuario1="+usuario1+
                                    "&contrasena1="+contrasena1+
                                    "&tipoUsuario1="+tipoUsuario1+
                                    "&rut1="+rut1,
        success: function(data){
            //data=data.split("#");
            $('#resuldEdit').html(data);
            if (data.trim() === "1") {
                alert("Datos actualizados correctamente.");
                cerrarPopup();
                location.reload(); // Recargar la página después de aceptar el alert
            } else {
                alert("Error en los datos insertados. Inténtalo de nuevo.");
            }
        }
    });
    
    return false;
    	
}