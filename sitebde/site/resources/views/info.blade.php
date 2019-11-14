
@extends ('layouts.layout')

@section('contenu')

<img class="image_etudiant" src="img/etudiant.png" width="1919" height="697" alt="Etudiant Cesi">

<div class="container mt-2">
    <div class="row justify-content">
        <div class="col-md-12 col-12">
            <div class="card-body">
                <h2 class="card-title text-center">Bonjour à Vous !</h2>
                <h3 class="card-subtitle mb-2 text-muted text-center">Si vous êtes ici, c'est que vous voulez en savoir plus sur le BDE/CESI !</h3>
                <p class="card-text text-center">Il faut savoir que nous sommes une association étudiante, élue par des adhérents, nous nous occupons d'organiser les activités extra-scolaires telles que des soirée étudiantes ou les activités le jeudi après-midi.<br>Grace au BDE vous avez assez à une tonne d'évênement !</p><br>
            </div>
        </div>
    </div>
</div>

<p class="text-center"><strong>Voici une petite vidéo de présentation du Cesi Lyon, pour l'occasion</strong></p>

<div class="video-responsive">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/D3-tfUDRa1E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

@endsection
