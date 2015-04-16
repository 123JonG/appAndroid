<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Validacion de TICKETS</title>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
</head>
<body>
	<div>
		<input type="text" id="codigo" name="codigo" />
		<input type="submit" value="Enviar" id="enviar" onclick="enviarDatos()" />
	</div>
</body>
</html>
<script>
function enviarDatos(){
	var codigo = $("#codigo").val();
	$.post('http://www.lcodigo.com/ticket/validacionmovil.php',{
		codigo : codigo
	}).done(function(data){
		if($.trim(data)=='Boleto Incorrecto'){
			alert(data);
			// $('#contenedorGlobal').load('home.html');
		}else{
			if($.trim(data)=='Boleto Valido'){
			alert(data);
			// $('#inicio').css('display','block');
			// $('#home').css('display','none');
			// window.location='http://lcodigo.com/login/index.html';
			}else{
				if($.trim(data)=='Boleto Ya Usado'){
					alert(data);
					// $('#inicio').css('display','block');
					// $('#home').css('display','none');
					// window.location='http://lcodigo.com/login/index.html';
				}
			}
		}
	});
}
</script>
