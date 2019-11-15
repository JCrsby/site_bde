
@extends ('layouts.layout')

<!--Start Content -->

@section('contenu')

<small class="text-muted"><button type="button" class="btn btn-outline-primary" id="creerProduit">Créer un produit</button>

<h4 class="categorie p-5" align="center">Produits :</h4>
<div class="container">
    <div class="row justify-content">


    <div class="col-md-3 col-9 chercher">
    
                <div class="inline">
                
                    <small class="text-muted mt-auto mb-auto"><button type="button" class="btn btn-outline-primary">Catégories</button></small>
                    <form class="search_bar">
                        <input type="search" class="form-control" id="search" name="search" placeholder="Recherche">
                    </form>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="CheckVetement" id="CheckVetement" class="form-control custom-control-input">
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


        @foreach($products as $product)
        <div class="col-md-3 col-9">
            <div class="card">
                <img class="card-img-top border-bottom-1" src="{{$product->Image}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$product->Nom }}</h5>
                    <p class="card-text">{{$product->Description}}</p>
                    <h5 class="card-title">{{$product->Prix}} €</h5>
                </div>
                <div class="card-footer">
                    <small class="text-muted"><button type="button" class="btn btn-outline-primary">Commander</button></small>
                </div>
            </div>
        </div>
            @endforeach



    </div>
</div>
<br>

@endsection

<!-- End Content -->
