<?php
/* Smarty version 3.1.30, created on 2021-09-23 11:08:11
  from "/var/www/html/iksy05/9/smarty/templates/euro3.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_614c43fb464640_76644342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a2b6f1a2604e6866b75de40fbfd0f8a503a04af' => 
    array (
      0 => '/var/www/html/iksy05/9/smarty/templates/euro3.tpl',
      1 => 1524031558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614c43fb464640_76644342 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> Euro-Dollar Umrechnung Teil</title>
    <link rel="stylesheet" href="../css/formular.css" type="text/css">
    <?php echo '<script'; ?>
 type='text/javascript'
            src="./javascript/feldkontrolle.js">
    <?php echo '</script'; ?>
>
    
        <?php echo '<script'; ?>
 type='text/javascript'>
            function teste()
            {
                if(istKeineZahl(document.euro.betrag, "Der Betrag ist keine Zahl!"))
                {
                    return false;
                }
                if(istKeineZahl(document.euro.kurs, "Der Kurs ist keine Zahl!"))
                {
                    return false;
                }
                return true;
            }
        <?php echo '</script'; ?>
>
    
</head>
<body>
    <?php if ((isset($_smarty_tpl->tpl_vars['PHP_SELF']->value))) {?>
        <form name='euro' action='<?php echo $_smarty_tpl->tpl_vars['PHP_SELF']->value;?>
' method='post'>
            <label for="i_kurs">Kurs</label>
            <input type="number" name="kurs" id="i_kurs" size=12 step="any"><br>
            <label for="i_zielwaehrung">Zielwährung</label>
            <input type="text" name="zielwaehrung" id="i_zielwaehrung" size=12><br>
            <label for="i_betrag">Betrag</label>
            <input type="number" name="betrag" id="i_betrag" size=12 step="0.01"><br>
            <input type="submit" name="Button1" onClick="return(teste())" value="Abschicken">
        </form>
    <?php } else { ?>
        <?php if ((isset($_smarty_tpl->tpl_vars['waehrungFehler']->value))) {?>
            Sie haben eine falsche Währung eingegeben!
        <?php } else { ?>
            Der Eingabebetrag <?php echo $_smarty_tpl->tpl_vars['betrag']->value;?>
 entspricht <?php echo $_smarty_tpl->tpl_vars['umrechnungsBetrag']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['zielwaehrung']->value;?>
.
        <?php }?>
    <?php }?>
</body>
</html><?php }
}
