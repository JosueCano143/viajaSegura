 <?php  
	$myFoto = $_POST['foto'];
	$myNombre = $_POST['nombre'];
	$myPassword = $_POST['password'];
	$myEdad = $_POST['edad'];
	$myNombreEmergencia = $_POST['nombreEmergencia'];
	$myTelefonoEmergencia = $_POST['telefonoEmergencia'];

	$link = mysqli_connect(localhost, veronic4_userVidrioTemplado, passwordVidrioTemplado, veronic4_dataVidrioTemplado) or die("No se conecto");
	mysqli_set_charset($link, 'utf8');
	mysqli_query($link, "INSERT INTO usuarios (foto, nombre, contrasena, edad, nombreEmergencia, telefonoEmergencia)
		VALUES('$myFoto', '$myNombre', '$myPassword', '$myEdad', '$myNombreEmergencia', '$myTelefonoEmergencia')");

	mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<head><meta charset="big5">
	
	<title>Gracias</title>
	<style>
		#pad{
			width: 100vw;
			height: 100vh;
			display: flex;
			align-items: center;
			justify-content: center;
			font-family: Sniglet
		}
	</style>

	<link href="https://fonts.googleapis.com/css?family=Sniglet" rel="stylesheet">
</head>
<body>
	<div id="pad">
		<div id="chd">
			<h1 align="center">¡Muchas gracias!</h1>
		</div>
	</div>
</body>
</html>
