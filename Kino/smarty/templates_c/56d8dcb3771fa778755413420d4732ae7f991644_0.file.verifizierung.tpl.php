<?php
/* Smarty version 4.3.2, created on 2025-06-26 16:05:32
  from '/var/www/html/iksy05/Kino/smarty/templates/verifizierung.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_685d6fccc79192_76501676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56d8dcb3771fa778755413420d4732ae7f991644' => 
    array (
      0 => '/var/www/html/iksy05/Kino/smarty/templates/verifizierung.tpl',
      1 => 1750953899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_685d6fccc79192_76501676 (Smarty_Internal_Template $_smarty_tpl) {
?><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">

<div class="d-flex justify-content-center align-items-center min-vh-100 bg-light">
  <div class="card text-center shadow p-4" style="max-width: 400px; width: 100%;">
    <h5 class="card-title text-danger">Verifizierung</h5>
    
    <?php if (!$_smarty_tpl->tpl_vars['erfolgreich']->value) {?>  <!-- Nur anzeigen, wenn nicht erfolgreich verifiziert -->
      <p class="card-text">Bitte rechne die folgende Aufgabe:</p>
      <h4 class="fw-bold"><?php echo $_smarty_tpl->tpl_vars['zahl1']->value;?>
 + <?php echo $_smarty_tpl->tpl_vars['zahl2']->value;?>
 = ?</h4>

      <form method="post">
        <div class="mb-3">
          <input type="text" name="captcha" class="form-control" placeholder="Antwort eingeben" required>
        </div>
        <button type="submit" class="btn btn-danger w-100">Bestätigen</button>
      </form>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['meldung']->value) {?>
      <div class="alert mt-3 <?php if ($_smarty_tpl->tpl_vars['erfolgreich']->value) {?>alert-success<?php } else { ?>alert-warning<?php }?>">
        <?php echo $_smarty_tpl->tpl_vars['meldung']->value;?>

      </div>
      <?php if ($_smarty_tpl->tpl_vars['erfolgreich']->value) {?>
        <?php echo '<script'; ?>
>
          setTimeout(function() {
            window.location.href = "login.php";  // Weiterleitung nach 3 Sekunden
          }, 3000);  // 3 Sekunden Verzögerung
        <?php echo '</script'; ?>
>
      <?php }?>
    <?php }?>

  </div>
</div>
<?php }
}
