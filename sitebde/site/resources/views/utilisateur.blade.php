
@extends ('layouts.layout')

@section('contenu')

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
                    <a class="nav-link active" href="Administration.html"><p class="text-dark">Utilisateur</p></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Evenements.html"><p class="text-dark">Evenements</p></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Produits.html"><p class="text-dark">Produits</p></a>
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
                        <th>Prenom</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Campus</th>

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
                                    <li><a href="#">Changer le prénom </a></li>
                                    <li><a href="#">Changer le mail </a></li>
                                    <li><a href="#">Supprimer</a></li>
                                </ul>
                            </div></td>
                        <td>@user</td>
                        <td>Way</td>
                        <td>Paul</td>
                        <td>paul.way@viacesi.fr</td>
                        <td><div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Changer le role
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Utilisateur</a>
                                    <a class="dropdown-item" href="#">Membre BDE</a>
                                    <a class="dropdown-item" href="#">Salarié CESI</a>
                                </div>
                            </div></td>
                        <td><div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Changer le campus
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                    <a class="dropdown-item" href="#">Aix-en-Provence</a>
                                    <a class="dropdown-item" href="#">Angoulême</a>
                                    <a class="dropdown-item" href="#">Arras</a>
                                    <a class="dropdown-item" href="#">Brest</a>
                                    <a class="dropdown-item" href="#">Bordeaux</a>
                                    <a class="dropdown-item" href="#">Caen</a>
                                    <a class="dropdown-item" href="#">Châteauroux</a>
                                    <a class="dropdown-item" href="#">Dijon</a>
                                    <a class="dropdown-item" href="#">Grenoble</a>
                                    <a class="dropdown-item" href="#">La Rochelle</a>
                                    <a class="dropdown-item" href="#">Le Mans</a>
                                    <a class="dropdown-item" href="#">Lille</a>
                                    <a class="dropdown-item" href="#">Lyon</a>
                                    <a class="dropdown-item" href="#">Montpellier</a>
                                    <a class="dropdown-item" href="#">Nancy</a>
                                    <a class="dropdown-item" href="#">Nantes</a>
                                    <a class="dropdown-item" href="#">Nice</a>
                                    <a class="dropdown-item" href="#">Orléans</a>
                                    <a class="dropdown-item" href="#">Pau</a>
                                    <a class="dropdown-item" href="#">Paris Nanterrre</a>
                                    <a class="dropdown-item" href="#">Reims</a>
                                    <a class="dropdown-item" href="#">Rouen</a>
                                    <a class="dropdown-item" href="#">Saint-Nazaire</a>
                                    <a class="dropdown-item" href="#">Strasbourg</a>
                                    <a class="dropdown-item" href="#">Toulouse</a>

                                </div>
                            </div></td>
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



@endsection