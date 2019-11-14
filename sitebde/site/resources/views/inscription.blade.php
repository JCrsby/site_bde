
@extends ('layouts.layout')

@section('contenu')

<body>

<div id="register" class="animate form">
    <form  method="POST" action="" autocomplete="on" class="border mb-5 mt-5 mr-auto ml-auto col-4">

        <h4 class="mt-3">Veuillez remplir ce formulaire pour votre inscription</h4>

        <div class="form-group">
            <label>Nom : </label>
            <input name="name" required="required" type="text" placeholder="" class="form-control"/>
        </div>

        <div class="form-group">
            <label>Prenom : </label>
            <input name="username" required="required" type="text" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Campus : </label>

            <select class="custom-select" required>
                <option value="1">Aix-en-Provence</option>
                <option value="2">Angoulême</option>
                <option value="3">Arras</option>
                <option value="4">Brest</option>
                <option value="5">Bordeaux</option>
                <option value="6">Caen</option>
                <option value="7">Châteauroux</option>
                <option value="8">Dijon</option>
                <option value="9">Grenoble</option>
                <option value="10">La Rochelle</option>
                <option value="11">Le Mans</option>
                <option value="12">Lille</option>
                <option value="13">Lyon</option>
                <option value="14">Montpellier</option>
                <option value="15">Nancy</option>
                <option value="16">Nantes</option>
                <option value="17">Nice</option>
                <option value="17">Orléans</option>
                <option value="19">Pau</option>
                <option value="20">Paris Nanterrre</option>
                <option value="21">Reims</option>
                <option value="22">Rouen</option>
                <option value="23">Saint-Nazaire</option>
                <option value="24">Strasbourg</option>
                <option value="25">Toulouse</option>

            </select>
        </div>
        <div class="form-group" action="/inscription" method="post">
            <label>Adresse Mail : </label>
            <input name="email" required="required" type="email" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Mot de passe : </label>
            <input name="password2" required="required" type="password" placeholder="mot de passe" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Confirmation Mot de passe : </label>
            <input name="password2" required="required" type="password" placeholder="mot de passe" class="form-control"/>
        </div>

        <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultChecked2" checked>
                <label class="custom-control-label" for="defaultChecked2">J'ai lu et j'accepte <a href="/politique">la politique de confidentialité</a></label>
              </div>

            <p class="signin button text-center">
                <button type="submit" class="btn btn-outline-primary mt-2 text">Envoyer</button>
            </p>
    </form>
</div>
@endsection
