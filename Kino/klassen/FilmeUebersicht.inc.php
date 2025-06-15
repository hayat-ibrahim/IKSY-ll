<?php
require_once('DbFunction.inc.php');

class FilmeUebersicht
{
    public static function holeFilme($link)
    {
        $query = "SELECT id, titel, bild_link FROM filme";
        return DbFunctions::getAssociativeResultArray($link, $query);
    }
    
    public static function holeFilmbeschreibung($link)
    {
        $query = "SELECT id, titel, bild_link, beschreibung FROM filme";
        return DbFunctions::getAssociativeResultArray($link, $query);
    }
    
    public static function holeFilmMitId($link, int $filmId)
    {
        $filmId = (int)$filmId;
        $query = "SELECT id, titel, bild_link AS bild_url, veroeffentlichungsdatum, uhrzeiten, saalnummer, ticketPreis
                  FROM filme WHERE id = $filmId LIMIT 1";
        return DbFunctions::getHashFromFirstRow($link, $query);
    }
    
    public static function filmZuWarenkorbHinzufuegen(&$warenkorb, $link, int $filmId)
    {
        // Immer nur EIN Film speichern → Warenkorb überschreiben
        $filmInfos = self::holeFilmMitId($link, $filmId);
        if ($filmInfos) {
            $filmInfos['typ'] = 'Normal'; // Standard-Ticketart
            $warenkorb = $filmInfos;
            return true;
        }
        return false;
    }
}
?>
