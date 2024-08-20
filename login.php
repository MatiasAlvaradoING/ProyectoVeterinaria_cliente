<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validar usuario y contraseña
    if ($username == "diazm" && $password == "123456") {
        // Iniciar sesión y almacenar el nombre de usuario
        $_SESSION['username'] = $username;

        // Redirigir a menu.php
        header("Location: model/menu.php");
        exit();
    } else {
        // En caso de error, redirigir de nuevo al login
        echo "<script>alert('Usuario o contraseña incorrectos');</script>";
        echo "<script>window.location.href = 'login.php';</script>";
    }
}
?>
