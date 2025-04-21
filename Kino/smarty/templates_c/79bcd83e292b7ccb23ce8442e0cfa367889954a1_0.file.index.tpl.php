<?php
/* Smarty version 4.3.2, created on 2025-04-18 14:24:24
  from '/var/www/html/iksy05/Kino/smarty/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_680260986c88d3_93300526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79bcd83e292b7ccb23ce8442e0cfa367889954a1' => 
    array (
      0 => '/var/www/html/iksy05/Kino/smarty/templates/index.tpl',
      1 => 1744985903,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_680260986c88d3_93300526 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="text-center">Willkommen im Kino!</h1>
<p class="text-center">Hier finden Sie alle aktuellen Filme.</p>
<div class="text-center mt-4">
    <a href="filme.php" class="btn btn-primary">Zur Filmübersicht</a>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
