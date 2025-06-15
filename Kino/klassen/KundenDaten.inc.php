<?php
require_once('DbFunction.inc.php');
class KundenDaten
{
    public static function speichereKunde($link, $vorname, $nachname, $email, $passwort)
    {
        // Prüfen, ob E-Mail bereits existiert
        $email = DbFunctions::escape($link, $email);
        $queryCheck = "SELECT id FROM kunde WHERE email = '$email'";
        $result = DbFunctions::executeQuery($link, $queryCheck);
        
        if ($result && mysqli_num_rows($result) > 0) {
            return "E-Mail existiert bereits.";
        }
        
        // Passwort hashen
        $hash = password_hash($passwort, PASSWORD_DEFAULT);
        
        $query = "INSERT INTO kunde (vorname, nachname, email, passwort) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($link, $query);
        mysqli_stmt_bind_param($stmt, "ssss", $vorname, $nachname, $email, $hash);
        $success = mysqli_stmt_execute($stmt);
        
        return $success ? true : "Fehler bei der Registierung.";
    }
    
    
    public static function holeKundeDaten($link, $email) {
        $email = DbFunctions::escape($link, $email);
        $query = "SELECT * FROM kunde WHERE email = '$email'";
        $result = DbFunctions::getAssociativeResultArray($link, $query);
        
        return $result ? $result[0] : null;
    }
}
?>
