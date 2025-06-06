<?php
/* Smarty version 4.3.2, created on 2025-05-11 13:12:03
  from '/home/runner/workspace/Kino/smarty/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6820a223a2aa47_28880880',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cec95fae1950da1e03a2a75a67686d48afa27c31' => 
    array (
      0 => '/home/runner/workspace/Kino/smarty/templates/index.tpl',
      1 => 1746969054,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6820a223a2aa47_28880880 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body class="m-0">

    <!-- Hero section -->
    <div class="hero-image my-3">
      <div class="hero-text text-white text-center d-flex flex-column align-items-center justify-content-center h-100">
            <h1 class="mb-3">Willkommen im Kinoerlebnis</h1>
            <p class="mb-4">Entdecke aktuelle Blockbuster, zeitlose Klassiker und kommende Highlights</p>
            <a href="/Kino/filme.php" class="btn btn-lg primary-background">Jetzt Filme entdecken</a>
        </div>
    </div>

    <!-- Films section -->
    <!-- Aus Filme eine Liste gemacht (Grid) -->
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4"> <!-- responsive -->
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filme']->value, 'film');
$_smarty_tpl->tpl_vars['film']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['film']->value) {
$_smarty_tpl->tpl_vars['film']->do_else = false;
?>
        <div class="col d-flex justify-content-center">
          <div class="card h-100">
            <img src="<?php echo $_smarty_tpl->tpl_vars['film']->value['bild_url'];?>
" class="card-img-top" alt="<?php echo $_smarty_tpl->tpl_vars['film']->value['titel'];?>
">
            <div class="card-body d-flex flex-column align-items-center ">
              <h3 class="card-title"><?php echo $_smarty_tpl->tpl_vars['film']->value['titel'];?>
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
</body>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
