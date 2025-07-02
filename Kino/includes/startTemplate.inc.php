<?php

$ROOT_DIR = '/var/www/html/iksy05/Kino';

require_once("$ROOT_DIR/klassen/smarty/libs/Smarty.class.php");

$smarty = new Smarty();
$smarty->setTemplateDir("$ROOT_DIR/smarty/templates/");
$smarty->setCompileDir("$ROOT_DIR/smarty/templates_c/");
$smarty->setConfigDir("$ROOT_DIR/smarty/configs/");
$smarty->setCacheDir("$ROOT_DIR/smarty/cache/");

// Session nur starten, wenn noch nicht gestartet
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Login-Status prüfen (zentral)
$isLoggedIn = isset($_SESSION['user']);
$benutzerEmail = $_SESSION['user'] ?? '';

// Smarty-Variablen übergeben – zentral für ALLE Templates
$smarty->assign('isLoggedIn', $isLoggedIn);       
$smarty->assign('eingeloggt', $isLoggedIn);       
$smarty->assign('benutzerEmail', $benutzerEmail); 