<?php

session_start();
if(isset($_SESSION["user_data"]))
{
    header("location:./dashboard/admin/");
}


?>



<!DOCTYPE html>
<html>
<head>
    <title>Club Social Rubgy | La Rioja</title>

    <link rel="stylesheet" href="./css/bootstrap.css"/>
    <script src="./js/bootstrap.bundle.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Arroyo Walter">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="./css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

<main class="form-signin">
    <form action="secure_login.php" method='post' >
        <img class="mb-4" src="https://www.arroyowalter.site/SistemaClubSocial/images/Logo.png" alt="" width="148" height="125">
        <h1 class="h3 mb-3 fw-normal">Club Social Rubgy | La Rioja</h1>

        <div class="form-floating">
            <input type="text" class="form-control" name="user_id_auth"  id="floatingInput" placeholder="Usuario">
            <label for="floatingInput">Ingrese su usuario</label>
        </div>
        <div class="form-floating">
            <input type="password" name="pass_key" class="form-control" id="floatingPassword" placeholder="Contraseña">
            <label for="floatingPassword">Ingrese su contraseña</label>
        </div>

        <div class="checkbox mb-3">
            <label>
                <a href="forgot_password.php" class="btn-sm ">¿Olvidaste tu contraseña?</a>
            </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit" name="btnLogin" >Comenzar</button>
        <p class="mt-5 mb-3 text-muted">&copy; La Rioja - 2021</p>
    </form>
</main>



</body>


</html>
