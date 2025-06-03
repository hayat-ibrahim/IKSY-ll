<?php
require_once('DbFunction.inc.php'); // sicherstellen, dass diese Datei eingebunden ist

class FilmeUebersicht
{
    public static function holeFilme($link)
    {
        $query = "SELECT id, titel, bild_link FROM filme";
//         return DbFunctions::getHash($link, $query);
        return DbFunctions::getAssociativeResultArray($link, $query);
        
    }
    
    
}
?>

    
