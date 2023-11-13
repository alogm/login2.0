<?php

$id = $_GET["id"];

session_start();
$_SESSION["User_id"] = $id;

require_once("../resources/Usuarios.php");
$data = getByID($id);

if ($data) {
    extract($data);
} else {
    echo "Usuario no encontrado";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/style/update.css">

</head>

<body>
    <div class="arriba">
        <img src="/assets/devchallenges.svg" alt="" class="logo">

        <!-- Button trigger modal -->
        <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal">

            <?php
if (isset($_SESSION['user_data'])) {
        $Usuario = $_SESSION['user_data'];
        echo '<div class="user-profile">';
        echo '<img src="/imag/' . $Usuario['Photo'] . '" alt="Imagen usuario" class="profile-picture">';
        echo '<p class="user-name">' . $Usuario['Name'] . '</p>';
        echo '</div>';
        echo ' <h5>V</h5>';
    } else {
        header("location:../views/login.php");
    }
    ?>
        </button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">
                            <?php
if (isset($_SESSION['user_data'])) {
        $Usuario = $_SESSION['user_data'];
        echo '<div class="user-profile">';
        echo '<img src="/imag/' . $Usuario['Photo'] . '" alt="Imagen usuario" class="profile-picture">';
        echo '<p class="user-name">' . $Usuario['Name'] . '</p>';
        echo '</div>';
    } else {
        header("location:../views/login.php");
    }
    ?>
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="../resources/delete.php">
                            <input type="hidden" name="id" value="<?= $Usuario['Usuario'] ?>">
                            <button type="submit" class="btn btn-secondary">Eliminar Perfil</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <a href="../resources/cierre.php" class="btn btn-primary">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p class="back"><a href="/views/perfil.php">
            < Back</a>
    </p>
    <section>

        <h1>Change Info</h1>
        <p>Changes will be reflected to every services</p>

        <form method="post" action="../resources/update.php" enctype="multipart/form-data">
            <div class="image-container">
                <img src="/imag/<?php echo $Usuario['Photo']; ?>" alt="Imagen usuario" class="img">
                <input type="file" id="fileInput" name="Photo" accept="image/*" style="display: none;">
                <label for="fileInput" class="custom-file-input">
                    <span class="material-symbols-outlined">
                        photo_camera
                    </span>
                </label>
            </div>
            <input type="number" hidden value="<?= $id ?>" name="id" class="input">

            <h6>Name</h6>
            <input type="text" value="<?= $Name ?>" name="Name" class="input">

            <h6>Bio</h6>
            <textarea name="Bio" class="bio" cols="30" rows="10"><?= $Bio ?></textarea>


            <h6>Phone</h6>
            <input type="number" value="<?= $Phone ?>" name="Phone" class="input">

            <h6>Email</h6>
            <input type="text" value="<?= $Email ?>" name="Email" class="input">

            <h6>Password</h6>
            <input type="password" name="Contrasena" class="input">
            <br>

            <button type="submit" class="submit">Save</button>
        </form>
    </section>

    <div class="abajo">
        <p>created by <a href="">username</a></p>
        <p>devChallenges.io</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>