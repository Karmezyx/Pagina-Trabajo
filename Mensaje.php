<?php

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

// Mostrar un mensaje de agradecimiento
echo "Gracias por contactarnos, " . $nombre . "! Tu mensaje ha sido entregado.";