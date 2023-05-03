<?php

// Controlador
class Solicitud {
    
    public $nombre;
    public $email;
    public $password;
    public $confirm_password;

    public function __construct($nombre, $email, $password) {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->password = $password;
    }   
    public function getNombre() {
        return $this->nombre;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }
}

// Verificar si se envió el formulario
if (isset($_POST['register'])) {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Crear una instancia de la clase Solicitud
    $solicitud = new Solicitud($nombre, $email, $password);

    // Mostrar la información en la pantalla
    echo "Gracias por registrarte!<br>";
    echo "Nombre: " . $solicitud->getNombre() . "<br>";
    echo "Email: " . $solicitud->getEmail() . "<br>";

}