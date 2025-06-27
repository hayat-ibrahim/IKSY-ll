{include file="header.tpl"}

<div class="container d-flex justify-content-center align-items-center" style="min-height: 85vh;">
  <div style="background-color: #9F2225; color: white; padding: 2.5rem; border-radius: 1rem; box-shadow: 0 4px 8px rgba(0,0,0,0.1); width: 100%; max-width: 400px;">
        <h2 class="text-center mb-3">Jetzt anmelden</h2>
     

        {if $loginSuccess}
            <div class="alert alert-success text-center fw-bold mt-3">
                Login erfolgreich!
            </div>
            {if isset($redirectTo)}
                <meta http-equiv="refresh" content="2;url={$redirectTo}">
            {/if}
        {/if}

        {if isset($loginError)}
            <p class="text-center text-warning fw-bold mt-3">{$loginError}</p>
        {/if}

        <form action="login.php" method="post" class="mt-3">
            <div class="mb-3">
                <input type="email" class="form-control" name="email" placeholder="E-Mail Adresse*" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password" placeholder="Passwort*" required>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="stayLoggedIn" name="stayLoggedIn">
                    <label class="form-check-label" for="stayLoggedIn">Angemeldet bleiben</label>
                </div>
                <a href="#" class="text-white small">Passwort vergessen?</a>
            </div>

            <button type="submit" class="btn btn-light w-100 mb-3">Anmelden</button>
        </form>

        <hr class="border-light">

        <p class="text-center mb-2">Noch kein Konto?</p>
        <a href="registierung.php" class="btn btn-outline-light w-100">Registrieren</a>
    </div>
</div>

{include file="footer.tpl"}
