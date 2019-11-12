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
        <a class="navbar-brand" href="/index" ><img src="{{asset('img/logobde.png')}}"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link border-left-0 border-right-0  border-bottom-1 border-top-0" href="/index" >Accueil</a>
                <a class="nav-item nav-link border-left-0 border-right-0  border-bottom-1 border-top-0" href="/boutique">Boutique</a>
                <a class="nav-item nav-link border-left-0 border-right-0  border-bottom-1 border-top-0" href="/info">A propos</a>
                <a class="nav-item nav-link border-left-0 border-right-0  border-bottom-1 border-top-0" href="/contact">Contact</a>
            </div>

        </div>
        <a class="navbar-item  mr-0 collapse navbar-collapse flex-row-reverse " id="navbarNavAltMarkup" href="/connexion">Connexion</a>
    </nav>
</header>

<body>
<br>
<br>


<div id="register" class="animate form">
    <form  method="POST" action="" autocomplete="on" class="border mb-5 mt-5 mr-auto ml-auto col-4">

        <h4 class="mt-3">Veuillez remplir ce formulaire pour votre inscription</h4>

        <div class="form-group">
            <label>Nom : </label>
            <input name="name" required="required" type="text" placeholder="" class="form-control"/>
        </div>

        <div class="form-group">
            <label>Prenom : </label>
            <input name="username" required="required" type="text" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Campus : </label>

            <select class="custom-select" required>
                <option value="1">Aix-en-Provence</option>
                <option value="2">Angoulême</option>
                <option value="3">Arras</option>
                <option value="4">Brest</option>
                <option value="5">Bordeaux</option>
                <option value="6">Caen</option>
                <option value="7">Châteauroux</option>
                <option value="8">Dijon</option>
                <option value="9">Grenoble</option>
                <option value="10">La Rochelle</option>
                <option value="11">Le Mans</option>
                <option value="12">Lille</option>
                <option value="13">Lyon</option>
                <option value="14">Montpellier</option>
                <option value="15">Nancy</option>
                <option value="16">Nantes</option>
                <option value="17">Nice</option>
                <option value="17">Orléans</option>
                <option value="19">Pau</option>
                <option value="20">Paris Nanterrre</option>
                <option value="21">Reims</option>
                <option value="22">Rouen</option>
                <option value="23">Saint-Nazaire</option>
                <option value="24">Strasbourg</option>
                <option value="25">Toulouse</option>

            </select>
        </div>
        <div class="form-group">
            <label>Adresse Mail : </label>
            <input name="email" required="required" type="email" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Mot de passe : </label>
            <input name="password2" required="required" type="password" placeholder="mot de passe" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Confirmation Mot de passe : </label>
            <input name="password2" required="required" type="password" placeholder="mot de passe" class="form-control"/>
        </div>

        <p class="signin button text-center">
            <button type="submit" class="btn btn-outline-primary mt-2 text">Submit</button>
        </p>
        <p class="change_link text-center">
            Déjà inscrit ?
            <a href="/connexion" class="to_register"> Connexion </a>
        </p>
    </form>
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
