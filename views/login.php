<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="/style/login.css">
    <title>Login</title>
</head>

<body>
    
    <section>
        <img src="/assets/devchallenges.svg" alt="" class="img">
        <h1>Login</h1>


        <form action="/resources/validacion.php" method="post" require>

            <div class="input-container">
                <input type="text" name="email" placeholder="correo">
                <span class="material-symbols-outlined">
                    mail
                </span>
            </div>

            <div class="input-container">
                <input type="password" name="password" placeholder="contraseña" required>
                <span class="material-symbols-outlined">
                    lock
                </span>
            </div>

            <button type="submit" class="submit" >Login</button>
        </form>
        <div class="center">
            <p>or continue with these social profile</p>
          
            <a href=""><img src="/assets/Google.svg" alt=""></a>
            <a href=""><img src="/assets/Facebook.svg" alt=""></a>
            <a href=""><img src="/assets/Twitter.svg" alt=""></a>
            <a href=""><img src="/assets/Gihub.svg" alt=""></a>
            <p>Don’t have an account yet?<a href="/views/register.php">Register</a></p>
        </div>
    </section>
    <div class="abajo">
        <p>created by <a href="">username</a></p>
        <p>devChallenges.io</p>
    </div>

</body>

</html>