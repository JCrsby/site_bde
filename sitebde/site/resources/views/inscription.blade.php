
@extends ('layouts.layout')

@section('contenu')

<body>

<div id="register" class="animate form">
    <form  method="POST" autocomplete="on" class="border mb-5 mt-5 mr-auto ml-auto col-4">
        {{csrf_field()}}

        <h4 class="mt-3">Veuillez remplir ce formulaire pour votre inscription</h4>

        <div class="form-group">
            <label>Nom : </label>
            <input name="lastName" required="required" type="text" placeholder="boligatoir" class="form-control"/>
        </div>

        <div class="form-group">
            <label>Prenom : </label>
            <input name="firstName" required="required" type="text" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Campus : </label>

            <select class="custom-select" name="campus" required>
                <option value="Aix-en-Provence">Aix-en-Provence</option>
                <option value="Angoulême">Angoulême</option>
                <option value="Arras">Arras</option>
                <option value="Brest">Brest</option>
                <option value="Bordeaux">Bordeaux</option>
                <option value="Caen">Caen</option>
                <option value="Châteauroux">Châteauroux</option>
                <option value="Dijon">Dijon</option>
                <option value="Grenoble">Grenoble</option>
                <option value="La Rochelle">La Rochelle</option>
                <option value="Le Mans">Le Mans</option>
                <option value="Lille">Lille</option>
                <option value="Lyon">Lyon</option>
                <option value="Montpellier">Montpellier</option>
                <option value="Nancy">Nancy</option>
                <option value="Nantes">Nantes</option>
                <option value="Nice">Nice</option>
                <option value="Orléans">Orléans</option>
                <option value="Pau">Pau</option>
                <option value="Paris Nanterrre">Paris Nanterrre</option>
                <option value="Reims">Reims</option>
                <option value="Rouen">Rouen</option>
                <option value="Saint-Nazaire">Saint-Nazaire</option>
                <option value="Strasbourg">Strasbourg</option>
                <option value="Toulouse">Toulouse</option>

            </select>
        </div>
        <div class="form-group">
            <label>Adresse Mail : </label>
            <input name="email" required="required" type="email" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Mot de passe : </label>
            <input name="password" required="required" type="password" placeholder="mot de passe" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Confirmation Mot de passe : </label>
            <input  required="required" type="password" placeholder="mot de passe" class="form-control"/>
        </div>

        <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" required id="defaultChecked2" >
                <label class="custom-control-label" for="defaultChecked2">J'ai lu et j'accepte <a href="/politique">la politique de confidentialité</a></label>
              </div>

            <p class="signin button text-center">
                <button type="submit" class="btn btn-outline-primary mt-2 text">Envoyer</button>
            </p>
    </form>
</div>
@endsection
