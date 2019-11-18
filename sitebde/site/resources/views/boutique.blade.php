<!-- view boutique -->
<!-- Header -->
@extends ('layouts.layout')
<!--
    This page shows us the items to sell
    -->
<!--Start Content -->

@section('contenu')


    <h4 class="categorie p-5 text-muted" align="center">Produits :</h4>
    <div class="container">
        <div class="row justify-content">

            <!-- Sort products -->
            <div class="col-md-3 col-9 chercher">

                <div class="inline">

                    <small class="text-muted mt-auto mb-auto">
                        <button type="button" class="btn btn-outline-primary">Rechercher</button>
                    </small>
                    <form class="search_bar">
                        <input type="search" class="form-control" id="search" name="search" placeholder="Recherche">
                    </form>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="CheckVetement" id="CheckVetement"
                           class="form-control custom-control-input">
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

            <!-- Information -->
            @foreach($products as $product)
                <div class="col-md-3 col-9">
                    <div class="card">
                        <img class="card-img-top border-bottom-1" src="{{$product->Image}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$product->Nom }}</h5>
                            <p class="card-text">{{$product->Description}}</p>
                            <h5 class="card-title">{{$product->Prix}} €</h5>
                        </div>
                        <!-- add button -->
                        @if (isset($_COOKIE['token']))
                            @if (strlen($_COOKIE['token']) > 0)
                                <form class="card-footer" action="/addtobascket/{{$product->id_PRODUIT}}" method="POST">
                                    {{csrf_field()}}
                                    <small class="text-muted" >
                                        <button type="submit" class="btn btn-outline-primary form-control">ajouter au
                                            panier<i class="ml-1 fas fa-cart-arrow-down"></i></button>
                                    </small>
                                </form>
                            @else
                                <form class="card-footer" action="/connexion" method="GET">
                                    {{csrf_field()}}
                                    <small class="text-muted">
                                        <button type="submit" class="btn btn-outline-primary form-control">ajouter au
                                            panier<i class="ml-1 fas fa-cart-arrow-down"></i></button>
                                    </small>
                                </form>
                            @endif
                        @else
                            <form class="card-footer"  action="/connexion" method="GET">
                                {{csrf_field()}}
                                <small class="text-muted">
                                    <button type="submit" class="btn btn-outline-primary form-control">ajouter
                                        au panier<i class="ml-1 fas fa-cart-arrow-down"></i></button>
                                </small>
                            </form>
                        @endif

                    </div>
                </div>
            @endforeach


        </div>
    </div>
    <br>

@endsection

<!-- End Content -->
