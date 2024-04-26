<?php
// Verificar si se recibieron datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se recibieron todos los campos necesarios
    if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['nombre'])) {
        // Recuperar los datos del formulario
        $email = $_POST['email'];
        $password = $_POST['password'];
        $nombre = $_POST['nombre'];

        // Validar los datos (puedes agregar más validaciones según tus necesidades)

        // Conectar a la base de datos (ajusta los detalles de conexión según tu configuración)
        $conexion = mysqli_connect("localhost", "root", "", "store");

        // Verificar la conexión
        if (!$conexion) {
            die("Error al conectar con la base de datos: " . mysqli_connect_error());
        }

        // Escapar los datos para evitar inyección SQL
        $email = mysqli_real_escape_string($conexion, $email);
        $password = mysqli_real_escape_string($conexion, $password);
        $nombre = mysqli_real_escape_string($conexion, $nombre);

        // Consulta SQL para insertar el nuevo usuario en la tabla Usuarios
        $sql = "INSERT INTO Usuarios (email, contrasena, nombre) VALUES ('$email', '$password', '$nombre')";

        // Ejecutar la consulta
        if (mysqli_query($conexion, $sql)) {
            // Redirigir al usuario a la página de inicio de sesión con un mensaje de éxito
            header("Location: login.html?registro_exitoso=1");
        } else {
            // Si hay un error en la consulta, mostrar un mensaje de error
            echo "Error al registrar el usuario: " . mysqli_error($conexion);
        }

        // Cerrar la conexión
        mysqli_close($conexion);
    } else {
        // Si no se recibieron todos los campos necesarios, redirigir al formulario de registro con un mensaje de error
        header("Location: formulario_registro.php?error=1");
    }
} else {
    // Si no se recibieron datos por el método POST, redirigir al formulario de registro
    header("Location: formulario_registro.php");
}
?>
