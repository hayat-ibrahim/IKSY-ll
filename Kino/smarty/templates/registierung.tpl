{include file="header.tpl"}

<div class="container d-flex justify-content-center align-items-center" style="min-height: 85vh;">
  <div style="background-color: #9F2225; color: white; padding: 2.5rem; border-radius: 1rem; box-shadow: 0 4px 8px rgba(0,0,0,0.1); width: 100%; max-width: 400px;">
        <h2 class="text-center mb-3">Jetzt Registrieren</h2>
        <p class="text-center">Erstelle dein Konto, um das HAR-Kinoerlebnis zu starten.</p>

        {if $formSubmitted}
            {if $success}
                <div class="alert alert-light text-success fw-bold text-center">
                    Registrierung erfolgreich. Du wirst gleich weitergeleitet...
                </div>
                <script>
                    setTimeout(function() {
                        window.location.href = 'verifizierung.php';
                    }, 2000);
                </script>
            {elseif $error}
                <div class="alert alert-warning text-center">{$error}</div>
            {/if}
        {/if}

        <form action="registierung.php" method="post" class="mt-3" id="registerForm" novalidate>
            <div class="mb-3">
                <input type="text" name="vorname" class="form-control" placeholder="Vorname*" required value="{$vorname|default:''}">
                <div class="invalid-feedback"></div>
            </div>
            <div class="mb-3">
                <input type="text" name="nachname" class="form-control" placeholder="Nachname*" required value="{$nachname|default:''}">
                <div class="invalid-feedback"></div>
            </div>
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="E-Mail*" required value="{$email|default:''}">
                <div class="invalid-feedback"></div>
            </div>
            <div class="mb-3">
                <input type="password" name="passwort" class="form-control" placeholder="Passwort*" required>
                <div class="invalid-feedback"></div>
            </div>
            <div class="mb-3">
                <input type="password" name="passwort_wiederholen" class="form-control" placeholder="Passwort wiederholen*" required>
                <div class="invalid-feedback"></div>
            </div>

            <hr class="border-light">

            <button type="submit" class="btn btn-light w-100">Registrieren</button>
        </form>
    </div>
</div>

<script>
document.getElementById('registerForm').addEventListener('submit', function(event) {
    // Felder auslesen
    const vorname = this.vorname.value.trim();
    const nachname = this.nachname.value.trim();
    const email = this.email.value.trim();
    const passwort = this.passwort.value;
    const passwortWiederholen = this.passwort_wiederholen.value;

    // Alle Fehlermeldungen zurücksetzen
    const feedbacks = this.querySelectorAll('.invalid-feedback');
    feedbacks.forEach(fb => fb.textContent = '');
    const inputs = this.querySelectorAll('.form-control');
    inputs.forEach(input => input.classList.remove('is-invalid'));

    let valid = true;

    // Vorname prüfen
    if (!vorname) {
        valid = false;
        this.vorname.classList.add('is-invalid');
        this.vorname.nextElementSibling.textContent = 'Bitte Vorname eingeben.';
    }

    // Nachname prüfen
    if (!nachname) {
        valid = false;
        this.nachname.classList.add('is-invalid');
        this.nachname.nextElementSibling.textContent = 'Bitte Nachname eingeben.';
    }

    // E-Mail prüfen: mind. @
    if (!email || email.indexOf('@') === -1) {
        valid = false;
        this.email.classList.add('is-invalid');
        this.email.nextElementSibling.textContent = 'Bitte eine gültige E-Mail-Adresse mit @ eingeben.';
    }

    // Passwort mind. 8 Zeichen
    if (passwort.length < 8) {
        valid = false;
        this.passwort.classList.add('is-invalid');
        this.passwort.nextElementSibling.textContent = 'Passwort muss mindestens 8 Zeichen lang sein.';
    }

    // Passwort mind. 1 Sonderzeichen
    if (!/[\W_]/.test(passwort)) {
        valid = false;
        this.passwort.classList.add('is-invalid');
        this.passwort.nextElementSibling.textContent = 'Passwort muss mindestens ein Sonderzeichen enthalten.';
    }

    // Passwörter stimmen überein
    if (passwort !== passwortWiederholen) {
        valid = false;
        this.passwort_wiederholen.classList.add('is-invalid');
        this.passwort_wiederholen.nextElementSibling.textContent = 'Passwörter stimmen nicht überein.';
    }

    if (!valid) {
        event.preventDefault(); // Absenden verhindern
    }
});
</script>

<style>
.invalid-feedback {
    color: white !important;
}
</style>


{include file="footer.tpl"}
