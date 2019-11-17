<!-- view produits -->
<!-- Header -->
@extends ('layouts.layout')

@section('contenu')
    <!--
    This page is reserved for the site administrator
    to be able to interact on events or products and even user
    -->
<br>
<br>
<br>
<br>

<div class="container" align="center">
    <!-- title -->
    <h4 class="text-uppercase" ><p>Administration</p></h4>

    <!-- option -->
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="/utilisateur"><p class="text-dark">Utilisateur</p></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/evenements"><p class="text-dark">Evenements</p></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/produits"><p class="text-dark">Produits</p></a>
                </li>
            </ul>
        </div>
        <!-- Action -->
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
