<?php
require_once "globals.inc.php";
require_once "Models/DB.php";

if (isset($_GET['error'])) {
    switch ($_GET['error']) {
        case MISSING_FIELDS:
            $errMsg = "Veille à bien renseigner tous les champs ;-)";
            break;
        case TEAM_EXISTS:
            $errMsg = "Le nom de ton équipe existe déjà !";
            break;
        default:
            break;
    }
} else {
    $errMsg = '';
}

var_dump(DB::getFreeTeams());
?>

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

        <h3>Inscription</h3>

        <div>
            <?= $errMsg ?>
        </div>

        <div class="container">

            <form method="post" action="controllers/inscription.php" style="margin-top: 5%">

                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Joe" pattern="[A-Za-z]{3,}" id="firstname" name="firstname" type="text" class="validate" required />
                        <label for="firstname">Prénom</label>
                    </div>

                    <div class="input-field col s6">
                        <select id="teams" name="teams" required>
                            <option disabled selected>Equipes incomplètes</option>
                            <option value="Option 1">Option 1</option>
                            <option value="Option 2">Option 2</option>
                            <option value="Option 3">Option 3</option>
                        </select>
                        <label for="teams">Sélectionner une équipe</label>
                    </div>
                </div>

                <div class="row">
                    <p>
                        <label>
                            <input type="checkbox" name="createTeam" id="createTeam" />
                            <span>Créer une nouvelle équipe</span>
                        </label>
                    </p>
                </div>

                <div class="row">
                    <div class="input-field col s12" style="display: none" id="teamName">
                        <input placeholder="Team" name="teamName" type="text" class="validate" maxlength="15" pattern="[A-Za-z0-9]{5,}" disabled />
                        <label for="teamName">Nom d'équipe</label>
                    </div>
                </div>

                <div class="row">
                    <button class="btn waves-effect waves-light right" type="submit">
                        <i class="material-icons left">person_add</i>
                        M'inscrire !
                    </button>
                </div>

            </form>

        </div>

        <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
        <!-- Compiled and minified JavaScript Materialize -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
        <script src="js/compute.js" type="text/javascript"></script>
    </body>
</html>