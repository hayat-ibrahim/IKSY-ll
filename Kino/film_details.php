<?php
require_once ('./includes/startTemplate.inc.php');
require_once ('./klassen/FilmeUebersicht.inc.php');
require_once ('./klassen/Sicherheit.inc.php');


$db = DbFunctions::connectWithDatabase(); 

$filme = FilmeUebersicht::holeFilmbeschreibung($db);

$filmId = isset($_GET['id']) ? (int) $_GET['id'] : 0;

$film = null;

foreach ($filme as $f) {
    if ($f['id'] == $filmId) {
        $film = $f;
        break;
    }
}

if (!$film) {
    header("HTTP/1.0 404 Not Found");
    echo "Film nicht gefunden.";
    exit;
}

$smarty->assign('title', $film['titel']);
$smarty->assign('activePage', ''); 
$smarty->assign('film', $film);
$smarty->display('film_details.tpl');
