
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
                    <a class="nav-link" href="/utilisateur"><p class="text-dark">Utilisateur</p></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/evenements"><p class="text-dark">Evenements</p></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/produits"><p class="text-dark">Produits</p></a>
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
                        <th>Date</th>
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
                                <ul class="dropdown-cusmenu" role="menu">
                                    <li><a href="#">Changer ID </a></li>
                                    <li><a href="#">Changer le nom </a></li>
                                    <li><a href="#">Changer le bio</a></li>
                                    <li><a href="#">Supprimer</a></li>
                                </ul>
                            </div></td>
                        <td>E01</td>
                        <td>Meet&Greet</td>
                        <td>Content</td>
                        <td>Date</td>
                        <td></td>
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


@endsection