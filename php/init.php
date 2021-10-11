<?php

session_start();

setlocale (LC_TIME, 'fr_FR.utf8', 'fr_FR','fra', 'fr');
date_default_timezone_set('Europe/Paris');


try {
    if (getenv('DATABASE_URL') === false) {
        putenv("DATABASE_URL=mysql://root:root@localhost:3306/isen_caas");
    }

    $dbopts = parse_url(getenv('DATABASE_URL'));

    if ($dbopts["scheme"] == "postgres") {
        $dbopts["scheme"] = "pgsql";
    }

    $bdd = new PDO($dbopts["scheme"] .':host='. $dbopts["host"] .';port='. $dbopts["port"] .';dbname='. ltrim($dbopts["path"],'/'), $dbopts["user"], $dbopts["pass"]);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    echo 'Échec lors de la connexion : ' . $e->getMessage();
}
