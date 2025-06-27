<?php
session_start();

require_once('./includes/startTemplate.inc.php');  // Smarty Initialisierung
require_once('./klassen/Sicherheit.inc.php');
require_once ('./klassen/KundenDaten.inc.php');

$link = DbFunctions::connectWithDatabase();

// Datenbankverbindung herstellen

$meldung = '';
$erfolgreich = false;

// Neue Rechenaufgabe generieren
function generiereNeueAufgabe() {
    $_SESSION['zahl1'] = rand(1, 10);
    $_SESSION['zahl2'] = rand(1, 10);
}

// Falls keine Aufgabe existiert, generieren
if (!isset($_SESSION['zahl1']) || !isset($_SESSION['zahl2'])) {
    generiereNeueAufgabe();
}

// Wenn keine Email in Session, kann nicht verifiziert werden
if (!isset($_SESSION['email'])) {
    $meldung = "Keine E-Mail zum Verifizieren gefunden. Bitte erneut registrieren.";
} else {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $antwort = trim($_POST['captcha'] ?? '');
        $korrektesErgebnis = $_SESSION['zahl1'] + $_SESSION['zahl2'];
        
        if (is_numeric($antwort) && (int)$antwort === $korrektesErgebnis) {
            $stmt = mysqli_prepare($link, "UPDATE kunde SET verifiziert = 1 WHERE email = ?");
            if ($stmt) {
                mysqli_stmt_bind_param($stmt, 's', $_SESSION['email']);
                mysqli_stmt_execute($stmt);
                
                if (mysqli_stmt_affected_rows($stmt) > 0) {
                    // Erfolgreiche Verifizierung
                    $erfolgreich = true;
                    $meldung = "Deine E-Mail wurde erfolgreich bestätigt!";
                    
                    // Die Weiterleitung wird später durchgeführt
                    $_SESSION['redirect_to_login'] = true;  // Session setzen für Weiterleitung
                } else {
                    // Detailliertere Fehlerausgabe
                    if (mysqli_error($link)) {
                        $meldung = "Verifizierung fehlgeschlagen. Fehler: " . mysqli_error($link);
                    } else {
                        $meldung = "E-Mail bereits bestätigt oder keine Änderungen erforderlich.";
                    }
                }
                
                mysqli_stmt_close($stmt);
            } else {
                $meldung = "Datenbankfehler: " . mysqli_error($link);
            }
        } else {
            $meldung = "Falsche Antwort. Bitte nocheinmal versuchen!";
            generiereNeueAufgabe();
        }
    }
}

// Smarty Variablen zuweisen
$smarty->assign('meldung', $meldung);
$smarty->assign('erfolgreich', $erfolgreich);
$smarty->assign('zahl1', $_SESSION['zahl1']);
$smarty->assign('zahl2', $_SESSION['zahl2']);

// Template anzeigen
$smarty->display('verifizierung.tpl');

// Lösche die Session-Variablen erst, nachdem das Template angezeigt wurde
if ($erfolgreich) {
    // Die Weiterleitung nach 3 Sekunden Verzögerung
    echo '<script>
            setTimeout(function() {
                window.location.href = "login.php";
            }, 3000); // 3 Sekunden Verzögerung
          </script>';
}
?>
