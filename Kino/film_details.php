<?php
require_once ('./includes/startTemplate.inc.php');
require_once ('./klassen/FilmeUebersicht.inc.php');
require_once ('./klassen/Sicherheit.inc.php');


$db = DbFunctions::connectWithDatabase();  // DB Verbindung

$filme = FilmeUebersicht::holeFilmbeschreibung($db); // Filme mit allen Attributen

$filmId = isset($_GET['id']) ? (int) $_GET['id'] : 0; // Pfadparameter

$film = null;

// Film mit id suchen
foreach ($filme as $f) {
    if ($f['id'] == $filmId) {
        $film = $f;
        break;
    }
}

// Wenn kein Film gefunden:
if (!$film) {
    header("HTTP/1.0 404 Not Found");
    echo "Film nicht gefunden.";
    exit;
}

// Smarty variabeln
$smarty->assign('title', $film['titel']);
$smarty->assign('activePage', ''); 
$smarty->assign('film', $film);
$smarty->display('film_details.tpl');
