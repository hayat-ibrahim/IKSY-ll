<?php
/* Smarty version 4.2.0, created on 2022-09-06 13:48:29
  from '/var/www/html/iksy05/Vorlesungen/9/smarty/templates/produktFlyer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6317338dd2a2a8_84274478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df6e1220a8aa5f3704954fcfbd48889f42c25e74' => 
    array (
      0 => '/var/www/html/iksy05/Vorlesungen/9/smarty/templates/produktFlyer.tpl',
      1 => 1662455155,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6317338dd2a2a8_84274478 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> Erzeugung eines Flyers</title>
    <link rel="stylesheet" href="../css/formular.css" type="text/css">
</head>
<body>
    <?php if (((isset($_smarty_tpl->tpl_vars['PHP_SELF']->value)))) {?>
        <form name='euro' action='<?php echo $_smarty_tpl->tpl_vars['PHP_SELF']->value;?>
' method='post'>
            <label for="i_kurs">Kurs</label>
            <input type="number" name="kurs" id="i_kurs" size=12 step="any"><br>
            <input type="submit" name="Button1" value="Abschicken">
        </form>
    <?php }?>
</body>
</html><?php }
}
