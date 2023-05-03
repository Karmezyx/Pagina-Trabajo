<!DOCTYPE html>
<html>
<head>
	<title>Registro exitoso</title>
</head>
<body>
	<?php

  class Solicitud
    public $nombre
    public $email
    public $password
    public $confirm_password

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$nombre = $_POST["nombre"];
			$email = $_POST["email"];
			$contrasena = $_POST["contrasena"];
			$sexo = $_POST["sexo"];

			echo "<p>Gracias por registrarte</p>";
			echo "<p>Los datos registrados son:</p>";
			echo "<ul>";
			echo "<li>Nombre: $nombre</li>";
			echo "<li>Email: $email</li>";
			echo "<li>Contraseña: $contrasena</li>";
			echo "<li>Sexo: $sexo</li>";
			echo "</ul>";
		}
	?>
</body>
</html>


