<?php
session_start();
if (!isset($_SESSION['auth']) || !$_SESSION['auth'])
    header('Location: ../index.php');
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
<h2>Administration</h2>
<h4>Résultats du jour</h4>

<div class="container">

    <form method="post">

        <div class="row">

            <div class="col s2 push-s2 valign-wrapper">
                <p>NomDeTeam</p>
            </div>
            <div class="input-field col s2 push-s2">
                <input placeholder="Joe" pattern="\d\s\\-\s\d" type="text" class="validate"  />
                <label for="firstname">Score</label>
            </div>
            <div class="col s3 push-s3 valign-wrapper">
                <p>NomDeTeam</p>
            </div>

        </div>
        <div class="row">

            <div class="col s2 push-s2 valign-wrapper">
                <p>NomDeTeam</p>
            </div>
            <div class="input-field col s2 push-s2">
                <input placeholder="Joe" pattern="\d\s\\-\s\d" type="text" class="validate"  />
                <label for="firstname">Score</label>
            </div>
            <div class="col s3 push-s3 valign-wrapper">
                <p>NomDeTeam</p>
            </div>

        </div>
        <div class="row">

            <div class="col s2 push-s2 valign-wrapper">
                <p>NomDeTeam</p>
            </div>
            <div class="input-field col s2 push-s2">
                <input placeholder="Joe" pattern="\d\s\\-\s\d" type="text" class="validate"  />
                <label for="firstname">Score</label>
            </div>
            <div class="col s3 push-s3 valign-wrapper">
                <p>NomDeTeam</p>
            </div>

        </div>
        <div class="row">

            <div class="col s2 push-s2 valign-wrapper">
                <p>NomDeTeam</p>
            </div>
            <div class="input-field col s2 push-s2">
                <input placeholder="Joe" pattern="\d\s\\-\s\d" type="text" class="validate"  />
                <label for="firstname">Score</label>
            </div>
            <div class="col s3 push-s3 valign-wrapper">
                <p>NomDeTeam</p>
            </div>

        </div>
        <div class="row">

            <div class="col s2 push-s2 valign-wrapper">
                <p>NomDeTeam</p>
            </div>
            <div class="input-field col s2 push-s2">
                <input placeholder="Joe" pattern="\d\s\\-\s\d" type="text" class="validate"  />
                <label for="firstname">Score</label>
            </div>
            <div class="col s3 push-s3 valign-wrapper">
                <p>NomDeTeam</p>
            </div>

        </div>
        <div class="row">

            <div class="col s2 push-s2 valign-wrapper">
                <p>NomDeTeam</p>
            </div>
            <div class="input-field col s2 push-s2">
                <input placeholder="Joe" pattern="\d\s\\-\s\d" type="text" class="validate"  />
                <label for="firstname">Score</label>
            </div>
            <div class="col s3 push-s3 valign-wrapper">
                <p>NomDeTeam</p>
            </div>

        </div>

        <div class="row">
            <button class="btn waves-effect waves-light right" type="submit">
                <i class="material-icons left">check_circle</i>
                Enregistrer
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