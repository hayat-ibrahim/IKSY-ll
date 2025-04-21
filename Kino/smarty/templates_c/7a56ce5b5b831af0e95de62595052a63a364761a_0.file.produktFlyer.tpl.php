<?php
/* Smarty version 3.1.30, created on 2021-09-23 11:08:38
  from "/var/www/html/iksy05/9/smarty/templates/produktFlyer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_614c4416a3b986_89282367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a56ce5b5b831af0e95de62595052a63a364761a' => 
    array (
      0 => '/var/www/html/iksy05/9/smarty/templates/produktFlyer.tpl',
      1 => 1524031558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614c4416a3b986_89282367 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> Erzeugung eines Flyers</title>
    <link rel="stylesheet" href="../css/formular.css" type="text/css">
</head>
<body>
    <?php if ((isset($_smarty_tpl->tpl_vars['PHP_SELF']->value))) {?>
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
