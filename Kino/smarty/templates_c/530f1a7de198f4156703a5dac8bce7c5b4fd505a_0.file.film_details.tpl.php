<?php
/* Smarty version 4.3.2, created on 2025-06-03 19:32:43
  from '/var/www/html/iksy05/Kino/smarty/templates/film_details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_683f4ddbc98db7_93030558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '530f1a7de198f4156703a5dac8bce7c5b4fd505a' => 
    array (
      0 => '/var/www/html/iksy05/Kino/smarty/templates/film_details.tpl',
      1 => 1748978619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_683f4ddbc98db7_93030558 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="m-2">
  <div class="row mb-5 mr-3">
    <!-- Bild links (1/3) -->
    <div class="col-md-4">
      <img src="<?php echo $_smarty_tpl->tpl_vars['film']->value['bild_link'];?>
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
