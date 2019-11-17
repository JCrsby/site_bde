<!-- view produits -->
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
    <h4 class="text-uppercase" ><p>Administration</p></h4>

    <!-- option -->
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="/utilisateur"><p class="text-dark">Utilisateur</p></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/evenements"><p class="text-dark">Evenements</p></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/produits"><p class="text-dark">Produits</p></a>
                </li>
            </ul>
        </div>
        <!-- Action -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="userTable">
                    <thead>
                    <tr>

                        <th>ID</th>
                        <th>Nom</th>
                        <th>Bio</th>
                        <th>Prix</th>
                        <th>Image</th>
                        <th>id Catégories</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

            </div>
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
        $(document).ready(function(){

            // Fetch all records

            fetchRecords(0);



            fetchRecords(userid);




        });

        function fetchRecords(id){
            $.ajax({
                url: 'http://localhost:3000/api/product/admin',
                type: 'post',
                dataType: 'JSON',
                success: function(response){
                    var string = JSON.parse(response);
                    console.log(string.value);


                    var len = 1;
                    $('#userTable tbody').empty(); // Empty <tbody>
                    if(string.value != null){


                    }
                    console.log(len);


                    for(var i=0; i<len; i++){
                        var id = string.value[i].id_PRODUIT;
                        var name = string.value[i].Nom;
                        var description = string.value[i].Description;
                        var prix = string.value[i].Prix;
                        var img = string.value[i].Image;
                        var idcat = string.value[i].id_CATEGORIE;

                        var tr_str = "<tr>" +
                            "<td align='center'>" + id + "</td>" +
                            "<td align='center'>" + name + "</td>" +
                            "<td align='center'>" + description + "</td>" +
                            "<td align='center'>" + prix + "</td>" +
                            "<td align='center'>" + img + "</td>" +
                            "<td align='center'>" + idcat + "</td>" +
                            "</tr>";

                        $("#userTable tbody").append(tr_str);

                    } if(response['data'] != null){
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
