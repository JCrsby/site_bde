<!DOCTYPE HTML>
<html lang="fr">

<head>

    <title>Ajax Request</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Sitecss/css/bootstrap.min.css">
    <meta name="csrf-token" content="{{csrf_token()}}">

</head>

<body>
<div class="container">
    <h1>Ajax Request</h1>
    <form>
        <div class="form-group">
            <strong>Email:</strong>
            <input type="email" name="email" class="form-control" placeholder="Email" required="">
        </div>

        <div class="form-group">
            <strong>Password:</strong>
            <input type="password" name="password" class="form-control" placeholder="Password" required="">
        </div>

        <div class="form-group">
            <button class="btn btn-success btn-submit">
                Submit
            </button>
        </div>
    </form>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token]').attr('content')
        }
    });

    $(".btn-submit").click(function(e) {
        e.preventDefault();

        var email = $("input[name=email]").val();
        var password = $("input[name=password]").val();

        /* Requete ajax en methodes POST */

        $.ajax({
            type: 'POST',
            url: 'http://localhost:3000/api/user/login',
            data: {email:email, password:password},
            success:  function(data){
                console.log(data);
                return('#bof').html(data);
            },
            error: function(error){
                console.log("Error:");
                console.log(error);
            }
        });
    });

</script>
</html>
