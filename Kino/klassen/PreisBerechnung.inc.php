<?php
require_once("DbFunction.inc.php");

class PreisBerechnung
{
    const KIND_PREIS_ABZUG = 3.0;
    
    public static function berechneGesamtPreis(array $warenkorb): float
    {
        $gesamt = 0.0;
        
        foreach ($warenkorb as $ticket) {
            $preis = floatval(str_replace(',', '.', $ticket['ticketPreis'] ?? 0));
            $typ = $ticket['typ'] ?? 'Normal';
            
            if ($typ === 'Kind unter 12') {
                $preis -= self::KIND_PREIS_ABZUG;
            }
            
            $gesamt += max(0, $preis);
        }
        
        return $gesamt;
    }
    
}
?>
