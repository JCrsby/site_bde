<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Accueil BDE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/e86bc93f0a.js" crossorigin="anonymous"></script>
</head>

<body>

<script>
    swal("Nous utilisons des cookies", "Nous les utilisons pour nous rappeler des informations vous concernant. Vous n’avez donc pas a nous les donner a s. Et encore. Et encore :)" ,"warning");



</script>
<div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed">
        <a class="navbar-brand" href="#" ><img src="img/logobde.png"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link border-left-0 border-right-0  border-bottom-1 border-top-0 active" href="Index.html" >Accueil</a>
                <a class="nav-item nav-link border-left-0 border-right-0  border-bottom-1 border-top-0" href="Boutique.html">Boutique</a>
                <a class="nav-item nav-link border-left-0 border-right-0  border-bottom-1 border-top-0" href="Info.html">A propos</a>
                <a class="nav-item nav-link border-left-0 border-right-0  border-bottom-1 border-top-0" href="Contact.html">Contact</a>
            </div>

        </div>
        <a class="navbar-item  mr-0 collapse navbar-collapse flex-row-reverse " id="navbarNavAltMarkup" href="#">Connexion</a>
    </nav>
</header>
<img src="img/etudiant_accueil.png" class="img-fluid" alt="Responsive image">
<div class="container">

    <br>
    <h4 class="evenements" align="center">Les événements:</h4>

    <div class="card-deck mt-5 mb-5">
        <div class="card">
            <img class="card-img-top border-bottom-1" src="img/volleyball.png" alt="Volley ball">
            <div class="card-body">
                <h5 class="card-title">Volley Ball 23/12/2019 </h5>
                <p class="card-text">Un Match de Volley entre les écoles CESI et Centrale !</p>
            </div>
            <div class="card-footer">

                <small class="text-muted"><button id="button" type="button" class="btn btn-outline-primary">S'inscrire</button></small>
                <small class="text-muted"><button type="button" class="btn btn-light">Plus d'infos</button></small>

            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/basketball.png" alt="Basket-ball">
            <div class="card-body">
                <h5 class="card-title">Basket-ball 27/12/2019</h5>
                <p class="card-text">Un Match de Basket entre les écoles CESI et Paul Bocuse !</p>
            </div>
            <div class="card-footer">
                <small class="text-muted"><button type="button" class="btn btn-outline-primary">S'inscrire</button></small>

                <small class="text-muted"><button type="button" class="btn btn-light">Plus d'infos</button></small>

            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/cinema.png" alt="Cinema">
            <div class="card-body">
                <h5 class="card-title">Cinema 28/12/2019</h5>
                <p class="card-text">Une scéance à moitié prix pour le film Avengers : Endgame !</p>
            </div>
            <div class="card-footer">
                <small class="text-muted"><button type="button" class="btn btn-outline-primary">S'inscrire</button></small>

                <small class="text-muted"><button type="button" class="btn btn-light">Plus d'infos</button></small>

            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/petanque.png" alt="Pétanque">
            <div class="card-body">
                <h5 class="card-title">Pétanque 30/12/2019</h5>
                <p class="card-text">Un Match de Pétanque entre les écoles CESI et Emlyon ! </p>
            </div>
            <div class="card-footer">
                <small class="text-muted"><button type="button" class="btn btn-outline-primary">S'inscrire</button></small>

                <small class="text-muted"><button type="button" class="btn btn-light">Plus d'infos</button></small>
            </div>
        </div>
    </div>
</div>
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
                        <a href="https://www.facebook.com/BDECesiLyon/"><i class="fab fa-facebook-square"></i> BDE CESI LYON</a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/bde_cesi_lyon/"><i class="fab fa-instagram"></i> BDE CESI LYON</a>
                    </li>
                    <li>
                        <a href="https://twitter.com/Bdecesilyon"><i class="fab fa-twitter-square"></i> BDE CESI LYON</a>
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
                <h6 class="font-weight-bold mt-3 mb-4"><a href="#!"> Mentions légales</a></h6>
                <a href="#"><i class="fas fa-mentions"></i> Voir les mentions legales</a>


                <ul class="list-unstyled">
                    <li>
                        <a href="#!"><i class="fas fa-envelope"> bdelyon@viacesi.fr</i></a>
                    </li>
                    <li>
                        <a href="#!"><i class="fas fa-phone-square-alt"> +33 6 89 60 08 65</i></a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->
            <div class="col-md-3 mx-auto">


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
<!-- Footer -->





</body>
</html>