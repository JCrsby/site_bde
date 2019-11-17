<!-- view events -->
<!-- Header -->
@extends ('layouts.layout')
    <!--
    This page provides information about the events
    -->

@section('contenu')
    <!-- title -->
    <h1 class="evenement p-4" align="center">Les événements</h1>

    <div class="container">
        <!-- Information -->
        <div class="card-deck col-6 col-12 mt-5 mb-5">
            <div class="card">
                <img class="card-img-top border-bottom-1" src="{{asset('img/volleyball_event.png')}}" alt="Volley ball">
                <div class="card-body">
                    <h5 class="card-title text-center">Volley Ball 23/12/2019 </h5>
                    <p class="card-text text-center">Un Match de Volley entre les écoles CESI et Centrale !</p>
                </div>
                <div class="card-footer">
                    <p class="card-text text-center">Adresse postale de l'événement : 35 Rue du Blabla</p>
                </div>
                <!-- User -->
                <form method="post" action="#">
                    <div class="form-group p-1">
                        <div class="form-group">
                            <label for="pseudo">Pseudo</label>
                            <input type="pseudo" class="form-control" id="pseudo" placeholder="Entrer votre Pseudo">
                        </div>
                        <!-- commentary text -->
                        <div class="form-group">
                            <label for="msg">Commentaire</label>
                            <textarea class="form-control" id="msg" name="user_message" rows="4" placeholder="Votre commentaire"></textarea>
                        </div>
                        <!-- submit button -->
                        <button type="submit" class="btn btn-outline-primary" >Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection
