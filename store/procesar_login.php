<?php
// Conectar a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "store");

// Verificar la conexión
if (!$conexion) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}

// Obtener los datos del formulario
$email = $_POST['email'];
$password = $_POST['password'];

// Consulta SQL para verificar el inicio de sesión
$sql = "SELECT nombre FROM Usuarios WHERE email = '$email' AND contrasena = '$password'";
$resultado = mysqli_query($conexion, $sql);

// Verificar si se encontró un usuario con las credenciales proporcionadas
if (mysqli_num_rows($resultado) == 1) {
    // Obtener el nombre del usuario
    $fila = mysqli_fetch_assoc($resultado);
    $nombreUsuario = $fila['nombre'];

    // Iniciar sesión (puedes usar sesiones de PHP aquí si lo deseas)

    // Redirigir a la página principal
    header("Location: pagina_principal.php?nombre=$nombreUsuario");
} else {
    // Si las credenciales son incorrectas, redirigir de nuevo al formulario de inicio de sesión con un mensaje de error
    header("Location: formulario_login.php?error=1");
}

// Cerrar la conexión
mysqli_close($conexion);
?>
