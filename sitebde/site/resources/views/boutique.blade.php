
@extends ('layouts.layout')

@section('contenu')

<img class="image_boutique" src="img/boutique.png" width="1919" height="797" alt="Boutique CESI">

<h4 class="categorie p-5" align="center">Produits :</h4>

<div class="container">
    <div class="row justify-content">


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



    </div>
</div>
<br>

@endsection
