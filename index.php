<?php
require("./modules/sessionControl.php");

$errorM = checkErr($_GET);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="shortcut icon" href="./assets/icons/favicon.svg" type="image/x-icon">
    <title>Disney+</title>
</head>

<body class="index__body">

    <section class="loginModal">
        <img src="./assets/img/cta-logo-one.svg" alt="logos-up">
        <div class="container">
            <form action="./modules/login.php" method="POST">

                <div class="form-floating mb-3">
                    <input type="email" name='useremail' class="form-control" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input name='password' type="password" class="form-control" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>

                <?= $errorM ?>
                <button type="submit" class="btn-lg btn-primary mt-3 login__button">Get All There</button>
            </form>
        </div>
        <img class="bottom__logos" src="./assets/img/cta-logo-two.png" alt="logos-down">
    </section>


</body>

</html>