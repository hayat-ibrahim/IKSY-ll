<?php
session_start(); // Wichtig: Session starten
require_once ('./includes/startTemplate.inc.php');
require_once ('./klassen/KundenDaten.inc.php');
require_once ('./klassen/Sicherheit.inc.php');

$link = DbFunctions::connectWithDatabase();

$vorname = trim($_POST['vorname'] ?? '');
$nachname = trim($_POST['nachname'] ?? '');
$email = trim($_POST['email'] ?? '');
$passwort = $_POST['passwort'] ?? '';
$passwortWiederholen = $_POST['passwort_wiederholen'] ?? '';

$smarty->assign('formSubmitted', false);
$smarty->assign('error', '');
$smarty->assign('success', false);
$smarty->assign('activePage', 'registrierung');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $smarty->assign('formSubmitted', true);
    
    if (empty($vorname) || empty($nachname) || empty($email) || empty($passwort) || empty($passwortWiederholen)) {
        $smarty->assign('error', 'Bitte füllen Sie alle Felder aus.');
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) || strpos($email, '@') === false) {
        // Zusätzliche Prüfung, dass @ enthalten ist
        $smarty->assign('error', 'Ungültige E-Mail-Adresse. Die E-Mail muss ein @ enthalten.');
    } elseif ($passwort !== $passwortWiederholen) {
        $smarty->assign('error', 'Die Passwörter stimmen nicht überein.');
    } elseif (strlen($passwort) < 8) {
        $smarty->assign('error', 'Das Passwort muss mindestens 8 Zeichen lang sein.');
    } elseif (!preg_match('/[\W_]/', $passwort)) {
        // \W sucht nach Nicht-Wortzeichen (also Sonderzeichen), _ wird extra mitgeprüft
        $smarty->assign('error', 'Das Passwort muss mindestens ein Sonderzeichen enthalten.');
    } else {
        $ergebnis = KundenDaten::speichereKunde($link, $vorname, $nachname, $email, $passwort);
        
        if ($ergebnis === true) {
            $_SESSION['registriert'] = true;
            $_SESSION['email'] = $email;
            $smarty->assign('success', true);
        } else {
            $smarty->assign('error', $ergebnis);
        }
    }
}


$smarty->display('registierung.tpl');
