<?php
require_once '../Models/DB.php';
//var_dump($_POST);

// si pas d'équipe choisie et pas d'option de création
if (!isset($_POST['teams']) && !isset($_POST['createTeam']))
    header("Location: ../inscription.php?error=" . MISSING_FIELDS);

$firstname = $_POST['firstname'];
$team = isset($_POST['createTeam'])? $_POST['teamName'] : $_POST['teams'];

DB::savePlayer($firstname, $team);

header("Location: ../index.php?success=1");