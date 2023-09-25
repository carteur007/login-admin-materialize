<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOGIN-ADMIN|<?= $title ?></title>
    <?php
    if (isset($_GET['page'])) :
        if ($_GET['page'] === 'admin') :
    ?>
            <!--Import materialize.css-->
            <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
            <link type="text/css" rel="stylesheet" href="css/admin.css" />
</head>

<body class="grey lighten-4">
    <nav class="blue darken-2">
        <div class="container">
            <div class="nav-wrapper">
                <a href="./dashboard.php?page=admin" class="brand-logo">LOGIN-ADMIN</a>
                <a href="#" data-target="nav-mobile" class="sidenav-trigger">
                    <i class="material-icons">menu</i>
                </a>
                <ul class="right hide-on-med-and-down ">
                    <li class="active"><a href="./dashboard.php?page=admin">Tableau de bord</a></li>
                    <li><a href="./page/posts.php?page=admin-posts">Posts</a></li>
                    <li><a href="./page/categories.php?page=admin-categories">Categories</a></li>
                    <li><a href="./page/comments.php?page=admin-comments">Commentaires</a></li>
                    <li><a href="./page/users.php?page=admin-users">Utilisateurs</a></li>
                    <li>
                        <div class="fixed-action-btn">
                            <a class="btn-floating btn-large orange">
                                <span class="large material-icons">
                                    manage_accounts
                                </span>
                            </a>
                            <ul>
                                <li><a class="btn-floating blue"><i class="material-icons"> admin_panel_settings</i></a></li>
                                <li><a href="../public/login.php?page=login&logout=1" class=" btn-floating red"><i class="material-icons">logout</i></a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <!-- Side nav -->
                <ul id="nav-mobile" class="sidenav">
                    <li>
                        <div class="user-view">
                            <div class="background">
                                <img src="img/ocean.jpg" alt="">
                            </div>
                            <a href="#">
                                <img src="img/person1.jpg" alt="" class="circle">
                            </a>
                            <a href="">
                                <span class="name white-text"><?= $name ?></span>
                            </a>
                            <a href="">
                                <span class="email white-text"><?= $email ?></span>
                            </a>
                        </div>
                    </li>
                    <li><a href="./dashboard.php?page=admin"><i class="material-icons">dashboard</i>Tableau de bord</a></li>
                    <li><a href="./page/posts.php?page=admin-posts">Posts</a></li>
                    <li><a href="./page/categories.php?page=admin-categories">Categories</a></li>
                    <li><a href="./page/comments.php?page=admin-comments">Commentaires</a></li>
                    <li><a href="./page/users.php?page=admin-users">Utilisateurs</a></li>
                    <li>
                        <div class="divider"></div>
                    </li>
                    <li><a class="subheader">Account Controls</a></li>
                    <li><a href="../public/login.php?page=login" class=" waves-effect"><i class="material-icons">logout</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- On est dans admin/page -->
<?php
        else :
