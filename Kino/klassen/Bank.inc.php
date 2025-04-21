<?php 
class Bank
{

//     public static function ekq($eigenkapital, $immobilienpreis)
//     {
//         if ($immobilienpreis > 0) {
//             return $eigenkapital / $immobilienpreis;
//         }
//         return 0; // Vermeidung von Division durch Null
//     }

  
    public static  function berechnungEigenkapitalquote($eigenkapital, $immobilienpreis)
    {
        return (($eigenkapital / $immobilienpreis) * 100);
    }
    
    public static function berechnungMonatlichenBelastung($eigenkapital, $immobilienpreis)
    {
        DEFINE("TILGUNG", "0.01");
        DEFINE("ZINSSATZ", "0.05");
        $kreditbetrag = $immobilienpreis - $eigenkapital;
        $monatlicheBelastung = ($kreditbetrag * (ZINSSATZ + TILGUNG)) / 12;
        return $monatlicheBelastung;
    }
    
}

?>