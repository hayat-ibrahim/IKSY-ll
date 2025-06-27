<?php
/* Smarty version 4.3.2, created on 2025-06-17 20:59:05
  from '/var/www/html/iksy05/Kino/smarty/templates/warenkorb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6851d719df23b8_90136170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23a63064ff23020e9dd982c3ceb9d31ac0952565' => 
    array (
      0 => '/var/www/html/iksy05/Kino/smarty/templates/warenkorb.tpl',
      1 => 1750193935,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6851d719df23b8_90136170 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/iksy05/Kino/klassen/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'/var/www/html/iksy05/Kino/klassen/smarty/libs/plugins/modifier.number_format.php','function'=>'smarty_modifier_number_format',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
  <div style="background-color: #9F2225; color: white; padding: 2rem; border-radius: 1rem; box-shadow: 0 4px 8px rgba(0,0,0,0.1); width: 550px; height: 500px; display: flex; flex-direction: column; justify-content: space-between;">

    <div style="flex-grow: 1; overflow-y: auto;">
    
    <?php if (!smarty_modifier_count($_smarty_tpl->tpl_vars['tickets']->value)) {?>
  <p style="text-align:center; font-size:1.2rem; color:#bbb; margin-top:2rem;">
    Dein Warenkorb ist leer.
  </p>
<?php }?>
    
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tickets']->value, 'ticket', false, 'index');
$_smarty_tpl->tpl_vars['ticket']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['ticket']->value) {
$_smarty_tpl->tpl_vars['ticket']->do_else = false;
?>
        <div class="ticket-container" style="display: flex; gap: 1rem; margin-bottom: 1rem;">
          <div style="flex-shrink: 0;">
            <img src=".<?php echo $_smarty_tpl->tpl_vars['ticket']->value['bild_link'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['ticket']->value['titel'];?>
" style="width: 250px; height: 330px; object-fit: cover; border-radius: 0.5rem;">
          </div>

          <div style="flex: 1; display: flex; flex-direction: column; justify-content: space-between; padding-left: 1rem;">
            <div>
              <h4 style="margin-top: 1rem; font-weight: bold; text-align: center;">
                <?php echo $_smarty_tpl->tpl_vars['ticket']->value['titel'];?>

              </h4>
            </div>

            <div style="text-align: center; margin-top: 1rem;">
              <p style="margin: 0.2rem 0;">Datum: <?php echo $_smarty_tpl->tpl_vars['ticket']->value['datum'];?>
</p>
              <p style="margin: 0.2rem 0;">Uhrzeit: <?php echo $_smarty_tpl->tpl_vars['ticket']->value['uhrzeit'];?>
</p>
              <p style="margin: 0.2rem 0;">Saal: <?php echo $_smarty_tpl->tpl_vars['ticket']->value['saalnummer'];?>
</p>

              <label style="margin-top: 3rem; display: block; font-size: 0.95rem;">
                <input 
                  type="checkbox" 
                  class="kind-checkbox" 
                  data-index="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" 
                  <?php if ($_smarty_tpl->tpl_vars['ticket']->value['typ'] == "Kind") {?>checked<?php }?>>
                Kind unter 12 (3 € Rabatt)
              </label>

              <p class="preis-anzeige" style="margin-top: 0.8rem; font-size: 0.8rem; font-weight: bold; background-color: #f2e3e3; color: #000; padding: 0.5rem; border-radius: 0.5rem;">
                <?php $_smarty_tpl->_assignInScope('preis', $_smarty_tpl->tpl_vars['ticket']->value['ticketPreis']);?>
                <?php if ($_smarty_tpl->tpl_vars['ticket']->value['typ'] == "Kind") {
$_smarty_tpl->_assignInScope('preis', $_smarty_tpl->tpl_vars['ticket']->value['ticketPreis']-3);
}?>
                Bezahlender Betrag: <?php echo smarty_modifier_number_format($_smarty_tpl->tpl_vars['preis']->value,2,",",".");?>
 €
              </p>
            </div>
          </div>
        </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
    </div>
	<button 
 		 id="checkoutBtn" 
 		 style="background: #f2e3e3; color: black; padding: 1rem; font-weight: bold; border-radius: 1.5rem; cursor: pointer; width: 100%; font-size: 1.1rem; border: none;" 
         <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['tickets']->value) == 0) {?>disabled<?php }?>
		>
 		 Zahlen
	</button>


  </div>
</div>


<?php echo '<script'; ?>
>
document.getElementById('checkoutBtn').addEventListener('click', function() {
  // Button ist disabled?
  if (this.disabled) {
    // Nichts tun, weil kein Film ausgewählt
    return;
  }

  // Sonst Weiterleitung zur Buchungsseite
  window.location.href = 'buchung.php'; // Pfad anpassen
});
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
document.querySelectorAll('.kind-checkbox').forEach(checkbox => {
  checkbox.addEventListener('change', function() {
    const index = this.dataset.index;
    const ticket_typ = this.checked ? 'Kind' : 'Normal';

    fetch('warenkorb.php', {  // Hier den Pfad anpassen, falls deine PHP Datei anders heißt
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      body: `typUpdate=1&ticket_typ=${encodeURIComponent(ticket_typ)}&index=${encodeURIComponent(index)}`
    })
    .then(response => response.json())
    .then(data => {
      if (data.preis) {
        const preisAnzeige = this.closest('.ticket-container').querySelector('.preis-anzeige');
        preisAnzeige.textContent = `Bezahlender Betrag: ${data.preis} €`;
      }
    })
    .catch(console.error);
  });
});
<?php echo '</script'; ?>
>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
