<?php

use Firebase\JWT\JWT;

require_once __DIR__ . '/functions/Sessions.php';

if ($_COOKIE['UserEstate']) {
    $jwt = $_COOKIE['UserEstate'];
    try {
        JWT::decode($jwt, $_ENV['JWT_SECRET_KEY'], ['HS256']);
        header("Location: client.php");
    } catch (Exception) {
    }
}

if (isset($_POST['txtusername']) && isset($_POST['txtpassword'])) {
    $username = $_POST['txtusername'];
    $password = $_POST['txtpassword'];

    if (NSessionHandler::cekAuth($username, $password)) {
        $estate = NSessionHandler::getEstate($username);
        NSessionHandler::setLogin($username, $estate);

        echo "
        <script>
            alert('OK. estate: $estate');
            window.location.href='client.php';
        </script>";
    } else {
        echo "
        <script>
            alert('FAILED');
            window.location.href='login.php';
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/zuramai/mazer@docs/demo/assets/compiled/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/zuramai/mazer@docs/demo/assets/compiled/css/app-dark.css">
    <link rel="stylesheet" href="../public/login.css">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/gh/zuramai/mazer@docs/demo/assets/static/js/initTheme.js"></script>
    <div id="auth">
        <div class="row h-100">
            <div class="container col-6 d-flex justify-content-center align-items-center">
                <div id="auth-left">
                    <h1 class="auth-title text-center">Log in.</h1>
                    <p class="auth-subtitle mb-5">Login dengan data autentikasi masing-masing estate.</p>

                    <form action="" method="post">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input name="txtusername" type="text" class="form-control" placeholder="Username" required>
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-3">
                            <input name="txtpassword" type="password" class="form-control" placeholder="Password" required>
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block shadow-lg mt-5">Log in</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</body>

</html>