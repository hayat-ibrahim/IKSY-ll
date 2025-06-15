<?php

session_start();
require_once('./includes/startTemplate.inc.php');
require_once('./klassen/PreisBerechnung.inc.php');

$warenkorb = $_SESSION['warenkorb'] ?? null;

if ($warenkorb) {
    // Warenkorb ist ein einzelnes Ticket (assoziatives Array)
    // Packe es in ein Array, da Methode ein Array erwartet
    $gesamtpreis = PreisBerechnung::berechneGesamtPreis([$warenkorb]);
} else {
    $gesamtpreis = 0.0;
}

$gesamtpreisString = number_format($gesamtpreis, 2, ',', '') . ' €';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $zahlung = $_POST['zahlung'] ?? 'Keine Auswahl';
    $agb = isset($_POST['agb']);
    
    $smarty->assign('bestaetigt', true);
    $smarty->assign('zahlung', $zahlung);
    $smarty->assign('agb', $agb);
} else {
    $smarty->assign('bestaetigt', false);
}

$smarty->assign('gesamtpreis', $gesamtpreisString);
$smarty->assign('activePage', 'buchung');
$smarty->display('buchung.tpl');


    
