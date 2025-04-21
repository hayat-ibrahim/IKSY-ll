<?php /* Smarty version Smarty-3.1.13, created on 2018-05-23 13:19:26
         compiled from "/var/www/html/iksy05/9/smarty/templates/produktFlyer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20645105305b054e3e268161-08680348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '412df893b06d603f8323fd2b5946587e8f7345b7' => 
    array (
      0 => '/var/www/html/iksy05/9/smarty/templates/produktFlyer.tpl',
      1 => 1524038758,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20645105305b054e3e268161-08680348',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PHP_SELF' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b054e3e272b42_80058295',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b054e3e272b42_80058295')) {function content_5b054e3e272b42_80058295($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> Erzeugung eines Flyers</title>
    <link rel="stylesheet" href="../css/formular.css" type="text/css">
</head>
<body>
    <?php if ((isset($_smarty_tpl->tpl_vars['PHP_SELF']->value))){?>
        <form name='euro' action='<?php echo $_smarty_tpl->tpl_vars['PHP_SELF']->value;?>
' method='post'>
            <label for="i_kurs">Kurs</label>
            <input type="number" name="kurs" id="i_kurs" size=12 step="any"><br>
            <input type="submit" name="Button1" value="Abschicken">
        </form>
    <?php }?>
</body>
</html><?php }} ?>