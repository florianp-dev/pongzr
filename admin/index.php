<html>
    <head>
        <title>PongIZR - Say PongIZER</title>

        <!-- Compiled and minified CSS Materialize -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
    <h2>Administration</h2>

    <div class="container" style="padding: 10%;">

        <form method="post">
            <div class="input-field col s2 push-s2">
                <input type="text" id="token" class="validate" required />
                <label for="token">Token de connexion : </label>
            </div>
            <div class="row">
                <p>
                    <label>
                        <input type="checkbox" name="remember" />
                        <span>Se souvenir de moi</span>
                    </label>
                </p>
            </div>
            <div class="row">
                <button class="btn waves-effect waves-light right" type="submit">
                    <i class="material-icons left">settings</i>
                    Administrer
                </button>
            </div>
        </form>

    </div>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
    <!-- Compiled and minified JavaScript Materialize -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    </body>
</html>