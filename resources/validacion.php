<?php

$email = $_POST['email'];
$password = $_POST['password'];

session_start();

$conec = mysqli_connect("localhost", "root", "", "login_db");
$consulta = "SELECT * FROM login_db WHERE email = '$email'";
$resultado = mysqli_query($conec, $consulta);

if ($resultado && mysqli_num_rows($resultado) > 0) {
    $Usuario = mysqli_fetch_assoc($resultado);

    if (password_verify($password, $Usuario['Contrasena'])) {
        $_SESSION['user_data'] = $Usuario;
        header("location:../views/perfil.php");
    } else {
        header("location:/manejo_errores/errorLogin.php");
    }
} else {
    header("location:/manejo_errores/errorLogin.php");
}

mysqli_free_result($resultado);
mysqli_close($conec);