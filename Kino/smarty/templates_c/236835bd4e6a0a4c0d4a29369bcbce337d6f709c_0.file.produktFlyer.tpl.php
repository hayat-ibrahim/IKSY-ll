<?php
/* Smarty version 4.3.2, created on 2024-11-27 13:49:06
  from '/var/www/html/iksy05/10/smarty/templates/produktFlyer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_674723527edaa5_44239062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '236835bd4e6a0a4c0d4a29369bcbce337d6f709c' => 
    array (
      0 => '/var/www/html/iksy05/10/smarty/templates/produktFlyer.tpl',
      1 => 1662451554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674723527edaa5_44239062 (Smarty_Internal_Template $_smarty_tpl) {
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
