<?php
/* Smarty version 4.3.2, created on 2025-07-01 19:38:35
  from '/var/www/html/iksy05/Kino/smarty/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6864393b6cd0c5_38203830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b37ff70228d12ac706f5cf56eb7fb432b0b734a3' => 
    array (
      0 => '/var/www/html/iksy05/Kino/smarty/templates/header.tpl',
      1 => 1751397920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6864393b6cd0c5_38203830 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Eigene Styles -->
  <link rel="stylesheet" href="css/style.css">
</head>

<!-- Header -->
<header class="p-3">
  <div class="container d-flex justify-content-between gap-3 align-items-center flex-wrap">
  
    <!-- Logo/Name -->
    <div class="d-flex align-items-center">
      <a href= "/iksy05/Kino/index.php">
      	<img src="imgs/Logo.png" alt="HAR Logo" class="har-logo me-3">
      </a>
      
    </div>

    <!-- Navigation -->
    <nav class="d-flex gap-4 justify-content-center align-items-center text-black p-2">
      <a href="index.php" class="nav-link <?php if ($_smarty_tpl->tpl_vars['activePage']->value == 'startseite') {?>active-link<?php } else { ?>unactive-link<?php }?> rounded-2 p-2">Startseite</a>
      <a href="filme.php" class="nav-link <?php if ($_smarty_tpl->tpl_vars['activePage']->value == 'filmuebersicht') {?>active-link<?php } else { ?>unactive-link<?php }?> rounded-2 p-2">Filmübersicht</a>
      <a href="buchung.php" class="nav-link <?php if ($_smarty_tpl->tpl_vars['activePage']->value == 'buchung') {?>active-link<?php } else { ?>unactive-link<?php }?> rounded-2 p-2">Buchung</a>
    </nav>

   <!-- Login/Logout, Warenkorb und Suche -->
	<div class="d-flex justify-content-center align-items-center gap-3 m-2">
  		<a href="warenkorb.php" class="fs-4 text-black" title="Warenkorb">
    		<i class="bi bi-bag-fill"></i>
  		</a>

 	 	<?php if ($_smarty_tpl->tpl_vars['eingeloggt']->value) {?>
   		 	<a href="logout.php" class="btn btn-sm btn-dark">Logout</a>
  		<?php } else { ?>
    		<a href="login.php" class="btn btn-sm btn-dark">Login</a>
 	 	<?php }?>
	</div>
   
   
   
  </div>
</header>

<div class="container">

<?php }
}
