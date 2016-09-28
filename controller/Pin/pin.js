
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


function guardarPin(){
	var array=[];
	array=validarFormularioGpin();

	if (array[4]==false) {
		
	}else if (array[4]==true) {
		var datos=$("#formulario").serialize();
		$.ajax({
			type:'POST',
			url:  '../model/pin/guardarPin.php',
			data:datos,
			success:function(data){
				if (data==true) {
					document.location='../view/templates/pin/certificadoPago.php';
				}
			}
		});
	}


}

$(".generar-pin").on("click", function(){
	guardarPin();
});