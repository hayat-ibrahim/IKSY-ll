<?php
session_start();
require_once('./includes/startTemplate.inc.php');
require_once('./klassen/Sicherheit.inc.php');
require_once('./klassen/FilmeUebersicht.inc.php');

$link = DbFunctions::connectWithDatabase();

// Initialisiere Warenkorb
if (!isset($_SESSION['warenkorb'])) {
    $_SESSION['warenkorb'] = null;
}

// Film hinzufügen – überschreibt vorherigen
if (isset($_GET['action'], $_GET['id']) && $_GET['action'] === 'add') {
    $filmId = (int) $_GET['id'];
    FilmeUebersicht::filmZuWarenkorbHinzufuegen($_SESSION['warenkorb'], $link, $filmId);
}

// Tickettyp aktualisieren
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['typUpdate'], $_POST['ticket_typ'])) {
    $neuerTyp = $_POST['ticket_typ'];
    if (!empty($_SESSION['warenkorb']) && in_array($neuerTyp, ['Normal', 'Kind unter 12'])) {
        $_SESSION['warenkorb']['typ'] = $neuerTyp;
    }
}


// Übergabe an Smarty
$tickets = [];
if (!empty($_SESSION['warenkorb'])) {
    $tickets[] = $_SESSION['warenkorb'];
}

$smarty->assign('tickets', $tickets);
$smarty->assign('activePage', 'warenkorb');
$smarty->display('warenkorb.tpl');
