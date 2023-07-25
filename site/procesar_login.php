<?php
// procesar_login.php

// Obtener los datos del formulario
$email = $_POST['email'];
$password = $_POST['password'];

// Conexión a la base de datos
$servername = "localhost"; // Cambiar si es necesario
$username = "tu_usuario_mysql"; // Cambiar al usuario correcto
$password_db = "tu_contraseña_mysql"; // Cambiar a la contraseña correcta
$database = "nombre_de_tu_base_de_datos"; // Cambiar al nombre de tu base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password_db, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para verificar las credenciales
$sql = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);

// Verificar si se encontraron resultados
if ($result->num_rows > 0) {
    // Inicio de sesión exitoso
    // Puedes redirigir al usuario a una página de bienvenida o realizar otras acciones
    echo "Inicio de sesión exitoso. ¡Bienvenido!";
} else {
    // Credenciales incorrectas
    // Puedes redirigir al usuario a una página de error o realizar otras acciones
    echo "Credenciales incorrectas. Inténtalo de nuevo.";
}

// Cerrar la conexión
$conn->close();
?>
