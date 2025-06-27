<?php
/* Smarty version 4.3.2, created on 2025-06-27 12:56:29
  from '/var/www/html/iksy05/Kino/smarty/templates/buchung.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_685e94fdeec304_78825571',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e2b4c5ff3a5a761fa6fa937c0b928fae0fdca37' => 
    array (
      0 => '/var/www/html/iksy05/Kino/smarty/templates/buchung.tpl',
      1 => 1751028938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_685e94fdeec304_78825571 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 85vh;">
  <div style="background-color: #9F2225; color: white; padding: 2.5rem; border-radius: 1rem; box-shadow: 0 4px 8px rgba(0,0,0,0.1); width: 550px; display: flex; flex-direction: column;">

    <!-- Titel -->
    <h2 style="text-align: center; margin-bottom: 0.5rem;">Ticket buchen</h2>
    <p style="text-align: center; font-size: 1.2rem;"><strong>Gesamtpreis:</strong> <span class="preis"><?php echo $_smarty_tpl->tpl_vars['gesamtpreis']->value;?>
</span></p>

    <form method="post" action="buchung.php" style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
      
      <!-- Zahlungsart -->
      <div class="zahlung" style="margin-top: 1rem;">
        <h3 style="text-align: left; margin-bottom: 0.5rem;">Zahlungsart</h3>
        
        <div class="optionen" style="display: flex; flex-direction: column; gap: 10px;">
          <label style="display: flex; align-items: center; gap: 10px;">
            <input type="radio" name="zahlung" value="PayPal" required>
            <img src="imgs/icons8-paypal-48.png" alt="PayPal" style="width: 32px; height: 32px;">
            <span>Paypal</span>
          </label>

          <label style="display: flex; align-items: center; gap: 10px;">
            <input type="radio" name="zahlung" value="Visa">
            <img src="imgs/icons8-visa-50.png" alt="Visa" style="width: 32px; height: 32px;">
            <span>über Visa</span>
          </label>

          <label style="display: flex; align-items: center; gap: 10px;">
            <input type="radio" name="zahlung" value="Überweisung">
            <img src="imgs/bankuberweisung.png" alt="Überweisung" style="width: 32px; height: 32px;">
            <span>überweisen</span>
          </label>
        </div>
      </div>

      <!-- AGB -->
      <div class="agb" style="margin-top: 1.5rem; font-size: 0.95rem;">
        <label>
          <input type="checkbox" name="agb" required>
          Ich akzeptiere die <a href="#" style="color: white; text-decoration: underline;">AGB</a>
        </label>
      </div>

      <!-- Button -->
      <div style="text-align: center; margin-top: 2rem;">
         <button style="background: #f2e3e3; color: black; padding: 1rem; font-weight: bold; border-radius: 1.5rem; cursor: pointer; width: 100%; font-size: 1rem; border: none;">
        zahlen
      </button>
      </div>

    </form>
  </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
