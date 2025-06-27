<?php
/* Smarty version 4.3.2, created on 2025-06-25 17:07:45
  from '/var/www/html/iksy05/Kino/smarty/templates/registierung.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_685c2ce1a76f34_37276185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c2f133639bcceccab94c2edf3b6aca556777309' => 
    array (
      0 => '/var/www/html/iksy05/Kino/smarty/templates/registierung.tpl',
      1 => 1750536864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_685c2ce1a76f34_37276185 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 85vh;">
  <div style="background-color: #9F2225; color: white; padding: 2.5rem; border-radius: 1rem; box-shadow: 0 4px 8px rgba(0,0,0,0.1); width: 100%; max-width: 400px;">
        <h2 class="text-center mb-3">Jetzt Registrieren</h2>
        <p class="text-center">Erstelle dein Konto, um das HAR-Kinoerlebnis zu starten.</p>

        <?php if ($_smarty_tpl->tpl_vars['formSubmitted']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
                <div class="alert alert-light text-success fw-bold text-center">
                    Registrierung erfolgreich. Du wirst gleich weitergeleitet...
                </div>
                <?php echo '<script'; ?>
>
                    setTimeout(function() {
                        window.location.href = 'verifizierung.php';
                    }, 2000);
                <?php echo '</script'; ?>
>
            <?php } elseif ($_smarty_tpl->tpl_vars['error']->value) {?>
                <div class="alert alert-warning text-center"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
            <?php }?>
        <?php }?>

        <form action="registierung.php" method="post" class="mt-3" id="registerForm" novalidate>
            <div class="mb-3">
                <input type="text" name="vorname" class="form-control" placeholder="Vorname*" required value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['vorname']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                <div class="invalid-feedback"></div>
            </div>
            <div class="mb-3">
                <input type="text" name="nachname" class="form-control" placeholder="Nachname*" required value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['nachname']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                <div class="invalid-feedback"></div>
            </div>
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="E-Mail*" required value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['email']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
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

<?php echo '<script'; ?>
>
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
<?php echo '</script'; ?>
>

<style>
.invalid-feedback {
    color: white !important;
}
</style>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
