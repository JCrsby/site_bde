@extends ('layouts.layout')

@section('contenu')

    <img src="{{asset('img/etudiant_accueil.png')}}" class="img-fluid" alt="Accueil BDE">

    <div class="container">


        <br>
        <h4 class="evenements" align="center">Les événements</h4>
        @foreach($events as $event)
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
        @endforeach

        </div>
        </div>
@endsection
