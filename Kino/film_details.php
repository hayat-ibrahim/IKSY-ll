<?php
require_once ('./includes/startTemplate.inc.php');
require_once ('./klassen/FilmeUebersicht.inc.php');
require_once ('./klassen/Sicherheit.inc.php');

// Dummy-Daten (später aus DB)
$db = DbFunctions::connectWithDatabase(); // <== richtige Verbindung aufbauen

$filme = FilmeUebersicht::holeFilme($db);

// Film-ID aus URL holen
$filmId = isset($_GET['id']) ? (int) $_GET['id'] : 0;

$film = null;

// Film suchen
foreach ($filme as $f) {
    if ($f['id'] == $filmId) {
        $film = $f;
        break;
    }
}

// Wenn Film nicht gefunden → 404
if (!$film) {
    header("HTTP/1.0 404 Not Found");
    echo "Film nicht gefunden.";
    exit;
}

$smarty->assign('title', $film['titel']);
$smarty->assign('activePage', ''); // Keine aktive Navigation
$smarty->assign('film', $film);
$smarty->display('film_details.tpl');
