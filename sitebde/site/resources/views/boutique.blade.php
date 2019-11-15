
@extends ('layouts.layout')

<!--Start Content -->

@section('contenu')


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
                <img class="card-img-top border-bottom-1" src="img/sweat_gris.png" alt="Card image cap">
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

@endsection

<!-- End Content -->
