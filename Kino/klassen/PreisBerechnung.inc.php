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
            
            if ($typ === 'Kind') {  // ✔️ Korrektur hier
                $preis -= self::KIND_PREIS_ABZUG;
            }
            
            $gesamt += max(0, $preis); // Kein negativer Preis
        }
        
        return $gesamt;
    }
  
    
    
    
    public static function speichereGesamtBuchung(float $gesamtbetrag, int $nutzerId, string $zahlungsart): void
    {
        // Verbindung zur Datenbank herstellen
        $link = DbFunctions::connectWithDatabase();
        if (!$link) {
            error_log("Datenbankverbindung fehlgeschlagen: " . mysqli_connect_error());
            return;
        }
        
        // Kundendaten holen
        $stmt = $link->prepare("SELECT vorname, nachname FROM kunde WHERE id = ?");
        if (!$stmt) {
            error_log("Fehler bei der Vorbereitung der SQL-Anweisung: " . mysqli_error($link));
            return;
        }
        
        $stmt->bind_param("i", $nutzerId);
        if (!$stmt->execute()) {
            error_log("Fehler bei der Ausführung der SQL-Anweisung: " . $stmt->error);
            return;
        }
        
        $result = $stmt->get_result();
        $nutzer = $result->fetch_assoc();
        $stmt->close();
        
        if (!$nutzer) {
            error_log("Fehler: Nutzer-ID $nutzerId nicht gefunden.");
            return;
        }
        
        // Warenkorb prüfen
        if (empty($_SESSION['warenkorb'])) {
            error_log("Fehler: Warenkorb ist leer.");
            return;
        }
        
        $filmTitel = $_SESSION['warenkorb'][0]['titel'] ?? 'Unbekannt';
        
        // Nächste ID manuell bestimmen
        $result = $link->query("SELECT MAX(id) AS max_id FROM buchungen");
        if ($result) {
            $row = $result->fetch_assoc();
            $neueId = ($row['max_id'] ?? 0) + 1;
        } else {
            $neueId = 1;
        }
        
        // Buchung einfügen
        $stmt = $link->prepare("
        INSERT INTO buchungen (id, kunde_id, vorname, nachname, film_titel, gesamtbetrag, buchungsdatum)
        VALUES (?, ?, ?, ?, ?, ?, NOW())
    ");
        
        if (!$stmt) {
            error_log("Fehler bei der Vorbereitung der SQL-Anweisung: " . mysqli_error($link));
            return;
        }
        
        $stmt->bind_param(
            "iisssd",
            $neueId,
            $nutzerId,
            $nutzer['vorname'],
            $nutzer['nachname'],
            $filmTitel,
            $gesamtbetrag
            );
        
        if (!$stmt->execute()) {
            error_log("Fehler beim Ausführen der SQL-Anweisung: " . $stmt->error);
        } else {
            error_log("Buchung erfolgreich in die Datenbank eingefügt");
        }
        
        $stmt->close();
    }
    
    
    
 
}
?>
