<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifizierung - HAR</title>
    <link rel="stylesheet" href="Verifizierungsseite.css">
</head>
<body>


    <div class="logo-container">
        <img src="logo.png" alt="HAR Logo">
    </div>

    <div class="container">
        <div class="form-wrapper">
            <h1>Verifizierung erforderlich</h1>
            <p>Um sicherzustellen, dass du kein Bot bist,<br> beantworte bitte die folgende Frage:</p>

            <form action="verifizieren.php" method="post">
                <h2 style="margin-top: 20px;">3 + 5 =</h2>
                <input type="text" name="captcha" placeholder="Antwort eingeben" required style="margin: 20px 0;">
                <button type="submit">Überprüfen</button>
            </form>
        </div>

        <footer class="footer">
            <div class="footer-content">
                HAR – Kinoerlebnis neu erleben
            </div>
        </footer>
    </div>

</body>
</html>