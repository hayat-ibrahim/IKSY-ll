<?php
/* Smarty version 4.3.2, created on 2025-07-01 19:56:24
  from '/var/www/html/iksy05/Kino/smarty/templates/filme.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_68643d68d56ed2_81511008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82702274097e51367d4c0262adf269e3c58cbb95' => 
    array (
      0 => '/var/www/html/iksy05/Kino/smarty/templates/filme.tpl',
      1 => 1751399671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_68643d68d56ed2_81511008 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/iksy05/Kino/klassen/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="m-1 d-flex flex-column align-items-center w-100 p-3">
  
  <!-- Suchfeld -->
  <form method="get" action="filme.php" class="mb-4">
    <div class="input-group">
      <input type="text" name="suche" class="form-control" placeholder="Nach Filmtitel suchen..." value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['suchbegriff']->value, ENT_QUOTES, 'UTF-8', true);?>
">
      <button type="submit" class="btn primary-background">Suchen</button>
    </div>
  </form>
  
  <!-- Films section -->
  <!-- Aus Filme eine Liste gemacht (Grid) -->
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4 w-100"> <!-- responsive -->
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filme']->value, 'film');
$_smarty_tpl->tpl_vars['film']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['film']->value) {
$_smarty_tpl->tpl_vars['film']->do_else = false;
?>
      <div class="col d-flex justify-content-center">
        <div class="card h-100 m-2 p-2" style="width: 400px;">
          <img src="./<?php echo $_smarty_tpl->tpl_vars['film']->value['bild_link'];?>
" class="card-img-top" alt="<?php echo $_smarty_tpl->tpl_vars['film']->value['titel'];?>
">
          <div class="card-body d-flex flex-column align-items-center justify-content-between">
            <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['film']->value['titel'];?>
</h5>
            <a href="film_details.php?id=<?php echo $_smarty_tpl->tpl_vars['film']->value['id'];?>
" class="btn btn-md primary-background">Filmdetails</a>
          </div>
        </div>
      </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
  
  <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['filme']->value) == 0) {?>
    <p class="mt-4">Keine Filme gefunden.</p>
  <?php }?>
  
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
