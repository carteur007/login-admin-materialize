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
            <link type="text/css" rel="stylesheet" href="admin/css/admin.css" media="screen,projection" />

</head>

<body><!--
    <header>
        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo center">SFB Login</a>
            </div>
        </nav>
    </header> -->
<?php } else { ?>
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="../css/style.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="../admin/css/admin.css" media="screen,projection" />
    </head>

    <body><!--
            <header>
                <nav>
                    <div class="nav-wrapper">
                        <a href="#" class="brand-logo center">SFB AMIN</a>
                    </div>
                </nav>
            </header> -->
    <?php  }
    } else { ?>
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/style.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="admin/css/admin.css" media="screen,projection" />
    </head>

    <body><!--
                <header>
                    <nav>
                        <div class="nav-wrapper">
                            <a href="#" class="brand-logo center">SFB Login</a>
                        </div>
                    </nav>
                </header> -->
    <?php
    }
    ?>