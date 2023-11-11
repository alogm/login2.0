<?php
if (isset($_POST['Email'], $_POST['Contrasena'], $_POST['Name'], $_POST['Bio'], $_POST['Phone'])) {
    $Email = $_POST['Email'];
    $Contrasena = $_POST['Contrasena'];
    $Name = $_POST['Name'];
    $Bio = $_POST['Bio'];
    $Phone = $_POST['Phone'];
    $pass = password_hash($Contrasena, PASSWORD_BCRYPT);

    if (isset($_FILES['Photo'])) {
        $targetDirectory = "../imag/"; 
        $targetFile = $targetDirectory . basename($_FILES['Photo']['name']);

        if (move_uploaded_file($_FILES['Photo']['tmp_name'], $targetFile)) {
            require_once($_SERVER["DOCUMENT_ROOT"] . "../conec_base/database.php");

            $open = $mysqli->prepare("INSERT INTO login_db (Email, Contrasena, Photo, Name, Bio, Phone) VALUES (?, ?, ?, ?, ?, ?)");
            $open->bind_param("ssssss", $Email, $pass, $_FILES['Photo']['name'], $Name, $Bio, $Phone);

            if ($open->execute()) {
                header("Location: ../views/login.php");
            } else {
                echo "Error al registrar el usuario.";
            }

            $open->close();
            $mysqli->close();
        } else {
            header("location:/manejo_errores/cargar_img.php");
        }
    } else {
        echo "Por favor, seleccione una imagen.";
    }
} else {
    echo "Datos de usuario no válidos.";
}
?>