<?php
require_once __DIR__ . '/includes/startTemplate.inc.php';

$smarty->assign('title', 'Startseite');
$smarty->display('index.tpl');
