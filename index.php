<?php
    require_once "globals.inc.php";
    require_once "Models/DB.php";

    $matches = DB::getMatches();
    
    // TODO ajhouter un message de succès après une inscription
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
        <h2>Pong Tournament</h2>

        <div class="container">

            <a href="inscription.php" class="right" style="padding: 2%">inscription</a>

            <table class="responsive-table centered striped">
                <caption style="background: rgba(0, 100, 255, 0.6)">Résultats</caption>

                <thead>
                    <tr>
                        <th>Equipe</th>
                        <th>Résultat</th>
                        <th>Equipe</th>
                    </tr>
                </thead>

                <tbody>
                <?php
                    echo '<tr>';
                    foreach ($matches as $date => $teams) {
                        echo "<td>{$teams[0]}</td>";
                        echo "<td>{$date}</td>";
                        echo "<td>{$teams[1]}</td>";
                    }
                    echo '<tr>';
                ?>
                </tbody>

            </table>

        </div>

        <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
        <!-- Compiled and minified JavaScript Materialize -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    </body>
</html>