<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

require_once('./includes/startTemplate.inc.php');
require_once('./klassen/Sicherheit.inc.php');
require_once('./klassen/FilmeUebersicht.inc.php');

$link = DbFunctions::connectWithDatabase();

// Warenkorb als Array initialisieren, falls noch nicht vorhanden
if (!isset($_SESSION['warenkorb']) || !is_array($_SESSION['warenkorb'])) {
    $_SESSION['warenkorb'] = [];
}

// Film hinzufügen
if (isset($_GET['action'], $_GET['id']) && $_GET['action'] === 'add') {
    $filmId = (int) $_GET['id'];
    FilmeUebersicht::filmZuWarenkorbHinzufuegen($_SESSION['warenkorb'], $link, $filmId);
}

// Tickettyp aktualisieren via AJAX (POST)
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['typUpdate'], $_POST['ticket_typ'], $_POST['index'])) {
    $neuerTyp = $_POST['ticket_typ'];
    $index = (int)$_POST['index'];
    
    if (isset($_SESSION['warenkorb'][$index]) && in_array($neuerTyp, ['Normal', 'Kind'])) {
        $_SESSION['warenkorb'][$index]['typ'] = $neuerTyp;
        
        // Preis berechnen (Rabatt Kind -3€)
        $preis = $_SESSION['warenkorb'][$index]['ticketPreis'];
        if ($neuerTyp === 'Kind') {
            $preis -= 3;
            if ($preis < 0) $preis = 0;
        }
        
        // Antwort als JSON zurückgeben
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode(['preis' => number_format($preis, 2, ',', '.')]);
        exit;
    }
}

// Daten an Smarty übergeben
$smarty->assign('tickets', $_SESSION['warenkorb']);

// isLoggedIn setzen (abhängig von deinem Login-System)
$smarty->assign('isLoggedIn', isset($_SESSION['user']));

// Aktive Seite für Menü, falls benötigt
$smarty->assign('activePage', 'warenkorb');

// Template anzeigen
$smarty->display('warenkorb.tpl');
?>
