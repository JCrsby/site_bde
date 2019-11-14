<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Accueil BDE</title>
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
            </div>

        </div>
        <a class="navbar-item  mr-0 collapse navbar-collapse flex-row-reverse " id="navbarNavAltMarkup" href="/connexion">Connexion</a>
    </nav>
</header>

<img src="{{asset('img/etudiant_accueil.png')}}" class="img-fluid" alt="Responsive image">
<div class="container">

    <br>
    <h4 class="evenements" align="center">Les événements</h4>

    <div class="card-deck mt-5 mb-5">
        <div class="card">
            <img class="card-img-top border-bottom-1" src="img/volleyball.png" alt="Volley ball">
            <div class="card-body">
                <h5 class="card-title">Volley Ball 23/12/2019 </h5>
                <p class="card-text">Un Match de Volley entre les écoles CESI et Centrale !</p>
            </div>
            <div class="card-footer">

                <small class="text-muted">
                    <button id="button" type="button" class="btn btn-outline-primary">S'inscrire</button>
                </small>
                <small class="text-muted">
                    <button type="button" class="btn btn-light">Plus d'infos</button>
                </small>

            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/basketball.png" alt="Basket-ball">
            <div class="card-body">
                <h5 class="card-title">Basket-ball 27/12/2019</h5>
                <p class="card-text">Un Match de Basket entre les écoles CESI et Paul Bocuse !</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">
                    <button type="button" class="btn btn-outline-primary">S'inscrire</button>
                </small>

                <small class="text-muted">
                    <button type="button" class="btn btn-light">Plus d'infos</button>
                </small>

            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/cinema.png" alt="Cinema">
            <div class="card-body">
                <h5 class="card-title">Cinema 28/12/2019</h5>
                <p class="card-text">Une scéance à moitié prix pour le film Avengers : Endgame !</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">
                    <button type="button" class="btn btn-outline-primary">S'inscrire</button>
                </small>

                <small class="text-muted">
                    <button type="button" class="btn btn-light">Plus d'infos</button>
                </small>

            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/petanque.png" alt="Pétanque">
            <div class="card-body">
                <h5 class="card-title">Pétanque 30/12/2019</h5>
                <p class="card-text">Un Match de Pétanque entre les écoles CESI et Emlyon ! </p>
            </div>
            <div class="card-footer">
                <small class="text-muted">
                    <button type="button" class="btn btn-outline-primary">S'inscrire</button>
                </small>
                <small class="text-muted">
                    <button type="button" class="btn btn-light">Plus d'infos</button>
                </small>
            </div>
        </div>
    </div>
</div>
<footer class="page-footer font-small">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-3 mx-auto">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Réseaux Sociaux</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!"><i class="fab fa-facebook-square"> BDE CESI LYON</i></a>
                    </li>
                    <li>
                        <a href="#!"><i class="fab fa-instagram"> BDE CESI LYON</i></a>
                    </li>
                    <li>
                        <a href="#!"><i class="fab fa-twitter-square"> BDE CESI LYON</i></a>
                    </li>

                </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">
            <div class="col-md-3 mx-auto">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Nous contacter</h5>

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

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Mentions légales</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Voir les mentions legales</a>
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
<!-- Footer -->
</body>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token]').attr('content')
        }
    });

    $(".btn-submit").click(function(e) {
        e.preventDefault();

        //var name = $("input[name=name]").val();
        var box = $('');
        var email = $("input[name=email]").val();
        var password = $("input[name=password]").val();

        /* Requete ajax en methodes POST */
        $.ajax({
            type: 'POST',
            url: 'http://localhost:3000/api/user/login',
            data: {/*name:name,*/ email:email, password:password},
            success: (data)=>{
                let parsed = JSON.parse(data);
                console.log(parsed.name);

                $("#placeholder").html(parsed.values.userId);
            }
        });
    });
</script>
</html>
