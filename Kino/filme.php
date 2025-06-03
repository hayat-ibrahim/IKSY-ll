<?php

require_once ('./includes/startTemplate.inc.php');
require_once ('./klassen/FilmeUebersicht.inc.php');
require_once ('./klassen/Sicherheit.inc.php');


$db = DbFunctions::connectWithDatabase(); // <== richtige Verbindung aufbauen

$filme = FilmeUebersicht::holeFilme($db);

// Suchfunktion
$suchbegriff = isset($_GET['suche']) ? trim($_GET['suche']) : '';
$gefilterteFilme = [];

if ($suchbegriff !== '') {
    foreach ($filme as $film) {
        if (stripos($film['titel'], $suchbegriff) !== false) {
            $gefilterteFilme[] = $film;
        }
    }
} else {
    $gefilterteFilme = $filme;
}


// Smarty
$smarty->assign('title', 'Filmübersicht');
$smarty->assign('filme', $gefilterteFilme);
$smarty->assign('suchbegriff', $suchbegriff);
$smarty->assign('activePage', 'filmuebersicht');
$smarty->display('filme.tpl');
?>