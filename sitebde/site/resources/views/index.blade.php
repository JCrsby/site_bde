
@extends ('layouts.layout')

@section('contenu')

<img src="{{asset('img/etudiant_accueil.png')}}" class="img-fluid" alt="Responsive image">
<div class="container">



    <br>
    <h4 class="evenements" align="center">Les événements</h4>

    <div class="card-deck mt-5 mb-5">
        <div class="card">
            <img class="card-img-top border-bottom-1" src="img/volleyball.png" alt="Volley ball">
            <div class="card-body">
                <h5 class="card-title">Volley Ball 23/12/2019 </h5>
                <p class="card-text">Un Match de Volley entre les écoles CESI et Centrale !</p>
            </div>
            <div class="card-footer">

                <small class="text-muted">
                    <button id="button" type="button" class="btn btn-outline-primary">S'inscrire</button>
                </small>
                <small class="text-muted">
                    <button type="button" class="btn btn-light">Plus d'infos</button>
                </small>

            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/basketball.png" alt="Basket-ball">
            <div class="card-body">
                <h5 class="card-title">Basket-ball 27/12/2019</h5>
                <p class="card-text">Un Match de Basket entre les écoles CESI et Paul Bocuse !</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">
                    <button type="button" class="btn btn-outline-primary">S'inscrire</button>
                </small>

                <small class="text-muted">
                    <button type="button" class="btn btn-light">Plus d'infos</button>
                </small>

            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/cinema.png" alt="Cinema">
            <div class="card-body">
                <h5 class="card-title">Cinema 28/12/2019</h5>
                <p class="card-text">Une scéance à moitié prix pour le film Avengers : Endgame !</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">
                    <button type="button" class="btn btn-outline-primary">S'inscrire</button>
                </small>

                <small class="text-muted">
                    <button type="button" class="btn btn-light">Plus d'infos</button>
                </small>

            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/petanque.png" alt="Pétanque">
            <div class="card-body">
                <h5 class="card-title">Pétanque 30/12/2019</h5>
                <p class="card-text">Un Match de Pétanque entre les écoles CESI et Emlyon ! </p>
            </div>
            <div class="card-footer">
                <small class="text-muted">
                    <button type="button" class="btn btn-outline-primary">S'inscrire</button>
                </small>
                <small class="text-muted">
                    <button type="button" class="btn btn-light">Plus d'infos</button>
                </small>
            </div>
        </div>
    </div>
</div>
@endsection