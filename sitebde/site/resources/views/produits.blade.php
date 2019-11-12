<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Produits BDE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/e86bc93f0a.js" crossorigin="anonymous"></script>
</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <a class="navbar-brand" href="#" ><img src="img/logobde.png"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link border-left-0 border-right-0  border-bottom-1 border-top-0" href="Index.html" >Accueil</a>
                <a class="nav-item nav-link border-left-0 border-right-0  border-bottom-1 border-top-0" href="Boutique.html">Boutique</a>
                <a class="nav-item nav-link border-left-0 border-right-0  border-bottom-1 border-top-0" href="Info.html">A propos</a>
                <a class="nav-item nav-link border-left-0 border-right-0  border-bottom-1 border-top-0 active" href="Contact.html">Contact</a>
            </div>

        </div>
        <a class="navbar-item  mr-0 collapse navbar-collapse flex-row-reverse " id="navbarNavAltMarkup" href="Connection.html">Connexion</a>
    </nav>
</header>

<br>
<br>
<br>
<br>

<div class="container" align="center">

    <h4 class="text-uppercase" ><p>Administration</p></h4>


    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="Administration.html"><p class="text-dark">Utilisateur</p></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Evenements.html"><p class="text-dark">Evenements</p></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="Produits.html"><p class="text-dark">Produits</p></a>
                </li>
            </ul>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Action</th>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Bio</th>
                        <th>Prix</th>
                        <th>URL</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><div class="btn-group">
                                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Changer ID </a></li>
                                    <li><a href="#">Changer le nom </a></li>
                                    <li><a href="#">Changer le bio</a></li>
                                    <li><a href="#">Supprimer</a></li>
                                </ul>
                            </div></td>
                        <td>P1</td>
                        <td>Casquette</td>
                        <td>Content</td>
                        <td>Prix</td>
                        <td>URL</td>
                        <!--<td><div class="input-group">
                            <span class="input-group-btn">
                          <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                              <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            </span>
                            <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
                            <span class="input-group-btn">
                          <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                              <span class="glyphicon glyphicon-plus"></span>
                            </button>
                            </span>
                        </div></td> -->
                    </tr>
            </div>
            </tbody>

            </table>

        </div>
    </div>
</div>
</div>


<br>
<br>
<br>
<br>
<br>
<br>



<!-- Start Footer -->
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