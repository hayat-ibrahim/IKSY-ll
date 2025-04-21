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
    $pdfAusgabe=isset($_POST['pdf']);
    DEFINE('ENCODING', "UTF-8");
    
    
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
        $ausgabe = "Für $immobilienpreis Euro Immobilienpreis werden bei $eigenkapital Euro Eigenkapital pro Monat $monatlicheBelastung Euro Zinsen fällig!";
        
    } else {
        $eigenkapitalZuKlein = 'Die Eigenkapitalquote ist zu gering. Die Bank kann den Immobilienerwerb mit dieser Eigenkapitalquote nicht finanzieren.';
        $smarty->assign('eigenkapitalZuKlein', $eigenkapitalZuKlein);
        $smarty->assign('eigenkapitalquote', $eigenkapitalquote);
        
        // Ausgabe für PDF oder HTML
        $ausgabe = $eigenkapitalZuKlein;
    }
    // PDF-Ausgabe, wenn gewünscht
    if ($pdfAusgabe) {
        $pdf = new TCPDF();
        $pdf->SetFont('Helvetica', "", 10);
        $pdf->AddPage();
        $pdf->SetXY(15, 30);
        $pdf->Cell(0, 10, mb_convert_encoding($ausgabe, ENCODING), 0, 1);
        $pdf->Output();
        exit();
    } else {
        $smarty->assign('ausgabe', $ausgabe);
    }
}
 
$smarty->display('aufgabe10_3.tpl');

?>