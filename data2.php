 <?php
 	$myNombre = $_POST['Nombre'];
  $myUbicacion = $_POST['Ubicacion'];
  $myTelefono = $_POST['Telefono'];
	$myFoto = $_POST['Foto'];

	$link = mysqli_connect(localhost, veronic4_userVidrioTemplado, passwordVidrioTemplado, veronic4_dataVidrioTemplado) or die("No se conecto");
	mysqli_set_charset($link, 'utf8');
	mysqli_query($link, "INSERT INTO establecimientos (nombre, telefono, ubicacion, foto)
		VALUES('$myNombre', '$myTelefono', '$myUbicacion', '$myFoto')");

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
			<h1 align="center">¡Muchas gracias por compartirnos tus datos!</h1>
			<h2 align="center">Juntos vencemos la violencia de genero</h2>
		</div>
	</div>
</body>
</html>
