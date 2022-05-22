<?php
session_start();
if (!isset($_SESSION['useremail'])) {
    header("Location: ./index.php?permission-error");
}


session_start();


$userEmail = $_SESSION['useremail'];
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
    <script src="./assets/js/main.js" type='module'></script>
    <title>Document</title>
</head>

<body class="home__body">
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="./assets/img/logo.svg" alt="" height="44" class="d-inline-block align-text-top"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <img class="nav__logo" src="./assets/icons/home-icon.svg" alt="home_logo">
                        <a class="nav-link active" aria-current="page" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <img class="nav__logo" src="./assets/icons/search-icon.svg" alt="home_logo">
                        <a class="nav-link" href="#">SEARCH</a>
                    </li>

                    <li class="nav-item">
                        <img class="nav__logo" src="./assets/icons/watchlist-icon.svg" alt="home_logo">
                        <a class="nav-link">WACTH LIST</a>
                    </li>
                    <li class="nav-item">
                        <img class="nav__logo" src="./assets/icons/original-icon.svg" alt="home_logo">
                        <a class="nav-link">ORIGINALS</a>
                    </li>
                    <li class="nav-item">
                        <img class="nav__logo" src="./assets/icons/movie-icon.svg" alt="home_logo">
                        <a class="nav-link">MOVIES</a>
                    </li>
                    <li class="nav-item">
                        <img class="nav__logo" src="./assets/icons/series-icon.svg" alt="home_logo">
                        <a class="nav-link">SERIES</a>
                    </li>
                </ul>
                <div class="dropdown me-5 pe-5">
                    <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuOffset" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                        <img src="https://m.media-amazon.com/images/I/61Bx7HZwXGL._AC_SL1300_.jpg" width="40" height="40" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu me-6" aria-labelledby="dropdownMenuOffset">
                        <li><a class="dropdown-item" href="#"><img class='dropdown__icon' src="./assets/icons/person-badge.svg" alt="dropdown__icon">PROFILE </a></li>
                        <li><a class="dropdown-item logout" href="./modules/logout.php"><img class='dropdown__icon' src="./assets/icons/door-open.svg" alt="dropdown__icon">LOGOUT</a> </li>
                    </ul>
                    </ul>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <section id="home__banner" class="home__banner">


        <h2 id='banner__title' class="banner__title"></h2>
        <div class="banner__buton_group">
            <a class='banner__button play_button' href="" class="play__button_a"> <img src="./assets/icons/play-icon-black.png" alt="">PLAY</a>
            <a class='banner__button trailer_button' href="" class="trailer__button_a"><img src="./assets/icons/play-icon-white.png" alt="">TRAILER</a>
            <a class='banner__button actions_button' href="" class=""><img class="banner__icons" src="./assets/icons/group-icon.png" alt=""></a>
            <a class='banner__button actions_button' href="" class=""><img class="banner__icons" src="./assets/icons/watchlist-icon.svg" alt=""></a>
        </div>
        <p id='banner__overview' class="banner__overview"></p>
        <div class="banner__fadeBottom"></div>
    </section>
    <section class="main__content">
        <h1 id='welcome__message' class="welcome__message">Welcome
            <?= $userEmail ?>

        </h1>

        <div class="category__content">
            <a href="#" data-type="category_card" class="category__card"><img class="category__img" src="./assets/img/viewers-disney.png" alt=""> <video class="background__card hide" src="./assets/img/videos/1564674844-disney.mp4" playsinline autoplay muted loop></video> </a>
            <a href="#" data-type="category_card" class="category__card"><img class="category__img" src="./assets/img/viewers-marvel.png" alt=""> <video class="background__card hide" src="./assets/img/videos/1564676115-marvel.mp4" playsinline autoplay muted loop></video> </a>
            <a href="#" data-type="category_card" class="category__card"><img class="category__img" src="./assets/img/viewers-national.png" alt=""> <video class="background__card hide" src="./assets/img/videos/1564676296-national-geographic.mp4" playsinline autoplay muted loop></video> </a>
            <a href="#" data-type="category_card" class="category__card"><img class="category__img" src="./assets/img/viewers-pixar.png" alt=""> <video class="background__card hide" src="./assets/img/videos/1564676714-pixar.mp4" playsinline autoplay muted loop></video> </a>
            <a href="#" data-type="category_card" class="category__card"><img class="category__img" src="./assets/img/viewers-starwars.png" alt=""> <video class="background__card hide" src="./assets/img/videos/1608229455-star-wars.mp4" playsinline autoplay muted loop></video> </a>

        </div>
    </section>

    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>