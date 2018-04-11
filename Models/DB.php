<?php
if (is_file("../globals.inc.php"))
    require_once "../globals.inc.php";
else
    require_once "./globals.inc.php";

class DB
{
    private static $_DB_Name = __DIR__."\app_database";
    private static $db;

    public static function getFreeTeams() {
        $fp = self::getDatabase("r");
        $freeTeams = array();

        foreach (self::$db as $team)
            if (count($team) < MAX_PLAYER_TEAM)
                $freeTeams[] = key($team);

        self::freeDatabase($fp);

        return $freeTeams;
    }

    public static function savePlayer(string $firstName, string $teamName) {
        $fp = self::getDatabase("c+");

        // Précaution d'usage
        /*
         * Si c'est un nouvelle team, ce sera forcément inférieur au max
         * Si c'est une team existante, si elle est sélectionnée alors c'est qu'elle est incomplète
         */
        if (count(self::$db[$teamName]) < MAX_PLAYER_TEAM)
            self::$db[$teamName][] = $firstName;
        // Cas particulier : si le nom de la "nouvelle" équipe est lemême qu'une équipe existante
        else {
            self::freeDatabase($fp);
            header("Location: ../inscription.php?error=" . TEAM_EXISTS);
        }

        // Réduit la taille du fichier à 0
        ftruncate($fp, 0);
        // remet le pointeur au début du fichier
        rewind($fp);
        // Ecrit dans le fichier
        fwrite($fp, serialize(self::$db));

        self::freeDatabase($fp);
    }

    private static function getDatabase(string $openingOpt) {
        $fp = fopen(self::$_DB_Name, $openingOpt);

        // pose un verrou exclusif
        if (flock($fp, LOCK_EX)) {
            // Lit le fichier
            $content = fread($fp, filesize(self::$_DB_Name));
            self::$db = unserialize($content);
        }

        return $fp;
    }

    private static function freeDatabase($fp) {
        // libère le contenu avant d'enlever le verrou
        fflush($fp);
        // libère le verrou
        flock($fp, LOCK_UN);

        fclose($fp);

        // Pour éviter tous les problèmes on vide la propriété
        self::$db = array();
    }
}