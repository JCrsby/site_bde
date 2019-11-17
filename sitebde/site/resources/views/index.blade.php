<!-- view main -->
<!-- Header -->
@extends ('layouts.layout')

@section('contenu')
    <!-- Body -->
    <img src="{{asset('img/etudiant_accueil.png')}}" class="img-fluid" alt="Accueil BDE">
    <!-- title -->
    <h4 class="evenements" align="center">Les événements</h4>

    <br>
    <br>


    <div class="container">
        <div class="row justify-content">

            <!-- retrieve and display event information -->
            @foreach($events as $event)
                <div class="col-md-6 col-sm-12 col-lg-3 col-9 mb-5 align-content-sm-center">
                    <div class="card">
                        <img class="card-img-top border-bottom-1" src="{{$event->Image}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$event->Nom}}</h5>
                            <p class="card-text">{{$event->Description}}</p>
                            <h5 class="card-title">{{$event->Prix}} €</h5>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">
                                <form method="POST" action="/inscriptionevent">
                                    <button type="submit" name="inscriptionevent" class=" form-control btn btn-outline-primary">s'inscrire</button>

                                </form>
                                <a class="form-control btn btn-light" href="#">Plus d'infos</a>
                            </small>

                        </div>

                    </div>
                </div>
            @endforeach


        </div>
    </div>
    </div>
@endsection




{{--<div class="card col-lg-3 nopadding">--}}
{{--    <img class="card-img-top" src="img/petanque.png" alt="Pétanque">--}}
{{--    <div class="card-body">--}}
{{--        <h5 class="card-title">Pétanque 30/12/2019</h5>--}}
{{--        <p class="card-text">Un Match de Pétanque entre les écoles CESI et Emlyon ! </p>--}}
{{--    </div>--}}
{{--    <div class="card-footer">--}}
{{--        <small class="text-muted">--}}
{{--            <button type="button" class="btn btn-outline-primary">S'inscrire</button>--}}
{{--        </small>--}}
{{--        <small class="text-muted">--}}
{{--            <button type="button" class="btn btn-light">Plus d'infos</button>--}}
{{--        </small>--}}
{{--    </div>--}}
{{--</div>--}}
