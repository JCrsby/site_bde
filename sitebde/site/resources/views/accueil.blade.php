<?php setcookie('pseudo', 'M@teo21', time() + 365*24*3600, null, null, false, true); ?>
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
                        <label>Name:</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" required="">
                    </div>

                    <div class="form-group">
                        <strong>Password:</strong>
                        <input type="password" name="password" class="form-control" placeholder="Password" required="">
                    </div>

                    <div class="form-group">
                        <strong>Email:</strong>
                        <input type="email" name="email" class="form-control" placeholder="Email" required="">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success btn-submit">
                            Submit
                        </button>
                    </div>
                    <?php echo $_COOKIE['pseudo']; ?>
                </form>
            </div>
            <div id="placeholder">

            </div>

            <div><h2>Let AJAX change this text</h2></div>

            <button>Change Content</button>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


</html>
