
function validarFormularioGpin(){
	var cc 		=$("#cedula").val();
	var pNombre	=$("#pNombre").val();
	var sNombre	=$("#sNombre").val();
	var apellidos=$("#apellidos").val();
	var validador=true;
	if (cc==""){
		$(".error").html("<a class='btn waves center red white-text'>El  campo de la cedula esta vacio!!</a>").hide(5000);
		validador= false;
	}else if(!isNaN(cc)==false){
		$(".error").html("<a class='btn waves center red white-text'>La información de la cedula no es un numero</a>").hide(5000);
		validador= false;
	}else if(cc.length < 6 ){
		$(".error").html("<a class='btn waves center red white-text'>Digite un numero cedula valida!</a>").hide(5000);
		validador= false;
	}else if(pNombre=="" || sNombre==""){
		$(".error").html("<a class='btn waves center red white-text'>Le falta digitar un nombre!!</a>").hide(5000);
		validador= false;
	}else if(apellidos==""){
		$(".error").html("<a class='btn waves center red white-text'>Le falta digitar el apellido!!</a>").hide(5000);
		validador= false;
	}
	var array=[cc,pNombre,sNombre,apellidos,validador];
	return array;
}

function generarPin(){
	
	var cc=parseInt($("#cedula").val());
    pin = cc.toString( 36 );
    pin=pin.toUpperCase();
    return pin;
}


function guardarPin(){
	var array=[];
	array=validarFormularioGpin();
	pin =generarPin();
	if (array[4]==false) {
		}else if (array[4]==true) {
		var datos='cc='+array[0]+'&pNombre='+array[1]+'&sNombre='+array[2]+'&apellido='+array[3]+'&pin='+pin;
		$.ajax({
			type:'POST',
			url:  '../model/pin/guardarPin.php',
			data:datos,
			success:function(data){
				if (data==1) {
					document.location='../view/templates/Pines/certificado-pin.php?='+array[0];
				}


			}
		});
	}


}

$(".generar-pin").on("click", function(){
	guardarPin();
});