?>
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../../css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="../css/admin.css" />
    </head>

    <body class="grey lighten-4">
        <nav class="blue darken-2">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="../dashboard.php?page=admin" class="brand-logo">Madmin</a>
                    <a href="#" data-target="nav-mobile" class="sidenav-trigger">
                        <i class="material-icons">menu</i>
                    </a>
                    <ul class="right hide-on-med-and-down ">
                        <li class="active"><a href="../dashboard.php?page=admin">Tableau de bord</a></li>
                        <li><a href="../page/posts.php?page=admin-posts">Posts</a></li>
                        <li><a href="../page/categories.php?page=admin-categories">Categories</a></li>
                        <li><a href="../page/comments.php?page=admin-comments">Commentaires</a></li>
                        <li><a href="../page/users.php?page=admin-users">Utilisateurs</a></li>
                        <li>
                            <div class="fixed-action-btn">
                                <a class="btn-floating btn-large orange">
                                    <span class="large material-icons">
                                        manage_accounts
                                    </span>
                                </a>
                                <ul>
                                    <li><a class="btn-floating blue"><i class="material-icons"> admin_panel_settings</i></a></li>
                                    <li><a href="../../public/login.php?page=login&logout=1" class=" btn-floating red"><i class="material-icons">logout</i></a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <!-- Side nav -->
                    <ul id="nav-mobile" class="sidenav">
                        <li>
                            <div class="user-view">
                                <div class="background">
                                    <img src="img/ocean.jpg" alt="">
                                </div>
                                <a href="#">
                                    <img src="img/person1.jpg" alt="" class="circle">
                                </a>
                                <a href="">
                                    <span class="name white-text"><?= $name ?></span>
                                </a>
                                <a href="">
                                    <span class="email white-text"><?= $email ?></span>
                                </a>
                            </div>
                        </li>
                        <li><a href="../dashboard.php?page=admin"><i class="material-icons">dashboard</i>Tableau de bord</a></li>
                        <li><a href="../page/posts.php?page=admin-posts">Posts</a></li>
                        <li><a href="../page/categories.php?page=admin-categories">Categories</a></li>
                        <li><a href="../page/comments.php?page=admin-comments">Commentaires</a></li>
                        <li><a href="../page/users.php?page=admin-users">Utilisateurs</a></li>
                        <li>
                            <div class="divider"></div>
                        </li>
                        <li><a class="subheader">Account Controls</a></li>
                        <li><a href="../../public/login.php?page=login" class=" waves-effect"><i class="material-icons">logout</i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    <?php
        endif;
    else :
    ?>
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/admin.css" />
    </head>

    <body class="grey lighten-4">
        <nav class="blue darken-2">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="./dashboard.php?page=admin" class="brand-logo">Madmin</a>
                    <a href="#" data-target="nav-mobile" class="sidenav-trigger">
                        <i class="material-icons">menu</i>
                    </a>
                    <ul class="right hide-on-med-and-down ">
                        <li class="active"><a href="./dashboard.php?page=admin">Tableau de bord</a></li>
                        <li><a href="./page/posts.php?page=admin-posts">Posts</a></li>
                        <li><a href="./page/categories.php?page=admin-categories">Categories</a></li>
                        <li><a href="./page/comments.php?page=admin-comments">Commentaires</a></li>
                        <li><a href="./page/users.php?page=admin-users">Utilisateurs</a></li>
                        <li>
                            <div class="fixed-action-btn">
                                <a class="btn-floating btn-large orange">
                                    <span class="large material-icons">
                                        manage_accounts
                                    </span>
                                </a>
                                <ul>
                                    <li><a class="btn-floating blue"><i class="material-icons"> admin_panel_settings</i></a></li>
                                    <li><a href="../public/login.php?page=login&logout=1" class=" btn-floating red"><i class="material-icons">logout</i></a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <!-- Side nav -->
                    <ul id="nav-mobile" class="sidenav">
                        <li>
                            <div class="user-view">
                                <div class="background">
                                    <img src="img/ocean.jpg" alt="">
                                </div>
                                <a href="#">
                                    <img src="img/person1.jpg" alt="" class="circle">
                                </a>
                                <a href="">
                                    <span class="name white-text"><?= $name ?></span>
                                </a>
                                <a href="">
                                    <span class="email white-text"><?= $email ?></span>
                                </a>
                            </div>
                        </li>
                        <li><a href="./dashboard.php?page=admin"><i class="material-icons">dashboard</i>Tableau de bord</a></li>
                        <li><a href="./page/posts.php?page=admin-posts">Posts</a></li>
                        <li><a href="./page/categories.php?page=admin-categories">Categories</a></li>
                        <li><a href="./page/comments.php?page=admin-comments">Commentaires</a></li>
                        <li><a href="./page/users.php?page=admin-users">Utilisateurs</a></li>
                        <li>
                            <div class="divider"></div>
                        </li>
                        <li><a class="subheader">Account Controls</a></li>
                        <li><a href="../public/login.php?page=login&logout=1" class=" waves-effect">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    <?php
    endif;
    ?>