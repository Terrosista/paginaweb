<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nombre_base_de_datos";

// Obtener el valor enviado por el formulario
$valor = $_POST['user'];
$email = $_POST['mail'];
$password = $_POST['password'];
// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Insertar el valor en la base de datos
$sql = "INSERT INTO nombre_tabla (valor,email,pass) VALUES ('$valor','$email','$password')";

if ($conn->query($sql) === true) {
    echo "Valor enviado correctamente.";
} else {
    echo "Error al enviar el valor: " . $conn->error;
}

$conn->close();
?>
