<?php
session_start();

require_once('./includes/startTemplate.inc.php');
require_once('./klassen/FilmeUebersicht.inc.php');
require_once('./klassen/Sicherheit.inc.php');

$db = DbFunctions::connectWithDatabase(); // DB Verbindung

$filme = FilmeUebersicht::holeFilme($db); // Filme von DB abfragen

// Smarty variabeln
$smarty->assign('title', 'Startseite');
$smarty->assign('filme', $filme);
$smarty->assign('activePage', 'startseite'); // Für die navigationsleiste

// Login-Status an das Template übergeben
$smarty->assign('eingeloggt', isset($_SESSION['user']));
$smarty->assign('benutzerEmail', $_SESSION['user'] ?? '');

$smarty->display('index.tpl');
