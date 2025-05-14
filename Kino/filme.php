<?php
require_once ("./includes/startTemplate.inc.php");

$filme = [
    ['id' => 1, 'titel' => 'Matrix', 'bild_url' => 'imgs/film1.jpg'],
    ['id' => 2, 'titel' => 'Inception', 'bild_url' => 'imgs/film2.jpg'],
    ['id' => 3, 'titel' => 'Interstellar', 'bild_url' => 'imgs/film3.jpg'],
    ['id' => 4, 'titel' => 'Avatar', 'bild_url' => 'imgs/film4.jpg'],
    ['id' => 5, 'titel' => 'The Batman', 'bild_url' => 'imgs/film5.jpg'],
    ['id' => 5, 'titel' => 'The Batman', 'bild_url' => 'imgs/film5.jpg'],
    ['id' => 5, 'titel' => 'The Batman', 'bild_url' => 'imgs/film5.jpg'],
    ['id' => 5, 'titel' => 'The Batman', 'bild_url' => 'imgs/film5.jpg'],
];

// Suche anwenden
$suchbegriff = isset($_GET['suche']) ? trim($_GET['suche']) : '';

$gefilterteFilme = [];
if ($suchbegriff !== '') {
    foreach ($filme as $film) {
        if (stripos($film['titel'], $suchbegriff) !== false) {
            $gefilterteFilme[] = $film;
        }
    }
} else {
    $gefilterteFilme = $filme;
}

$smarty->assign('title', 'Filmübersicht');
$smarty->assign('filme', $gefilterteFilme);
$smarty->assign('suchbegriff', $suchbegriff);
$smarty->assign('activePage', 'filmuebersicht');
$smarty->display('filme.tpl');
