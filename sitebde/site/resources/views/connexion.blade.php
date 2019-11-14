
@extends ('layouts.layout')

@section('contenu')

<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#" ><img src="img/logobde.png"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" idp="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link border-left-0 border-right-0  border-bottom-1 border-top-0 active" href="#" >Accueil</a>
            <a class="nav-item nav-link border-left-0 border-right-0  border-bottom-1 border-top-0" href="#">Boutique</a>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-outline-primary mt-2 text">Submit</button>
        </div>
        <p class="change_link text-center mb-0 mt-3">
            <a href="#toregister" class="to_register mr-2"> Mot de passe oublié ?</a><a href="/inscription" class="to_register ml-2">Pas encore inscrit ?</a>
        </p>

    </form>
</div>
<br>
<br>
<br>
<br>

@endsection
