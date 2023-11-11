<?php

extract($_POST);

if (isset($_POST['Email'], $_POST['Contrasena'])) {
    $Email = $_POST['Email'];
    $Contrasena = $_POST['Contrasena'];
    $pass = password_hash($Contrasena, PASSWORD_BCRYPT);

    require_once($_SERVER["DOCUMENT_ROOT"] . "../conec_base/database.php");
   
    $open = $mysqli->prepare("INSERT INTO login_db (Email, Contrasena) VALUES (?, ?)");
    $open->bind_param("ss", $Email, $pass, );

    if ($open->execute()) {
        header("Location: ../views/login.php");
    } else {
        echo "Error al registrar el usuario.";
    }

    $open->close();
    $mysqli->close();
} else {
    echo "Datos de usuario no válidos.";
}
?>