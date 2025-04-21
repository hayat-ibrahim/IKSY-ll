<?php
    //Waehrungsfunktionen.inc.php
    class Waehrungsfunktionen
    {
        public static function rechneUm($zielwaehrung, $betrag, $kurs)
        {
            if (($zielwaehrung=="Dollar") || ($zielwaehrung=="dollar"))
            {
                $ergebnis=$kurs*$betrag;
            }
            elseif (($zielwaehrung=="Euro") || ($zielwaehrung=="euro"))
            {
                $ergebnis=(1/$kurs)*$betrag;
            }
            else
            {
                $ergebnis="Falsche Zielwährung";
            }
            return $ergebnis;
        }
    }

?>