<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Boutique BDE</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <a class="navbar-brand" href="#" ><img src="img/logobde.png" alt="LogoBDE"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link border-left-0 border-right-0  border-bottom-1 border-top-0" href="Index.html" >Accueil</a>
                <a class="nav-item nav-link border-left-0 border-right-0  border-bottom-1 border-top-0 active" href="Boutique.html">Boutique</a>
                <a class="nav-item nav-link border-left-0 border-right-0  border-bottom-1 border-top-0" href="Info.html">A propos</a>
                <a class="nav-item nav-link border-left-0 border-right-0  border-bottom-1 border-top-0" href="Contact.html">Contact</a>
            </div>

        </div>
        <a class="navbar-item  mr-0 collapse navbar-collapse flex-row-reverse navbarNavAltMarkup" href="#">Connexion</a>
    </nav>
</header>

<img class="image_boutique" src="img/boutique.png" width="1919" height="797" alt="Boutique CESI">

<h4 class="categorie p-5" align="center">Nos meilleurs ventes :</h4>

<div class="container">
    <div class="row justify-content">

        <div class="col-md-3 col-9">
            <div class="card">
                <img class="card-img-top border-bottom-1" src="img/casquette.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Casquette Noire BDE</h5>
                    <p class="card-text">Casquette de style Baseball, modèle noire cendre,calotte à empiècements et œillets, Matière principale : 100% coton</p>
                    <h5 class="card-title">15 €</h5>
                </div>
                <div class="card-footer">
                    <small class="text-muted"><button type="button" class="btn btn-outline-primary">Commander</button></small>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-9">
            <div class="card">
                <img class="card-img-top border-bottom-1" src="img/sweat.webp" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Sweat Gris BDE</h5>
                    <p class="card-text">Sweat coloris gris, brodé du logo officiel du BDE, Matière principale : 100% coton.</p>
                    <h5 class="card-title">30 €</h5>
                </div>
                <div class="card-footer">
                    <small class="text-muted"><button type="button" class="btn btn-outline-primary">Commander</button></small>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-9">
            <div class="card">
                <img class="card-img-top border-bottom-1" src="img/casquette.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Casquette Noire BDE</h5>
                    <p class="card-text">Casquette de style Baseball, modèle noire cendre,calotte à empiècements et œillets, Matière principale : 100% coton</p>
                    <h5 class="card-title">15 €</h5>
                </div>
                <div class="card-footer">
                    <small class="text-muted"><button type="button" class="btn btn-outline-primary">Commander</button></small>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-9 chercher">
            <div class="inline">
                <small class="text-muted mt-auto mb-auto"><button type="button" class="btn btn-outline-primary">Catégories</button></small>
                <form class="search_bar">
                    <input type="search" id="search" name="search" placeholder="Recherche">
                </form>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" name="CheckVetement" id="CheckVetement" class="custom-control-input">
                <label class="custom-control-label couleur_text " for="CheckVetement">Vêtements</label><br>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" name="CheckGoodies" id="CheckGoodies" class="custom-control-input">
                <label class="custom-control-label couleur_text" for="CheckGoodies">Goodies</label><br>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" name="CheckAutres" id="CheckAutres" class="custom-control-input">
                <label class="custom-control-label couleur_text" for="CheckAutres">Autres</label>
            </div>
        </div>
    </div>
</div>


<h4 class="categorie p-5" align="center">Vêtements BDE:</h4>

<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-3 col-12">
            <div class="card">
                <img class="card-img-top border-bottom-1" src="img/casquette.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Casquette Noire BDE</h5>
                    <p class="card-text">
                        Casquette de style Baseball, modèle noire cendre,calotte à empiècements et œillets, Matière principale : 100% coton
                    </p>
                    <h5 class="card-title">19 €</h5>
                </div>
                <div class="card-footer">
                    <small class="text-muted"><button type="button" class="btn btn-outline-primary">Commander</button></small>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-12">
            <div class="card">
                <img class="card-img-top border-bottom-1" src="img/sweat_gris.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Sweat Gris BDE</h5>
                    <p class="card-text">Sweat coloris gris, brodé du logo officiel du BDE, Matière principale : 100% coton.</p>
                    <h5 class="card-title">35 €</h5>
                </div>
                <div class="card-footer">
                    <small class="text-muted"><button type="button" class="btn btn-outline-primary">Commander</button></small>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-12">
            <div class="card">
                <img class="card-img-top border-bottom-1" src="img/casquette.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Casquette Noire BDE</h5>
                    <p class="card-text">Casquette de style Baseball, modèle noire cendre,calotte à empiècements et œillets, Matière principale : 100% coton</p>
                    <h5 class="card-title">19 €</h5>
                </div>
                <div class="card-footer">
                    <small class="text-muted"><button type="button" class="btn btn-outline-primary">Commander</button></small>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-12">
            <div class="card">
                <img class="card-img-top border-bottom-1" src="img/casquette.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Casquette Noire BDE</h5>
                    <p class="card-text">Casquette de style Baseball, modèle noire cendre, calotte à empiècements et œillets, Matière principale : 100% coton</p>
                    <h5 class="card-title">19 €</h5>
                </div>
                <div class="card-footer">
                    <small class="text-muted"><button type="button" class="btn btn-outline-primary">Commander</button></small>
                </div>
            </div>
        </div>

    </div>
</div>


<h4 class="categorie mt-5 ml-5" align="center">Goodies BDE :</h4>
<br><br>

<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-3 col-12">
            <div class="card">
                <img class="card-img-top border-bottom-1" src="img/porteclef.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Porte-Clés BDE</h5>
                    <p class="card-text">Ce porte-clés à personnaliser rond en métal est intemporel. Sa finition est polie pour un rendu plus brillant.
                    </p>
                    <h5 class="card-title">3 €</h5>
                </div>
                <div class="card-footer">
                    <small class="text-muted"><button type="button" class="btn btn-outline-primary">Commander</button></small>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-12">
            <div class="card">
                <img class="card-img-top border-bottom-1" src="img/porteclef.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Porte-Clés BDE</h5>
                    <p class="card-text">Ce porte-clés à personnaliser rond en métal est intemporel. Sa finition est polie pour un rendu plus brillant.
                    </p>
                    <h5 class="card-title">3 €</h5>
                </div>
                <div class="card-footer">
                    <small class="text-muted"><button type="button" class="btn btn-outline-primary">Commander</button></small>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-12">
            <div class="card">
                <img class="card-img-top border-bottom-1" src="img/porteclef.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Porte-Clés BDE</h5>
                    <p class="card-text">Ce porte-clés à personnaliser rond en métal est intemporel. Sa finition est polie pour un rendu plus brillant.
                    </p>
                    <h5 class="card-title">3 €</h5>
                </div>
                <div class="card-footer">
                    <small class="text-muted"><button type="button" class="btn btn-outline-primary">Commander</button></small>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-12">
            <div class="card">
                <img class="card-img-top border-bottom-1" src="img/porteclef.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Porte-Clés BDE</h5>
                    <p class="card-text">Ce porte-clés à personnaliser rond en métal est intemporel. Sa finition est polie pour un rendu plus brillant.
                    </p>
                    <h5 class="card-title">3 €</h5>
                </div>
                <div class="card-footer">
                    <small class="text-muted"><button type="button" class="btn btn-outline-primary">Commander</button></small>
                </div>
            </div>
        </div>

    </div>
</div>
<br>


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
<!-- Footer -->
</body>
</html>
