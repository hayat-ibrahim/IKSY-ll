<?php
/* Smarty version 4.3.2, created on 2025-04-16 09:16:41
  from '/var/www/html/iksy05/Kino/smarty/templates/aufgabe10_2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_67ff7579296311_26774832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d64374bf7a1f589f168a08e8c51dff133c6b97e' => 
    array (
      0 => '/var/www/html/iksy05/Kino/smarty/templates/aufgabe10_2.tpl',
      1 => 1744794995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ff7579296311_26774832 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>HAR</title>
    <link rel="stylesheet" href="../css/formular.css" type="text/css">
</head>
<body>
    <h2>HAR </h2>
<?php if (((isset($_smarty_tpl->tpl_vars['PHP_SELF']->value)))) {?>
        <form name='bank2' action='<?php echo $_smarty_tpl->tpl_vars['PHP_SELF']->value;?>
' method='post'>
            <label for="i_name">Name: </label>
            <input type="text" name="name" size=12><br>
            <label for="i_passwort">Passwort: </label>
            <input type="text" name="passwort" id="i_passwort" size=12><br>
            <input type="submit" name="Button1" value="Anmelden">
        </form>
<?php } else { ?>
    <?php if ((isset($_smarty_tpl->tpl_vars['eigenkapitalZuKlein']->value))) {?> 
    Eigenkapitalsquote = <?php echo $_smarty_tpl->tpl_vars['eigenkapitalquote']->value;?>
 %,  <?php echo $_smarty_tpl->tpl_vars['eigenkapitalZuKlein']->value;?>
 
    
    <?php } else { ?>
    <p>Eigenkapital: <?php echo $_smarty_tpl->tpl_vars['eigenkapital']->value;?>
 €</p>
    <p>Immobilienpreis: <?php echo $_smarty_tpl->tpl_vars['immobilienpreis']->value;?>
 €</p>
    <p>Monatliche Belastung: <?php echo $_smarty_tpl->tpl_vars['monatlicheBelastung']->value;?>
 €</p> 
    <?php }
}?>
</body>
</html><?php }
}
