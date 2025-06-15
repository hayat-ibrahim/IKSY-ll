<?php
/* Smarty version 4.3.2, created on 2025-06-15 09:09:21
  from '/var/www/html/iksy05/Kino/smarty/templates/warenkorb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_684e8dc1974e50_29501918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23a63064ff23020e9dd982c3ceb9d31ac0952565' => 
    array (
      0 => '/var/www/html/iksy05/Kino/smarty/templates/warenkorb.tpl',
      1 => 1749978464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_684e8dc1974e50_29501918 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
  <div style="background-color: #9F2225; color: white; padding: 2rem; border-radius: 1rem; box-shadow: 0 4px 8px rgba(0,0,0,0.1); width: 550px; height: 500px; display: flex; flex-direction: column; justify-content: space-between;">

    <div style="flex-grow: 1; overflow-y: auto;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tickets']->value, 'ticket');
$_smarty_tpl->tpl_vars['ticket']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ticket']->value) {
$_smarty_tpl->tpl_vars['ticket']->do_else = false;
?>
      <div style="display: flex; gap: 1.5rem; margin-bottom: 2rem;">

        <div style="flex-shrink: 0;">
          <img src="<?php echo $_smarty_tpl->tpl_vars['ticket']->value['bild_url'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['ticket']->value['titel'];?>
" style="width: 250px; height: 330px; object-fit: cover; border-radius: 0.5rem;">
        </div>

        <div style="flex: 1; display: flex; flex-direction: column; justify-content: space-between; padding-left: 1rem;">

          <div>
            <h4 style="margin-top: 2.5rem; font-weight: bold; text-align: center;">
              <?php echo $_smarty_tpl->tpl_vars['ticket']->value['titel'];?>

            </h4>
          </div>

          <div style="text-align: center; margin-top: 3.4rem;">
            <p style="margin: 0.25rem 0;">Datum: <?php echo $_smarty_tpl->tpl_vars['ticket']->value['veroeffentlichungsdatum'];?>
</p>
            <p style="margin: 0.25rem 0;">Uhrzeit: <?php echo $_smarty_tpl->tpl_vars['ticket']->value['uhrzeiten'];?>
</p>
            <p style="margin: 0.25rem 0;">Saal: <?php echo $_smarty_tpl->tpl_vars['ticket']->value['saalnummer'];?>
</p>
            <p style="margin: 0.25rem 0;">Preis: <?php echo (($tmp = $_smarty_tpl->tpl_vars['ticket']->value['ticketPreis'] ?? null)===null||$tmp==='' ? "nicht verfügbar" ?? null : $tmp);?>
 €</p>
          </div>

          <form method="post" action="warenkorb.php" style="margin-top: 0.5rem; text-align: center;">
 			<input type="hidden" name="typUpdate" value="1">
  			<select name="ticket_typ" onchange="this.form.submit()" style="font-size: 0.85rem; border-radius: 0.5rem; padding: 0.25rem 0.5rem;">
		    <option value="Normal" <?php if ($_smarty_tpl->tpl_vars['ticket']->value['typ'] == "Normal") {?>selected<?php }?>>Erwachsener</option>
 		   <option value="Kind unter 12" <?php if ($_smarty_tpl->tpl_vars['ticket']->value['typ'] == "Kind unter 12") {?>selected<?php }?>>Kind unter 12</option>
		  </select>
		 </form>


        </div>

      </div>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

    <a href="buchung.php">
      <button style="background: #f2e3e3; color: black; padding: 1rem; font-weight: bold; border-radius: 1.5rem; cursor: pointer; width: 100%; font-size: 1rem; border: none;">
        zur Kasse
      </button>
    </a>

  </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
