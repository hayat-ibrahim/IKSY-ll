<?php
# require_once 'inc/smarty.php';
require_once './includes/startTemplate.inc.php';

$smarty->assign('title', 'Startseite');
$smarty->display('index.tpl');
