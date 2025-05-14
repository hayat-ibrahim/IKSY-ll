<?php
require_once ("./includes/startTemplate.inc.php");

// Dummy-Daten (später aus DB)
$filme = [
    ['id' => 1, 'titel' => 'Matrix', 'bild_url' => 'imgs/film1.jpg','beschreibung' => 'Ein Hacker entdeckt die wahre Realität.'],
    ['id' => 2, 'titel' => 'Inception', 'bild_url' => 'imgs/film2.jpg', 'Träume innerhalb von Träumen.'],
    ['id' => 3, 'titel' => 'Interstellar', 'bild_url' => 'imgs/film3.jpg', 'beschreibung' => 'Ein Vater reist durch das Universum.'],
    ['id' => 4, 'titel' => 'Avatar', 'bild_url' => 'imgs/film4.jpg','beschreibung' => 'Ein Vater reist durch das Universum.'],
    ['id' => 5, 'titel' => 'The Batman', 'bild_url' => 'imgs/film5.jpg','beschreibung' => 'Ein Vater reist durch das Universum.'],
    ['id' => 5, 'titel' => 'The Batman', 'bild_url' => 'imgs/film5.jpg','beschreibung' => 'Ein Vater reist durch das Universum.'],
    ['id' => 5, 'titel' => 'The Batman', 'bild_url' => 'imgs/film5.jpg','beschreibung' => 'Ein Vater reist durch das Universum.'],
    ['id' => 5, 'titel' => 'The Batman', 'bild_url' => 'imgs/film5.jpg','beschreibung' => 'Ein Vater reist durch das Universum.'],
];

// Film-ID aus URL holen
$filmId = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$film = null;

// Film suchen
foreach ($filme as $f) {
    if ($f['id'] === $filmId) {
        $film = $f;
        break;
    }
}

// Wenn Film nicht gefunden → 404
if (!$film) {
    header("HTTP/1.0 404 Not Found");
    echo "Film nicht gefunden.";
    exit;
}

$smarty->assign('title', $film['titel']);
$smarty->assign('activePage', ''); // Keine aktive Navigation
$smarty->assign('film', $film);
$smarty->display('film_details.tpl');
