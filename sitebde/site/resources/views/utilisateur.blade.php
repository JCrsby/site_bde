<!-- view utilisateur -->
<!-- Header -->
@extends ('layouts.layout')

@section('contenu')
    <!--
    This page is reserved for the site administrator
    to be able to interact on events or products and even user
    -->
    <br>
    <br>
    <br>
    <br>

    <div class="container" align="center">
        <!-- title -->
        <h4 class="text-uppercase"><p>Administration</p></h4>

        <!-- option -->
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="/utilisateur"><p class="text-dark">Utilisateur</p></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/evenements"><p class="text-dark">Evenements</p></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/produits"><p class="text-dark">Produits</p></a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <!-- Action -->
                <div class="table-responsive">
                    <table class="table table-bordered" id="userTable">
                        <thead>
                        <tr>

                            <th>ID</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Email</th>
                            <th>Campus</th>
                            <th>ID Roles</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>

                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <script type='text/javascript'>
        $(document).ready(function () {
            // $('#but_fetchall').click(function () {
            //     $.ajax({
            //         url: 'http://localhost:3000/api/product/add',
            //         type: 'post',
            //         success: function (response) {
            //             var form = "<tr>" +
            //                 "<td>" + "</td>" +
            //                 "<td>" + "<input  name=\"name\" class=\"form-control\" required=\"required\" type=\"text\"\n" + "                       placeholder=\"cesiLyon@viacesi.fr\"/>" + "</td>" +
            //                 "<td>" + "<input  name=\"description\" class=\"form-control\" required=\"required\" type=\"text\"\n" + "                       placeholder=\"cesiLyon@viacesi.fr\"/>" + "</td>" +
            //                 "<td>" + "<input  name=\"price\" class=\"form-control\" required=\"required\" type=\"text\"\n" + "                       placeholder=\"cesiLyon@viacesi.fr\"/>" + "</td>" +
            //                 "<td>" + "<input  name=\"img\" class=\"form-control\" required=\"required\" type=\"text\"\n" + "                       placeholder=\"cesiLyon@viacesi.fr\"/>" + "</td>" +
            //                 "<td>" + "<select class=\"custom-select\" name=\"categories\" required>\n" +
            //                 "                <option value=\"1\">Vêtements</option>\n" +
            //                 "                <option value=\"2\">Goodies</option>" + "</select>" + "</td>" +
            //                 "<td> " + "<button type=\"submit\" class=\"btn btn-outline-primary mt-2 text\">Envoyer</button>" + "<td>" +
            //                 "</tr>" ;
            //             $("#userTable tbody").append(form);
            //         }});
            //
            // });
            // Fetch all records

            fetchRecords(0);

        });

        function fetchRecords(id) {
            $.ajax({
                url: 'http://localhost:3000/api/user/all/admin',
                type: 'post',
                dataType: 'JSON',
                success: function (response) {
                    var string = JSON.parse(response);
                    console.log(string.value);


                    var len = string.value.length;
                    $('#userTable tbody').empty(); // Empty <tbody>
                    if (string.value != null) {


                    }
                    console.log(len);


                    for (var i = 0; i < len; i++) {
                        var id = string.value[i].id_PERSONNE;
                        var name = string.value[i].Nom;
                        var firstname = string.value[i].Prenom;
                        var campus = string.value[i].Campus;
                        var email = string.value[i].Adresse_Mail;
                        var password = string.value[i].Mot_De_Passe;
                        var idrole = string.value[i].id_ROLE;

                        var tr_str = "<tr>" +
                            "<td align='center'>" + id + "</td>" +
                            "<td align='center'>" + name + "</td>" +
                            "<td align='center'>" + firstname + "</td>" +
                            "<td align='center'>" + email + "</td>" +
                            "<td align='center'>" + campus + "</td>" +
                            "<td align='center'>" + idrole + "</td>" +
                            "</tr>";

                        $("#userTable tbody").append(tr_str);

                    }
                    if (response['data'] != null) {
                        var tr_str = "<tr>" +
                            "<td align='center'>1</td>" +
                            "<td align='center'>" + response['data'].username + "</td>" +
                            "<td align='center'>" + response['data'].name + "</td>" +
                            "<td align='center'>" + response['data'].email + "</td>" +
                            "</tr>";

                        $("#userTable tbody").append(tr_str);
                    }

                }
            });
        }
    </script>

@endsection
