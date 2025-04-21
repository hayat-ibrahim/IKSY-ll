<?php
/* Smarty version 4.3.2, created on 2025-04-16 09:05:57
  from '/var/www/html/iksy05/Kino/smarty/templates/aufgabe10_3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_67ff72f5088629_29474341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd573226a87bf3f93a1138d106e5166ff66359576' => 
    array (
      0 => '/var/www/html/iksy05/Kino/smarty/templates/aufgabe10_3.tpl',
      1 => 1744794308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ff72f5088629_29474341 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> HAR  </title>
    <link rel="stylesheet" href="../css/formular.css" type="text/css">
</head>
<body>
    <h2> HAR </h2>
<?php if (((isset($_smarty_tpl->tpl_vars['PHP_SELF']->value)))) {?>
        <form name='bank2' action='<?php echo $_smarty_tpl->tpl_vars['PHP_SELF']->value;?>
' method='post'>
            <label for="i_eigenkapital">Eigenkapital</label>
            <input type="number" name="eigenkapital" id="i_eigenkapital" size=12><br>
            <label for="i_immobilienpreis">Immobilienpreis</label>
            <input type="number" name="immobilienpreis" size=12><br>
           <label for="i_pdf">PDF?</label>
			<input type="checkbox" name="pdf" value="pdf" id="i_pdf"><br>
 			<input type="submit" name="Button1" value="Abschicken">
        </form>
<?php } else { ?>
         <?php if ((isset($_smarty_tpl->tpl_vars['aus']->value))) {?> 
    Eigenkapitalsquote <?php echo $_smarty_tpl->tpl_vars['aus']->value;?>

    <?php } else { ?>
    <p>Eigenkapital: <?php echo $_smarty_tpl->tpl_vars['eigenkapital']->value;?>
 €</p>
    <p>Immobilienpreis: <?php echo $_smarty_tpl->tpl_vars['immobilienpreis']->value;?>
 €</p>
    <p>Monatliche Belastung: <?php echo $_smarty_tpl->tpl_vars['monatlicheBelastung']->value;?>
 €</p> 
    <p>Ausgaeb: <?php echo $_smarty_tpl->tpl_vars['ausgabe']->value;?>
 </p> 
    
    <?php }
}?>
</body>
</html><?php }
}
