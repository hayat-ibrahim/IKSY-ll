{include file="header.tpl"}

<div class="container d-flex justify-content-center align-items-center" style="min-height: 85vh;">
  <div style="background-color: #9F2225; color: white; padding: 2.5rem; border-radius: 1rem; box-shadow: 0 4px 8px rgba(0,0,0,0.1); width: 100%; max-width: 400px;">
        <h2 class="text-center mb-3">Jetzt Registieren</h2>
        <p class="text-center">Erstelle dein Konto, um das HAR-Kinoerlebnis zu starten.</p>

        {if $formSubmitted}
            {if $success}
                <div class="alert alert-light text-success fw-bold text-center">
                    Registierung erfolgreich. <a href="login.php" class="text-success fw-bold">Jetzt einloggen</a>
                </div>
            {elseif $error}
                <div class="alert alert-warning text-center">{$error}</div>
            {/if}
        {/if}

        <form action="registierung.php" method="post" class="mt-3">
            <div class="mb-3">
                <input type="text" name="vorname" class="form-control" placeholder="Vorname*" required value="">
            </div>
            <div class="mb-3">
                <input type="text" name="nachname" class="form-control" placeholder="Nachname*" required value="">
            </div>
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="E-Mail*" required value=" ">
            </div>
            <div class="mb-3">
                <input type="password" name="passwort" class="form-control" placeholder="Passwort*" required>
            </div>
            <div class="mb-3">
                <input type="password" name="passwort_wiederholen" class="form-control" placeholder="Passwort wiederholen*" required>
            </div>

            <hr class="border-light">

            <button type="submit" class="btn btn-light w-100">Registieren</button>
        </form>
    </div>
</div>

{include file="footer.tpl"}
