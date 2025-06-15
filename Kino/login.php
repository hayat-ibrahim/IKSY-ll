<?php
session_start();

require_once('./includes/startTemplate.inc.php');
require_once ('./klassen/Sicherheit.inc.php');
require_once('./klassen/KundenDaten.inc.php');

$smarty->assign('activePage', 'login');

$link = DbFunctions::connectWithDatabase();

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$loginErfolgreich = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kunde = KundenDaten::holeKundeDaten($link, $email);
    
    if ($kunde && password_verify($password, $kunde['passwort'])) {
        $_SESSION['user'] = $kunde['email'];
        $loginErfolgreich = true;
        
        // Erfolgsmeldung anzeigen + automatische Weiterleitung nach 2 Sekunden
        $smarty->assign('redirectTo', 'index.php');
    } else {
        $smarty->assign('loginError', 'Login fehlgeschlagen. Bitte überprüfe deine E-Mail und dein Passwort.');
    }
}

$smarty->assign('loginSuccess', $loginErfolgreich);

$smarty->display('login.tpl');
