<?php
$servername = "localhost";
$username = "nombre_usuario";
$password = "";
$dbname = "nombre_base_de_datos";

$valor = $_POST['mail'];
$password = $_POST['password'];

// Crear una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si hay errores de conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Datos proporcionados por el usuario
    $usuario = $_POST['mail'];
    $contrasena = $_POST['password'];

    // Preparar la consulta para evitar inyección SQL
    $stmt = $conn->prepare("SELECT * FROM nombre_tabla WHERE email = ? AND pass = ?");
    $stmt->bind_param("ss", $usuario, $contrasena);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        // Obtener el resultado de la consulta
        $resultado = $stmt->get_result();

        // Verificar si se encontró un resultado
        if ($resultado->num_rows == 1) {
            // Obtener los datos del resultado
            $usuarioDatos = $resultado->fetch_assoc();

            // Realizar alguna acción con los datos obtenidos
            // ...

            // Mostrar un mensaje de éxito
            echo "Consulta exitosa. Valor encontrado: " . $usuarioDatos['valor'];
        } else {
            // Mostrar un mensaje si no se encontró ningún resultado
            echo "No se encontró ningún valor con ese criterio.";
        }
    } else {
        // Mostrar un mensaje si ocurrió un error al ejecutar la consulta
        echo "Error en la consulta: " . $stmt->error;
    }

    // Cerrar la consulta preparada
    $stmt->close();
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
