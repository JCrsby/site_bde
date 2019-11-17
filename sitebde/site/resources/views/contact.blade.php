<!-- View contact -->
<!-- Header -->
@extends ('layouts.layout')
    <!--
    This page provides the site contacts
    -->
@section('contenu')
    <!-- Head -->
    <!-- Image top -->
<img class="image_contact" src="img/contact.png" width="1920" height="700" alt="Information Contact CESI">
<br>
<br>
<br>
<br>
    <!-- Information in card-->
<div class="container" align="center">
    <div class="row justify-content">

        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="contact_tittle">Par téléphone</h2>
                    <p class="card-text">Appelez le centre d'appels<br>
                    <p class="card-text">Service disponible de 9h à 12h et de 14h à 17h du lundi au vendredi.</p>
                </div>
                <div class="contact_color"><strong>
                        <p>04 78 25 96 14</p></strong>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="contact_tittle">Écrivez-nous !</h2>
                    <p class="card-text">Une question précise ? Écrivez à CESI, à une école ou à un campus…</p>
                    <p class="card-text">Envoyer vos questions à l'adresse suivante :</p>
                </div>
                <div class="contact_color"><strong>
                        <p>bde.cesi.lyon@viacesi.fr</p></strong>
                </div>
            </div>
        </div>

    </div>
</div>

<br>
<br>
<br>
<br>

@endsection
