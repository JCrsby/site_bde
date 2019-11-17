<!-- view events -->
<!-- Header -->
@extends ('layouts.layout')
<?php
use App\Http\Controllers\EventController;
?>

    <!--
    This page provides information about the events
    -->

@section('contenu')
    <!-- title -->
    <h1 class="evenement p-4" align="center">Les événements</h1>

    <h1 class="evenement p-4" align="center">L'Evenement
        : {{\App\Http\Controllers\EventController::oneEvent(request('idEvent'))->Nom}}</h1>

    <div class="container">
        <!-- Information -->
        <div class="card-deck col-6 col-12 mt-5 mb-5">
            <div class="card">
                {{--                <img class="card-img-top border-bottom-1" src="{{asset('img/volleyball_event.png')}}" alt="Volley ball">--}}
                <div class="card-body">
                    <h5 class="card-title text-center">{{\App\Http\Controllers\EventController::oneEvent(request('idEvent'))->Nom}}</h5>
                    <p class="card-text text-center">{{\App\Http\Controllers\EventController::oneEvent(request('idEvent'))->Description}}</p>
                </div>
                <div class="card-footer">
                    <p class="card-text text-center">
                        Date : {{\App\Http\Controllers\EventController::oneEvent(request('idEvent'))->Date}}
                    </p>
                    <p class="card-text text-center">
                        Prix
                        : {{number_format(\App\Http\Controllers\EventController::oneEvent(request('idEvent'))->Prix, 2)}}
                        €
                    </p>
                </div>
                <!-- User -->
                <div>
                    <div class="form-group p-1 border-bottom-2">
                        @if (isset($_COOKIE['token']))
                            @if (strlen($_COOKIE['token']) > 0)
                                <form class="form-group" method="POST" action="/addcomment/{{request('idEvent')}}">
                                    {{csrf_field()}}
                                    <label for="msg">Commenter</label>
                                    <textarea class="form-control mb-3" id="msg" name="bio" rows="4"
                                              placeholder="Votre commentaire (255 charactere max)"></textarea>
                                    <button type="submit" class="btn btn-outline-primary form-control">
                                        commenter fuck
                                    </button>
                                </form>
                            @else
                                <form class="form-group" method="GET" action="/connexion">
                                    {{csrf_field()}}
                                    <label for="msg">Commenter</label>
                                    <textarea class="form-control mb-3" id="msg" name="bio" rows="4"
                                              placeholder="Votre commentaire (255 charactere max)"></textarea>
                                    <button type="submit" class="btn btn-outline-primary form-control">
                                        commenter test
                                    </button>
                                </form>
                            @endif
                        @else
                            <form class="form-group" method="GET" action="/connexion">
                                {{csrf_field()}}
                                <label for="msg">Commenter</label>
                                <textarea class="form-control mb-3" id="msg" name="bio" rows="4"
                                          placeholder="Votre commentaire (255 charactere max)"></textarea>
                                <button type="submit" class="btn btn-outline-primary form-control">
                                    commenter march
                                </button>
                            </form>
                        @endif
                    </div>
                </div>
                <div>
                    <label>tous les commentaires :</label>
                    @foreach(\App\Http\Controllers\EventController::oneEvent(request('idEvent'))->photos as $photo)
                        <blockquote class="border border-dark rounded pl-1">
                            <label class="border-bottom">
                                {{$photo->Personne->Nom.' '.$photo->Personne->Prenom}}
                            </label>
                            <p>
                                {{$photo->Description}}
                            </p>
                            <p>
                            <span>
                                <a>
                                <i class=" ml-5 fas fa-thumbs-up"></i>
                                </a>
                            </span>
                                <span>
                                <a>
                                <i class="mt-1 ml-3 fas fa-thumbs-down"></i>
                                </a>
                            </span>
                            </p>

                        </blockquote>
                    @endforeach

                </div>
            </div>
        </div>

    </div>

@endsection
