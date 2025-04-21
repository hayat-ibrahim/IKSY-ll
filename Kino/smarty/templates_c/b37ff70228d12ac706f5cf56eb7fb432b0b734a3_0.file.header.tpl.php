<?php
/* Smarty version 4.3.2, created on 2025-04-18 14:24:24
  from '/var/www/html/iksy05/Kino/smarty/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6802609879edb8_34744476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b37ff70228d12ac706f5cf56eb7fb432b0b734a3' => 
    array (
      0 => '/var/www/html/iksy05/Kino/smarty/templates/header.tpl',
      1 => 1744985145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6802609879edb8_34744476 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['title']->value ?? null)===null||$tmp==='' ? "Kino-Startseite" ?? null : $tmp);?>
</title>
<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
	rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php">Kino</a>
			<div>
				<a class="btn btn-outline-light" href="filme.php">Filme</a>
			</div>
		</div>
	</nav>
	<div class="container"><?php }
}
