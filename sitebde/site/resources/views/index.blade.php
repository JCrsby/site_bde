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
                            <h5 class="card-title">{{number_format($event->Prix, 2)}} €</h5>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">
                                @if (isset($_COOKIE['token']))
                                    @if (strlen($_COOKIE['token']) > 0)
                                        <form method="POST" action="/inscriptionevent/{{$event->id_ACTIVITE}}">
                                            {{csrf_field()}}
                                            <button type="submit" name="inscriptionevent"
                                                    class=" form-control btn btn-outline-primary">
                                                @if($event->inscrires == null)
                                                    s'inscrire
                                                @else
                                                    se désinscrire
                                                @endif
                                            </button>
                                        </form>
                                    @else
                                        <form method="GET" action="/connexion">
                                            {{csrf_field()}}
                                            <button type="submit" name="inscriptionevent"
                                                    class=" form-control btn btn-outline-primary">s'inscrire
                                            </button>
                                        </form>
                                    @endif
                                @else
                                    <form method="get" action="/connexion">
                                        {{csrf_field()}}
                                        <button type="submit" name="inscriptionevent"
                                                class=" form-control btn btn-outline-primary">s'inscrire
                                        </button>
                                    </form>
                                @endif
                                <a class="form-control btn btn-light" href="/oneevent/{{$event->id_ACTIVITE}}">Plus d'infos</a>
                            </small>

                        </div>

                    </div>
                </div>
            @endforeach


        </div>
    </div>
@endsection
