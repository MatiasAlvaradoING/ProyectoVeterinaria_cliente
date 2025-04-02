<?php
session_start();
include("model/conexion.php"); // Incluir la conexión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query para validar usuario
    $sql = "SELECT * FROM USUARIO WHERE RUT = ? AND CLAVE = ?";
    $stmt = odbc_prepare($cid, $sql);
    $params = array($username, $password);

    
    if (odbc_execute($stmt, $params)) {
        if ($row = odbc_fetch_array($stmt)) {
            // Usuario encontrado, iniciar sesión
            $_SESSION['username'] = $row['RUT']; // Guardar RUT en sesión
            $_SESSION['nick'] = $row['USUARIO']; // Guardar NICK en sesión
            $_SESSION['tipo_acceso'] = $row['TIPO_ACCESO']; // Guardar tipo de acceso
            $_SESSION['nombre'] = $row['NOMBRE']; // Guardar NOMBRE de acceso
            $_SESSION['rut'] = $row['RUT']; // Guardar NOMBRE de acceso

            // Redirigir al menú
            header("Location: model/menu.php");
            exit();
        } else {
            // Usuario o clave incorrectos
            echo "<script>alert('Usuario o contraseña incorrectos');</script>";
            echo "<script>window.location.href = 'index.php';</script>";
        }
    } else {
        echo "<script>alert('Error en la consulta');</script>";
        echo "<script>window.location.href = 'index.php';</script>";
    }
}
?>
