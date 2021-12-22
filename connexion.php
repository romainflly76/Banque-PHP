<?php
include "view/templates/navbar.php";
include "view/templates/header_noel.php";
include "view/divider.php";
?>

</header>
        <!-- LOGIN FORM -->

        <section class="vh-100" style="background-color: #9A616D;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-xl-10">
                        <div class="card" style="border-radius: 1rem;">
                            <div class="row g-0">
                                <div class="col-md-6 col-lg-5 d-none d-md-block">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.jpg"
                                        alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                                </div>
                                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                    <div class="card-body p-4 p-lg-5 text-black">

                                        <form id="loginForm" method="POST" action="login.php">

                                            <h5 class="fw-normal mb-5 pb-3" style="letter-spacing: 1px;">
                                                Connectez-vous
                                                pour acceder à vos comptes</h5>

                                            <div class="form-outline mb-4">
                                                <input type="text" id="email" class="form-control form-control-lg"
                                                    name="email"
                                                    placeholder="Entrez votre adresse Mail" /><small></small>
                                                <label class="form-label" for="email"></label>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <input type="text" id="password" class="form-control form-control-lg"
                                                    name="password"
                                                    placeholder="Entrez votre mot de passe" /><small></small>
                                                <label class="form-label" for="password"></label>
                                            </div>
                                            <hr class="my-4">
                                            <div class="pt-1 mb-4">
                                            <button class="btn btn-lg btn text-white w-100"
                                                    style="background-color: #9A616D;" type="submit" name="submit">Login</button>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="js/login.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
            integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
            integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
            crossorigin="anonymous"></script>
</body>

</html>