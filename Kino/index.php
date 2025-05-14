<?php
require_once __DIR__ . '/includes/startTemplate.inc.php';

$filme = [
    ['id' => 1, 'titel' => 'Matrix', 'bild_url' => '/Kino/imgs/film1.jpg'],
    ['id' => 2, 'titel' => 'Inception', 'bild_url' => '/Kino/imgs/film2.jpg'],
    ['id' => 3, 'titel' => 'Interstellar', 'bild_url' => '/Kino/imgs/film3.jpg'],
    ['id' => 4, 'titel' => 'Avatar', 'bild_url' => '/Kino/imgs/film4.jpg'],
    ['id' => 5, 'titel' => 'The Batman', 'bild_url' => '/Kino/imgs/film5.jpg'],
    ['id' => 5, 'titel' => 'The Batman', 'bild_url' => '/Kino/imgs/film5.jpg'],
    ['id' => 5, 'titel' => 'The Batman', 'bild_url' => '/Kino/imgs/film5.jpg'],
    ['id' => 5, 'titel' => 'The Batman', 'bild_url' => '/Kino/imgs/film5.jpg'],
];
$smarty->assign('title', 'Startseite');
$smarty->assign('filme', $filme);
$smarty->assign('activePage', 'startseite');
$smarty->display('index.tpl');
