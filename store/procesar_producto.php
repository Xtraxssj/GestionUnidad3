<?php
// Verificar si se recibieron datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se recibieron todos los campos necesarios
    if (isset($_POST['color']) && isset($_POST['size']) && isset($_POST['quantity'])) {
        // Recuperar los datos del formulario
        $color = $_POST['color'];
        $size = $_POST['size'];
        $quantity = $_POST['quantity'];

        // Validar los datos (puedes agregar más validaciones según tus necesidades)

        // Conectar a la base de datos (ajusta los detalles de conexión según tu configuración)
        $conexion = mysqli_connect("localhost", "root", "", "store");

        // Verificar la conexión
        if (!$conexion) {
            die("Error al conectar con la base de datos: " . mysqli_connect_error());
        }

        // Escapar los datos para evitar inyección SQL
        $color = mysqli_real_escape_string($conexion, $color);
        $size = mysqli_real_escape_string($conexion, $size);
        $quantity = mysqli_real_escape_string($conexion, $quantity);

        // Consulta SQL para insertar el nuevo producto en la tabla 'productos'
        $sql = "INSERT INTO productos (color, size, quantity) VALUES ('$color', '$size', '$quantity')";

        // Ejecutar la consulta
        if (mysqli_query($conexion, $sql)) {
            // Redirigir al usuario a la página del carrito con un mensaje de éxito
            header("Location: carrito.php?producto_agregado=1");
        } else {
            // Si hay un error en la consulta, mostrar un mensaje de error
            echo "Error al agregar el producto: " . mysqli_error($conexion);
        }

        // Cerrar la conexión
        mysqli_close($conexion);
    } else {
        // Si no se recibieron todos los campos necesarios, redirigir al formulario de producto con un mensaje de error
        header("Location: formulario_producto.php?error=1");
    }
} else {
    // Si no se recibieron datos por el método POST, redirigir al formulario de producto
    header("Location: formulario_producto.php");
}
?>
