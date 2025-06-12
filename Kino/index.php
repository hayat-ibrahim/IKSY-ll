<?php
// require_once __DIR__ . '/includes/startTemplate.inc.php';

require_once ('./includes/startTemplate.inc.php');
require_once ('./klassen/FilmeUebersicht.inc.php');
require_once ('./klassen/Sicherheit.inc.php');

// Dummy-Daten (später aus DB)
// Dummy-Daten (später aus DB)
$db = DbFunctions::connectWithDatabase(); // <== richtige Verbindung aufbauen

$filme = FilmeUebersicht::holeFilme($db);
$smarty->assign('title', 'Startseite');
$smarty->assign('filme', $filme);
$smarty->assign('activePage', 'startseite');
$smarty->display('index.tpl');
