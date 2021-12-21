<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Fil rouge Banque</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/navbar_opacity.css">
    <link rel="stylesheet" href="css/carousel_2.css">
    <link rel="stylesheet" href="css/main.css">
    <style type="text/css">
        #visuelHeader {
            display: none;
        }

        #visuelHeader h1 {
            font-size: 40px;
        }

        /* Rules NAVBAR */
        #navbarLaptop {
            display: none;
        }

        @media screen and (min-width: 870px) {
            #navbarMobile {
                display: none;
            }

            #navbarLaptop {
                display: block;
            }
        }

        /* Rules VisuelHeader*/
        @media screen and (min-width: 990px) {
            #visuelHeader {
                display: block;
            }
        }
    </style>

</head>

<body>

    <header>
        <!-- ************************ Navbar first Mobile  *****************************-->
        <div id="navbarMobile" class="">

            <nav class="navbar navbar-expand-lg navbar-light fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active text-white" aria-current="page" href="index.php">Acceuil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="moncomptebancaire.php">Mon compte</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="Statistiques.php">Statistiques</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="actualites.php">Actualités</a>
                            </li>
                            <li><a class="btn text-white" style="background-color: #2a5f77;" href="login.php">LOG
                                    IN</a></li>
                    </div>
                </div>
            </nav>

        </div>

        <!-- ************************ Navbar *****************************-->
        <div id="navbarLaptop" class="">
            <nav class="navbar navbar-expand-lg fixed-top">
                <div id="header">
                    <ul>
                        <img src="img/1.png" style="width: 8.5%;" alt="">
                        <li><a href="index.php" style="text-decoration: underline;">Accueil</a></li>
                        <li><a href="moncomptebancaire.php">Mon Compte</a></li>
                        <li><a href="Statistiques.php">Statistique</a></li>
                        <li><a href="actualites.php">Actualités</a></li>
                        <li><a class="btn" style="background-color: #2a5f77;" href="login.html">LOG IN</a></li>
                    </ul>
                </div>
            </nav>


        </div>