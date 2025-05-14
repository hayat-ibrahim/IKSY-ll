<?php
/* Smarty version 4.3.2, created on 2025-05-11 13:20:21
  from '/home/runner/workspace/Kino/smarty/templates/film_details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6820a4156afcc3_43981522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28ea275830e1dba992265b4aa38e2bc31fbc2718' => 
    array (
      0 => '/home/runner/workspace/Kino/smarty/templates/film_details.tpl',
      1 => 1746969619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6820a4156afcc3_43981522 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="m-2">
  <div class="row mb-5 mr-3">
    <!-- Bild links (1/3) -->
    <div class="col-md-4">
      <img src="<?php echo $_smarty_tpl->tpl_vars['film']->value['bild_url'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['film']->value['titel'];?>
" class="img-fluid rounded shadow" style="object-fit: contain; width: 100%; max-height: 500px;">
    </div>
  
    <!-- Textinhalt rechts (2/3) -->
    <div class="col-md-8 d-flex flex-column justify-content-between">
      <div>
        <h1><?php echo $_smarty_tpl->tpl_vars['film']->value['titel'];?>
</h1>
        <p class="lead"><?php echo $_smarty_tpl->tpl_vars['film']->value['beschreibung'];?>
</p>
      </div>
      <div class="mt-4">
        <a href="filme.php" class="btn btn-secondary">← Zurück zur Übersicht</a>
      </div>
    </div>
  </div>


</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
