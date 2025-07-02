<?php
session_start(); // Session starten, um Benutzerdaten und Warenkorb zu verwalten

// Wenn der Nutzer nicht eingeloggt ist, zur Login-Seite weiterleiten
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

require_once('./includes/startTemplate.inc.php'); // Smarty Template Engine einbinden
require_once('./klassen/Sicherheit.inc.php');      // Sicherheitsfunktionen einbinden
require_once('./klassen/FilmeUebersicht.inc.php'); // Klasse für Filmübersicht einbinden

$link = DbFunctions::connectWithDatabase(); // Verbindung zur Datenbank aufbauen

// Warenkorb in Session als Array initialisieren, falls noch nicht vorhanden oder kein Array
if (!isset($_SESSION['warenkorb']) || !is_array($_SESSION['warenkorb'])) {
    $_SESSION['warenkorb'] = [];
}

// Film zum Warenkorb hinzufügen, wenn in URL action=add und id gesetzt sind
if (isset($_GET['action'], $_GET['id']) && $_GET['action'] === 'add') {
    $filmId = (int) $_GET['id']; // Film-ID aus GET-Parameter holen und in Integer umwandeln
    // Film mit Hilfe der FilmeUebersicht-Klasse zum Warenkorb hinzufügen
    FilmeUebersicht::filmZuWarenkorbHinzufuegen($_SESSION['warenkorb'], $link, $filmId);
}

// Tickettyp-Update via AJAX (POST) verarbeiten
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['typUpdate'], $_POST['ticket_typ'], $_POST['index'])) {
    $neuerTyp = $_POST['ticket_typ'];    // Neuer Tickettyp (Normal oder Kind)
    $index = (int)$_POST['index'];       // Index des Tickets im Warenkorb
    
    // Prüfen, ob der Index im Warenkorb existiert und der Typ gültig ist
    if (isset($_SESSION['warenkorb'][$index]) && in_array($neuerTyp, ['Normal', 'Kind'])) {
        $_SESSION['warenkorb'][$index]['typ'] = $neuerTyp; // Tickettyp im Warenkorb aktualisieren
        
        // Preis berechnen, Kind bekommt 3€ Rabatt
        $preis = $_SESSION['warenkorb'][$index]['ticketPreis'];
        if ($neuerTyp === 'Kind') {
            $preis -= 3;
            if ($preis < 0) $preis = 0; // Preis darf nicht negativ sein
        }
        
        // JSON-Antwort mit formatiertem Preis senden
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode(['preis' => number_format($preis, 2, ',', '.')]);
        exit; // Skript beenden, da Antwort gesendet wurde
    }
}

// Tickets aus dem Warenkorb an das Smarty Template übergeben
$smarty->assign('tickets', $_SESSION['warenkorb']);

// Variable für Login-Status an Smarty übergeben (optional, falls im Template benötigt)
$smarty->assign('isLoggedIn', isset($_SESSION['user']));

// Aktive Seite für Navigation/Styling an Smarty übergeben
$smarty->assign('activePage', 'warenkorb');

// Smarty Template "warenkorb.tpl" anzeigen
$smarty->display('warenkorb.tpl');
?>
