<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="/style/register.css">
    <title>Register</title>
</head>

<body>
    <img src="/assets/devchallenges.svg" alt="" class="logo">
    <br>
    <a href="/views/login.php"> < Back</a>
    <section>
        <h1>Create Info</h1>
        <p>Create will be reflected to every services</p>
        <form method="post" action="../resources/register.php" enctype="multipart/form-data">
            
            <div>
                <input type="file" name="Photo" accept="image/*">
                <span class="material-symbols-outlined">
                    photo_camera
                </span>
                <p>Create PHOTO</p>
            </div>
            <h6>Name</h6>
            <input type="text" name="Name" placeholder="Enter your name..." class="input" required>
            <h6>Bio</h6>
            <input type="text" name="Bio" placeholder="Enter your bio..." class="bio" required>
            <h6>Phone</h6>
            <input type="number" name="Phone" placeholder="Enter your phone..." class="input" required>
            <h6>Email</h6>
            <input type="email" name="Email" placeholder="Enter your email..."  class="input" required>
            <h6>Password</h6>
            <input type="text" name="Contrasena" placeholder="Enter your password..." class="input" required>
            <button type="submit">Save</button>
        </form>
    </section>

    <div class="abajo">
        <p>created by <a href="">username</a></p>
        <p>devChallenges.io</p>
    </div>

</body>

</html>