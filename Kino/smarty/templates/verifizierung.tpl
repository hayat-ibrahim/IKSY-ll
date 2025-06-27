<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">

<div class="d-flex justify-content-center align-items-center min-vh-100 bg-light">
  <div class="card text-center shadow p-4" style="max-width: 400px; width: 100%;">
    <h5 class="card-title text-danger">Verifizierung</h5>
    
    {if !$erfolgreich}  <!-- Nur anzeigen, wenn nicht erfolgreich verifiziert -->
      <p class="card-text">Bitte rechne die folgende Aufgabe:</p>
      <h4 class="fw-bold">{$zahl1} + {$zahl2} = ?</h4>

      <form method="post">
        <div class="mb-3">
          <input type="text" name="captcha" class="form-control" placeholder="Antwort eingeben" required>
        </div>
        <button type="submit" class="btn btn-danger w-100">Bestätigen</button>
      </form>
    {/if}

    {if $meldung}
      <div class="alert mt-3 {if $erfolgreich}alert-success{else}alert-warning{/if}">
        {$meldung}
      </div>
      {if $erfolgreich}
        <script>
          setTimeout(function() {
            window.location.href = "login.php";  // Weiterleitung nach 3 Sekunden
          }, 3000);  // 3 Sekunden Verzögerung
        </script>
      {/if}
    {/if}

  </div>
</div>
