<?php
require_once ("./includes/startTemplate.inc.php");
require_once ("./klassen/Bank.inc.php");
require_once ("./klassen/TCPDF/tcpdf.php");



$PHP_SELF = $_SERVER['PHP_SELF'];
$REQUEST_METHOD = $_SERVER['REQUEST_METHOD'];

if ($REQUEST_METHOD != "POST") {
    $smarty->assign('PHP_SELF', $PHP_SELF);
} else {
    $immobilienpreis = $_POST['immobilienpreis'];
    $eigenkapital = $_POST['eigenkapital'];
    $eigenkapitalZuKlein=null;
    
    //echo "Immobilienpreis: $immobilienpreis<br>";
   // echo "Eigenkapital: $eigenkapital<br>";

    DEFINE("MINDEST_EIGENKAPITALQUOTE", 30);

    $eigenkapitalquote=Bank::berechnungEigenkapitalquote($eigenkapital,$immobilienpreis);
    //echo "Eigenkapitalquote: $eigenkapitalquote<br>";

    if ($eigenkapitalquote >= MINDEST_EIGENKAPITALQUOTE) {

        $monatlicheBelastung=Bank::berechnungMonatlichenBelastung($eigenkapital,$immobilienpreis);

        $smarty->assign('immobilienpreis', $immobilienpreis);
        $smarty->assign('eigenkapital', $eigenkapital);
        $smarty->assign('monatlicheBelastung', $monatlicheBelastung);

        //echo "Monatliche Belastung: $monatlicheBelastung<br>";
        
    } else {
        $eigenkapitalZuKlein = 'Die Eigenkapitalquote ist zu gering. Die Bank kann den Immobilienerwerb mit dieser Eigenkapitalquote nicht finanzieren.';
        $smarty->assign('eigenkapitalZuKlein', $eigenkapitalZuKlein);
        $smarty->assign('eigenkapitalquote', $eigenkapitalquote);
        
    }
    
}
$smarty->display('aufgabe10_2.tpl');

?>