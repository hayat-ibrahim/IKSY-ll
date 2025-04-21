<?php
/* Smarty version 4.3.2, created on 2024-12-01 15:08:44
  from '/var/www/html/iksy05/uebung10new/smarty/templates/aufgabe10_2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_674c7bfc278ce7_06780322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dae846219393b635d8e6be75c423b3884081f373' => 
    array (
      0 => '/var/www/html/iksy05/uebung10new/smarty/templates/aufgabe10_2.tpl',
      1 => 1733053410,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674c7bfc278ce7_06780322 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Errechnung von Darlehenskonditionen mit der Funktion </title>
    <link rel="stylesheet" href="../css/formular.css" type="text/css">
</head>
<body>
    <h2>die Errechnung von Darlehenskonditionen mit der Funktion </h2>
<?php if (((isset($_smarty_tpl->tpl_vars['PHP_SELF']->value)))) {?>
        <form name='bank2' action='<?php echo $_smarty_tpl->tpl_vars['PHP_SELF']->value;?>
' method='post'>
            <label for="i_immobilienpreis">Immobilienpreis</label>
            <input type="number" name="immobilienpreis" size=12><br>
            <label for="i_eigenkapital">Eigenkapital</label>
            <input type="number" name="eigenkapital" id="i_eigenkapital" size=12><br>
            <input type="submit" name="Button1" value="Abschicken">
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
