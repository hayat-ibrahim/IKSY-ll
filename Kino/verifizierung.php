<?php

require_once ('./includes/startTemplate.inc.php');
require_once ('./klassen/KundenDaten.inc.php');
require_once ('./klassen/Sicherheit.inc.php');

$antwort = trim($_POST['captcha'] ?? '');

if ($antwort === '8') {
    echo "<h2 style='text-align:center; color:green;'>Verifizierung erfolgreich!</h2>";
    echo "<p style='text-align:center;'><a href='Anmeldung.html'>Zur Anmeldung</a></p>";
} else {
    echo "<h2 style='text-align:center; color:red;'> Falsche Antwort. Bitte versuche es erneut.</h2>";
    echo "<p style='text-align:center;'><a href='Verifizierungseite.html'>Zurück</a></p>";
}
$smarty->display('verifizierung.tpl');