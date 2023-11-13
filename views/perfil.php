<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/style/perfil.css">
   
</head>

<body>


    <section class="arriba">
        <img src="/assets/devchallenges.svg" alt="" class="logo">

    </section>

    



    <section class="encabezado">
        <h1>Personal info </h1>
        <p>Basic info, like your name and photo</p>
    </section>

    <section class="container">
        <div class="sub">
            <h3>Profile</h3>
            <p>Some info may be visible to other people</p>
            <button class="bttn"><a href="/views/update.php?id=<?= $Usuario['Usuario']; ?>">Edit</a></button>
            <p class="line"></p>
        </div>
        <br>
        <div class="image-container">
            <p>Photo</p>
            <img src="/imag/<?php echo $Usuario['Photo']; ?>" alt="Imagen usuario" class="img">
        </div>


        <p class="line"></p>

        <p class="line">Name <span><?php echo $Usuario['Name']; ?></span></p>

        <p class="line">Bio <span><?php echo $Usuario['Bio']; ?></span></p>

        <p class="line">Phone <span><?php echo $Usuario['Phone']; ?></span></p>

        <p class="line">Email <span><?php echo $Usuario["Email"]; ?></span></p>

        <p>Password <span>********</span></p>

    </section>
    <div class="abajo">
        <p>created by <a href="">username</a></p>
        <p>devChallenges.io</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>