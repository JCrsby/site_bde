<!DOCTYPE html>
<html lang="fr">
<head>
    <title>BDE CESI Lyon</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/e86bc93f0a.js" crossorigin="anonymous"></script>
</head>

<body>
<header>

    <nav class="navbar navbar-expand-lg navbar-dark fixed">
        <a class="navbar-brand" href="/index" ><img src="img/logobde.png"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link border-left-0 border-right-0  border-bottom-1 border-top-0 active" href="/index" >Accueil</a>
                <a class="nav-item nav-link border-left-0 border-right-0  border-bottom-1 border-top-0" href="/boutique">Boutique</a>
                <a class="nav-item nav-link border-left-0 border-right-0  border-bottom-1 border-top-0" href="/info">A propos</a>
                <a class="nav-item nav-link border-left-0 border-right-0  border-bottom-1 border-top-0" href="/contact">Contact</a>
                <a class="nav-item nav-link border-left-0 border-right-0  border-bottom-1 border-top-0" href="/panier">Panier</a>
            </div>

        </div>

        <a class="navbar-item  mr-0 collapse navbar-collapse flex-row-reverse " id="navbarNavAltMarkup" href="/connexion">Connexion</a>
    </nav>
</header>



   @yield ('contenu')


   @if (Session::get('cookiesPopup',0) != 1)

                <div class="cookiesPopup">

                        En navigant sur ce site, vous acceptez l'utilisation des cookies de navigation et les conditions générales d'utilisation.
                      <button class="btn btn-primary"> <a href="/politique" target="_blank">&nbsp Plus d'informations</a> </button>
                      <form action={{route('cookiesPopup')}} method="post">
                         {{csrf_field()}}
                      <button> <input class="cookiesPopupOK" type="submit" class="submitcookie" value="Très Bien"/></form></button>
                        <a class="cookiesPopupOK" href="https://www.google.fr">Non Merci (retour a Google)</a>
                </div>
                @endif


   <footer class="page-footer font-small">
    <br>

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-3 mx-auto">

                <!-- Links -->
                <h6 id="footer_color_title_reseaux" class="font-weight-bold mt-3 mb-4">Réseaux sociaux</h6>

                <ul class="list-unstyled">
                    <li>
                        <a href="https://www.facebook.com/BDECesiLyon/"><i class="fab fa-facebook-square"></i> BDE CESI
                            LYON</a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/bde_cesi_lyon/"><i class="fab fa-instagram"></i> BDE CESI
                            LYON</a>
                    </li>
                    <li>
                        <a href="https://twitter.com/Bdecesilyon"><i class="fab fa-twitter-square"></i> BDE CESI
                            LYON</a>
                    </li>

                </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">
            <div class="col-md-3 mx-auto">

                <!-- Links -->
                <h6 id="footer_color_title_contact" class="font-weight-bold mt-3 mb-4">Nous contacter</h6>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!"><i class="fas fa-envelope"></i> bdelyon@viacesi.fr</a>
                    </li>
                    <li>
                        <a href="#!"><i class="fas fa-phone-square-alt"></i> +33 6 89 60 08 65</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->
            <div class="col-md-3 mx-auto">

                 <!-- Links -->
                 <h6 id="footer_color_title_mentions" class="font-weight-bold mt-3 mb-4"> Mentions légales</h6>

                <ul class="list-unstyled">
                    <li>
                    <a href="/conditions"><i class="fas fa-conditions"></i>Conditions générales de vente</a>
                    </li>
                    <li>
                    <a href="/politique"><i class="fas fa-politique"></i>Données personnelles et politique de confidentialité</a>
                    </li>
                </ul>



            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->

            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->

            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
        <a href="https://bdecesilyon.fr/"> bdecesilyon.fr</a>
    </div>
    <!-- Copyright -->

</footer>

</body>
</html>
