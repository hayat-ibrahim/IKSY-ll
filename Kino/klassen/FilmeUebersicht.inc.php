<?php
require_once('DbFunction.inc.php');



class FilmeUebersicht
{
    // Nur Titel + Bild
    public static function holeFilme($link)
    {
        $query = "SELECT id, titel, bild_link FROM filme";
        return DbFunctions::getAssociativeResultArray($link, $query);
    }
    
    // Titel, Bild + Beschreibung
    public static function holeFilmbeschreibung($link)
    {
        $query = "SELECT id, titel, bild_link, beschreibung FROM filme";
        return DbFunctions::getAssociativeResultArray($link, $query);
    }
 
    public static function holeFilmMitVorstellung($link, int $filmId)
    {
        $query = "
            SELECT f.id, f.titel, f.bild_link, f.ticketPreis, f.dauer,
                   v.datum, v.uhrzeit, v.saalnummer
            FROM filme f
            JOIN vorstellung v ON f.id = v.film_id
            WHERE f.id = " . intval($filmId) . "
            LIMIT 1
        ";
        return DbFunctions::getHashFromFirstRow($link, $query);
    }
    
    public static function filmZuWarenkorbHinzufuegen(&$warenkorb, $link, int $filmId)
    {
        $filmInfos = self::holeFilmMitVorstellung($link, $filmId);
        
        if ($filmInfos) {
            $filmInfos['typ'] = 'Normal';
            
            // Nur ein Ticket erlaubt → alten Inhalt verwerfen
            $warenkorb = [];
            $warenkorb[] = $filmInfos;
            
            return true;
        }
        return false;
    }
    
    
}
?>


