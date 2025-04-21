<?php /* Smarty version Smarty-3.1.13, created on 2018-05-30 11:54:30
         compiled from "/var/www/html/iksy05/9/smarty/templates/euro3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1276578285b0e74d67782b8-36392005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '947f29c76592a5316447efa22912243906543ee6' => 
    array (
      0 => '/var/www/html/iksy05/9/smarty/templates/euro3.tpl',
      1 => 1524038758,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1276578285b0e74d67782b8-36392005',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PHP_SELF' => 0,
    'waehrungFehler' => 0,
    'betrag' => 0,
    'umrechnungsBetrag' => 0,
    'zielwaehrung' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b0e74d67dcfc3_04049356',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0e74d67dcfc3_04049356')) {function content_5b0e74d67dcfc3_04049356($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> Euro-Dollar Umrechnung Teil</title>
    <link rel="stylesheet" href="../css/formular.css" type="text/css">
    <script type='text/javascript'
            src="./javascript/feldkontrolle.js">
    </script>
    
        <script type='text/javascript'>
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
        </script>
    
</head>
<body>
    <?php if ((isset($_smarty_tpl->tpl_vars['PHP_SELF']->value))){?>
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
    <?php }else{ ?>
        <?php if ((isset($_smarty_tpl->tpl_vars['waehrungFehler']->value))){?>
            Sie haben eine falsche Währung eingegeben!
        <?php }else{ ?>
            Der Eingabebetrag <?php echo $_smarty_tpl->tpl_vars['betrag']->value;?>
 entspricht <?php echo $_smarty_tpl->tpl_vars['umrechnungsBetrag']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['zielwaehrung']->value;?>
.
        <?php }?>
    <?php }?>
</body>
</html><?php }} ?>