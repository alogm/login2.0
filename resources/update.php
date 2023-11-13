<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    session_start();
    extract($_POST);

    require_once($_SERVER["DOCUMENT_ROOT"] . "../conec_base/database.php");



    $hashedPassword = !empty($Contrasena) ? password_hash($Contrasena, PASSWORD_DEFAULT) : null;

    if (isset($_FILES['Photo']) && $_FILES['Photo']['size'] > 0 && getimagesize($_FILES['Photo']['tmp_name']) !== false) {
        $targetDirectory = "../imag/";
        $targetFile = $targetDirectory . basename($_FILES['Photo']['name']);

        if (move_uploaded_file($_FILES['Photo']['tmp_name'], $targetFile)) {
            $mysqli->query("UPDATE login_db SET email='$Email', " . ($hashedPassword ? "contrasena='$hashedPassword', " : "") . "photo='{$_FILES['Photo']['name']}', name='$Name', Bio='$Bio', phone='$Phone' WHERE Usuario ='$id'");
            header("location:/views/perfil.php");
        } else {
            header("location:/manejo_errores/error_update.php");
        }
    }else {
        $mysqli->query("UPDATE login_db SET email='$Email', " . ($hashedPassword ? "contrasena='$hashedPassword', " : "") . "name='$Name', Bio='$Bio', phone='$Phone' WHERE Usuario ='$id'");
        header("location:/views/perfil.php");
    }
}
