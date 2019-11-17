
@extends ('layouts.layout')

@section('contenu')

<br>
<br>
<br>
<br>

<div class="container" align="center">

    <h4 class="text-uppercase" ><p>Administration</p></h4>


    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="/utilisateur"><p class="text-dark">Utilisateur</p></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/evenements"><p class="text-dark">Evenements</p></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/produits"><p class="text-dark">Produits</p></a>
                </li>
            </ul>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id='userTable'>
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Bio</th>
                        <th>Date</th>
                        <th>Image</th>
                        <th>Prix</th>
                        <th>Validee</th>
                        <th>Id Personne</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><div class="btn-group">
                                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-cusmenu" role="menu">
                                    <li><a href="#">Changer ID </a></li>
                                    <li><a href="#">Changer le nom </a></li>
                                    <li><a href="#">Changer le bio</a></li>
                                    <li><a href="#">Supprimer</a></li>
                                </ul>
                            </div></td>

                        <!--<td><div class="input-group">
                            <span class="input-group-btn">
                          <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                              <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            </span>
                            <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
                            <span class="input-group-btn">
                          <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                              <span class="glyphicon glyphicon-plus"></span>
                            </button>
                            </span>
                        </div></td> -->
                    </tr>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Script -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --> <!-- jQuery CDN -->


<script type='text/javascript'>
    $(document).ready(function(){

        // Fetch all records

            fetchRecords(0);



                fetchRecords(userid);




    });

    function fetchRecords(id){
        $.ajax({
            url: 'http://localhost:3000/api/event/all',
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
                        var id = string.value[i].id_ACTIVITE;
                        var username = string.value[i].Nom;
                        var name = string.value[i].Description;
                        var email = string.value[i].Date;
                        var img = string.value[i].Image;
                        var prix = string.value[i].Prix;
                        var valide = string.value[i].Validee;
                        var idpers = string.value[i].id_PERSONNE;

                        var tr_str = "<tr>" +
                            "<td align='center'>" + (i+1) + "</td>" +
                            "<td align='center'>" + username + "</td>" +
                            "<td align='center'>" + name + "</td>" +
                            "<td align='center'>" + email + "</td>" +
                            "<td align='center'>" + img + "</td>" +
                            "<td align='center'>" + prix + "</td>" +
                            "<td align='center'>" + valide + "</td>" +
                            "<td align='center'>" + idpers + "</td>" +
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
{{--</body>--}}
{{--<script>--}}

        {{--$.ajax({--}}
            {{--url : 'http://localhost:3000/api/event/all', // La ressource ciblée--}}
            {{--type : 'POST', // Le type de la requête HTTP.--}}
            {{--dataType : JSON,--}}
             {{--function(response){--}}

                 {{--var json1 = JSON.parse(data);--}}
                {{--consol.log(response);--}}
                {{--// $("#recup_users").html(data);--}}
            {{--}--}}
        {{--});--}}


{{--</script>--}}

@endsection
