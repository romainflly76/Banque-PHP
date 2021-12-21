<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="Image par mohamed Hassan">

  <link rel="manifest" href="site.webmanifest">
  <link rel="shortcut icon" type="image/jpg" href="img/icone.png">
  <!-- Place favicon.ico in the root directory -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <meta name="theme-color" content="#fafafa">
  <link rel="stylesheet" href="css/navbar_opacity.css">
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
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="index.html">Acceuil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="moncomptebancaire.html">Mon compte</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="Statistiques.html">Statistiques</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="actualites.html">Actualités</a>
              </li>
              <li><a class="btn text-white" style="background-color: #2a5f77;" href="login.html">LOG
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
            <li><a href="index.html" style="text-decoration: underline;">Accueil</a></li>
            <li><a href="moncomptebancaire.html">Mon Compte</a></li>
            <li><a href="Statistiques.html">Statistique</a></li>
            <li><a href="actualites.html">Actualités</a></li>
            <li><a class="btn" style="background-color: #2a5f77;" href="login.html">LOG IN</a></li>
          </ul>
        </div>
      </nav>


    </div>
  </header>

  <!--************************* Card ********************************-->
  <div id="separator" style="height: 30vh;"></div>
  <div class="b-example-divider"></div>
  <main class="container my-5">
    <h2>Vos comptes</h2>
    <section class="row my-5">

      <!-- Compte  1 -->
      <div class="col-12 col-sm-6 col-lg-4 my-2">
        <article class="card border-dark h-100">
          <div class="card-header">PEL<p>N:23344555E33</p>
          </div>
          <section class="card-body">
            <h5 class="card-title">Proprietaire: M Leboiteux Romain</h5>
            <h3 class="card-title border-top dark">SOLDE</h3>
            <p class="card-text">3000 €</p>
            <div class="card-footer">
              <a href="#" class="btn btn-secondary w-100 my-1">Effectuer un dépôt</a>
              <a href="#" class="btn btn-secondary w-100 my-1">Effectuer un retrait</a>
              <a href="#" class="btn btn btn-warning w-100 my-1">Supprimer le compte</a>
            </div>
          </section>
        </article>
      </div>

      <!-- Compte  2 -->
      <div class="col-12 col-sm-6 col-lg-4 my-2">
        <article class="card border-dark h-100">
          <div class="card-header">PEL<p>N:23344555E33</p>
          </div>
          <section class="card-body">
            <h5 class="card-title">Proprietaire: M Leboiteux Romain</h5>
            <h3 class="card-title border-top dark">SOLDE</h3>
            <p class="card-text">3000 €</p>
            <div class="card-footer">
              <a href="#" class="btn btn-secondary w-100 my-1">Effectuer un dépôt</a>
              <a href="#" class="btn btn-secondary w-100 my-1">Effectuer un retrait</a>
              <a href="#" class="btn btn btn-warning w-100 my-1">Supprimer le compte</a>
            </div>
          </section>
        </article>
      </div>

      <!-- Compte  3 -->
      <div class="col-12 col-sm-6 col-lg-4 my-2">
        <article class="card border-dark h-100">
          <div class="card-header">PEL<p>N:23344555E33</p>
          </div>
          <section class="card-body">
            <h5 class="card-title">Proprietaire: M Leboiteux Romain</h5>
            <h3 class="card-title border-top dark">SOLDE</h3>
            <p class="card-text">3000 €</p>
            <div class="card-footer">
              <a href="#" class="btn btn-secondary w-100 my-1">Effectuer un dépôt</a>
              <a href="#" class="btn btn-secondary w-100 my-1">Effectuer un retrait</a>
              <a href="#" class="btn btn btn-warning w-100 my-1">Supprimer le compte</a>
            </div>
          </section>
        </article>
      </div>

      </div>

    </section>
    <div class="b-example-divider"></div>
  </main>

  <!-- *********************** Footer ******************-->

  <!-- Footer -->
  <footer id="footerLarge" class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>connectez-vous sur nos réseaux sociaux:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div id="social">
        <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;" href="#" target="_blank"
          role="button"><i class="fab fa-facebook-f"></i></a>
        <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee;" href="#!" role="button"><i
            class="fab fa-twitter"></i></a>
        <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39;" href="#" target="_blank"
          role="button"><i class="fab fa-google"></i></a>

        <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac;" href="#!" role="button"><i
            class="fab fa-instagram"></i></a>

      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Nos engagements
            </h6>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Mollitia corporis incidunt consequatur officia odio, nostrum, nam voluptatum,
              facilis eaque ea architecto? Provident, dolorem numquam quam nobis reprehenderit
              adipisci
              necessitatibus culpa.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Produits
            </h6>
            <p>
              <a href="#!" class="text-reset">Nos conseillers</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Nous Recrutons</a>
            </p>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Liens Utiles
            </h6>
            <p>
              <a href="#" target="_blank" class="text-reset">Nous trouver</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Gallerie</a>
            </p>
            <p>
              <a href="#!" class="text-reset">FAQ</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Aides</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Contact
            </h6>
            <p><i class="fas fa-home me-3"></i>111 rue du Bourg, 7600 Rouen</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              informations@romainbanque.com
            </p>
            <p><i class="fas fa-phone me-3"></i> +33 2 35 64 15 98</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4 text-white" style="background-color: #2a5f77;">
      © 2021 Copyright:
      <a class="text-white fw-bold" href="#">Romain_banque.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

  <!-- **************************** Footer First mobile****************$-->

  <footer id="footerMobile" class="bg-light text-center text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;" href="#!" role="button"><i
            class="fab fa-facebook-f"></i></a>

        <!-- Twitter -->
        <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee;" href="#!" role="button"><i
            class="fab fa-twitter"></i></a>

        <!-- Google -->
        <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39;" href="#!" role="button"><i
            class="fab fa-google"></i></a>

        <!-- Instagram -->
        <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac;" href="#!" role="button"><i
            class="fab fa-instagram"></i></a>

        <!-- Linkedin -->
        <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca;" href="#!" role="button"><i
            class="fab fa-linkedin-in"></i></a>
        <!-- Github -->
        <a class="btn btn-primary btn-floating m-1" style="background-color: #333333;" href="#!" role="button"><i
            class="fab fa-github"></i></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: #6D676E;">
      © 2020 Copyright:
      <a class="text-white" href="index.html">romainbanque.com</a>
    </div>
    <!-- Copyright -->
  </footer>


  <!-- Add your site or application content here -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
  <script src="js/popup.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>