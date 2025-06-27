<?php
session_start();
require_once('./includes/startTemplate.inc.php');
require_once('./klassen/PreisBerechnung.inc.php');
require_once('./klassen/Sicherheit.inc.php');

// Initialisierung
$warenkorb = $_SESSION['warenkorb'] ?? [];
$nutzerId = $_SESSION['nutzer_id'] ?? null;
$gesamtpreis = (!empty($warenkorb) && is_array($warenkorb)) ? PreisBerechnung::berechneGesamtPreis($warenkorb) : 0.0;
$gesamtpreisString = number_format($gesamtpreis, 2, ',', '') . ' €';

// Formular wurde abgeschickt
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $zahlung = $_POST['zahlung'] ?? '';
    $agb = isset($_POST['agb']);
    
    // Wenn alles korrekt
    if ($agb && $nutzerId && $gesamtpreis > 0) {
        PreisBerechnung::speichereGesamtBuchung($gesamtpreis, $nutzerId, $zahlung);
        
        // Optional: Warenkorb leeren
        unset($_SESSION['warenkorb']);
        
        // Weiterleitung zur Rechnung
        $encodedPreis = urlencode($gesamtpreisString);
        header("Location: rechnung.php?gesamtpreis={$encodedPreis}");
        exit;
    }
    
    // Falls Fehler: Template mit Fehlermeldung anzeigen
    $smarty->assign('bestaetigt', true);
    $smarty->assign('zahlung', $zahlung);
    $smarty->assign('agb', $agb);
}

// Seite anzeigen
$smarty->assign('gesamtpreis', $gesamtpreisString);
$smarty->assign('activePage', 'buchung');
$smarty->display('buchung.tpl');
