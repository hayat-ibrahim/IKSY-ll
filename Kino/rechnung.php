<?php
$gesamtpreis = $_GET['gesamtpreis'] ?? '0,00 €';
?>

<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <style>

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f8f8f8;
      margin: 0;
      padding: 2rem;
      color: #333;
    }
    .container {
      max-width: 600px;
      margin: 0 auto;
      background: #fff;
      padding: 2rem;
      border-radius: 8px;
      box-shadow: 0 6px 18px rgba(0,0,0,0.1);
    }
    
    header {
      position: relative;
      margin-bottom: 2rem;
      border-bottom: 2px solid #9F2225;
      padding-bottom: 1rem;
      font-size: 5rem;
      text-align: center;
    }
    
    header h1 {
      margin: 0;
      color: #9F2225;
      font-weight: 650;
      font-size: 2rem;
    }
    
    header img {
      position: absolute;
      top: 1px;         
      left: 10px;    
      max-height: 50px; 
    }


    .details {
      margin-bottom: 2rem;
    }
    .details p {
      margin: 0.3rem 0;
      font-size: 1.1rem;
    }
    .details strong {
      color: #9F2225;
    }

    .zahlungshinweise {
      background: #f5f5f5;
      border-left: 6px solid #9F2225;
      padding: 1rem 1.5rem;
      border-radius: 4px;
      font-size: 1rem;
      line-height: 1.5;
      margin-bottom: 2rem;
    }

    footer {
      text-align: center;
      font-size: 0.9rem;
      color: #777;
      border-top: 1px solid #ddd;
      padding-top: 1rem;
    }

    @media (max-width: 640px) {
      body {
        padding: 1rem;
      }
      .container {
        padding: 1.5rem;
      }
    }

  
    @media print {
      button {
        display: none !important;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <header>
      <img src="imgs/Logo.png" alt="HAR Kino Logo" />
      <h1>Rechnung</h1>
    </header>

    <section class="details">
      <p><strong>Gesamtpreis:</strong> <?php echo htmlspecialchars($gesamtpreis); ?></p>
      <p><strong>Rechnungsdatum:</strong> <?php echo date('d.m.Y'); ?></p>
      <p><strong>Kundennummer:</strong> #123456</p>
    </section>

    <section class="zahlungshinweise">
      <p>Bitte überweisen Sie den Gesamtbetrag auf folgendes Konto:</p>
      <p><strong>HAR Kino</strong></p>
      <p>IBAN: DE22 0345 0001 0112 0345 54</p>
      <p>BIC: WERTZUILMN</p>
      <p>Verwendungszweck: Ihre Kundennummer und Rechnungsdatum</p>
    </section>

    <footer>
      <p>Vielen Dank für Ihren Einkauf bei HAR Kino!</p>
      <p>Für Fragen kontaktieren Sie uns unter <a href="mailto:support@harkino.de">support@harkino.de</a></p>
    </footer>
  </div>

  <button onclick="window.print()" style="display: block; margin: 1rem auto 0; padding: 0.8rem 1.2rem; background:#9F2225; color:#fff; border:none; border-radius:5px; cursor:pointer;">
    PDF herunterladen
  </button>
</body>
</html>