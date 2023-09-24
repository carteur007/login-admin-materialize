<!DOCTYPE html>
<html>

<head>
    <title>SFB|<?= $title  ?></title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--Import materialize.css-->
    <?php
    if (isset($_GET['page'])) {
        if ($_GET['page'] === 'home') {
    ?>
            <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
            <link type="text/css" rel="stylesheet" href="css/style.css" media="screen,projection" />
</head>

<body>
    <header>
        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">SFB</a>
                <a href="#" data-target="nav-mobile" class="sidenav-trigger">
                    <i class="material-icons">menu</i>
                </a>
                <ul class="right hide-on-med-and-down class=">
                    <li class=""><a href="./index.php?page=home">Accueil</a></li>
                    <li class=""><a href="./public/about.php?page=about">A propos</a></li>
                    <li class=""><a href="./public/contact.php?page=contact">Contact</a></li>
                    <li class=""><a href="./public/galerie.php?page=galerie">Galerie</a></li>
                    <li class=""><a href="./public/login.php?page=login">Connexion</a></li>
                </ul>
                <ul class="sidenav" id="nav-mobile">
                    <li class=""><a href="./index.php?page=home">Accueil</a></li>
                    <li class=""><a href="./public/about.php?page=about">A propos</a></li>
                    <li class=""><a href="./public/contact.php?page=contact">Contact</a></li>
                    <li class=""><a href="./public/galerie.php?page=galerie">Galerie</a></li>
                    <li class=""><a href="./public/login.php?page=login">Connexion</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container">

    <?php } else { ?>
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
        <link type="text/css" rel="stylesheet" href="../css/style.css" media="screen,projection" />
        </head>

        <body>
            <header>
                <nav>
                    <div class="nav-wrapper">
                        <a href="#" class="brand-logo">SFB</a>
                        <a href="#" data-target="nav-mobile" class="sidenav-trigger">
                            <i class="material-icons">menu</i>
                        </a>
                        <ul class=" right hide-on-med-and-down">
                            <li class=""><a href="../index.php?page=home">Accueil</a></li>
                            <li class=""><a href="../public/about.php?page=about">A propos</a></li>
                            <li class=""><a href="../public/contact.php?page=contact">Contact</a></li>
                            <li class=""><a href="../public/galerie.php?page=galerie">Galerie</a></li>
                            <li class=""><a href="../public/login.php?page=login">Connexion</a></li>
                        </ul>
                        <ul class="sidenav" id="nav-mobile">
                            <li class=""><a href="../index.php?page=home">Accueil</a></li>
                            <li class=""><a href="../public/about.php?page=about">A propos</a></li>
                            <li class=""><a href="../public/contact.php?page=contact">Contact</a></li>
                            <li class=""><a href="../public/galerie.php?page=galerie">Galerie</a></li>
                            <li class=""><a href="../public/login.php?page=login">Connexion</a></li>
                        </ul>
                    </div>
                </nav>
            </header>
            <div class="container">

            <?php  }
    } else { ?>
            <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
            <link type="text/css" rel="stylesheet" href="css/style.css" media="screen,projection" />
            </head>

            <body>
                <header>
                    <nav>
                        <div class="nav-wrapper">
                            <a href="#" class="brand-logo">SFB</a>
                            <a href="#" data-target="nav-mobile" class="sidenav-trigger">
                                <i class="material-icons">menu</i>
                            </a>
                            <ul class="right hide-on-med-and-down">
                                <li class=""><a href="./index.php?page=home">Accueil</a></li>
                                <li class=""><a href="./public/about.php?page=about">A propos</a></li>
                                <li class=""><a href="./public/contact.php?page=contact">Contact</a></li>
                                <li class=""><a href="./public/galerie.php?page=galerie">Galerie</a></li>
                                <li class=""><a href="./public/login.php?page=login">Connexion</a></li>
                            </ul>
                            <ul class="sidenav" id="nav-mobile">
                                <li class=""><a href="./index.php?page=home">Accueil</a></li>
                                <li class=""><a href="./public/about.php?page=about">A propos</a></li>
                                <li class=""><a href="./public/contact.php?page=contact">Contact</a></li>
                                <li class=""><a href="./public/galerie.php?page=galerie">Galerie</a></li>
                                <li class=""><a href="./public/login.php?page=login">Connexion</a></li>
                            </ul>
                        </div>
                    </nav>
                </header>
            <?php
        }
            ?>

            <h2><?= $title ?></h2>