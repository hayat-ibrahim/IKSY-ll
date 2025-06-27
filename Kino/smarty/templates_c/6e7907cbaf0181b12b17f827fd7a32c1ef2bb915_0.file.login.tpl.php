<?php
/* Smarty version 4.3.2, created on 2025-06-17 15:56:15
  from '/var/www/html/iksy05/Kino/smarty/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6851901f33fdd9_38762834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e7907cbaf0181b12b17f827fd7a32c1ef2bb915' => 
    array (
      0 => '/var/www/html/iksy05/Kino/smarty/templates/login.tpl',
      1 => 1750175772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6851901f33fdd9_38762834 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 85vh;">
  <div style="background-color: #9F2225; color: white; padding: 2.5rem; border-radius: 1rem; box-shadow: 0 4px 8px rgba(0,0,0,0.1); width: 100%; max-width: 400px;">
        <h2 class="text-center mb-3">Jetzt anmelden</h2>
     

        <?php if ($_smarty_tpl->tpl_vars['loginSuccess']->value) {?>
            <div class="alert alert-success text-center fw-bold mt-3">
                Login erfolgreich!
            </div>
            <?php if ((isset($_smarty_tpl->tpl_vars['redirectTo']->value))) {?>
                <meta http-equiv="refresh" content="2;url=<?php echo $_smarty_tpl->tpl_vars['redirectTo']->value;?>
">
            <?php }?>
        <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['loginError']->value))) {?>
            <p class="text-center text-warning fw-bold mt-3"><?php echo $_smarty_tpl->tpl_vars['loginError']->value;?>
</p>
        <?php }?>

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

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
