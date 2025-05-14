<?php
/* Smarty version 4.3.2, created on 2025-05-14 20:39:08
  from '/var/www/html/iksy05/Kino/smarty/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6824ff6c59c5c9_80674081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b37ff70228d12ac706f5cf56eb7fb432b0b734a3' => 
    array (
      0 => '/var/www/html/iksy05/Kino/smarty/templates/header.tpl',
      1 => 1747254785,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6824ff6c59c5c9_80674081 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <!-- <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['title']->value ?? null)===null||$tmp==='' ? "HAR Kino" ?? null : $tmp);?>
</title> -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons (für Suche & Warenkorb) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Eigene Styles -->
  <!-- TODO: überprüfen beim Umzug auf VM !!!-->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- HEADER -->
<header class="p-3">
  <div class="container d-flex justify-content-between align-items-center">
	
    <!-- Logo und Name -->
    <div class="d-flex align-items-center">
      <!-- TODO: überprüfen beim Umzug auf VM !!!!-->
      <img src="imgs/Logo.png" alt="HAR Logo" class="har-logo me-3">
    </div>

    <!-- Navigation -->
    <nav class="d-flex gap-4 justify-content-center align-items-center text-black">
      <a href="index.php" class="nav-link <?php if ($_smarty_tpl->tpl_vars['activePage']->value == 'startseite') {?>active-link <?php } else { ?> unactive-link <?php }?> rounded-2 p-2 ">Startseite</a>
      <a href="filme.php" class="nav-link <?php if ($_smarty_tpl->tpl_vars['activePage']->value == 'filmuebersicht') {?>active-link <?php } else { ?> unactive-link <?php }?> rounded-2 p-2 ">Filmübersicht</a>
      <a href="buchung.php" class="nav-link <?php if ($_smarty_tpl->tpl_vars['activePage']->value == 'buchung') {?> active-link <?php } else { ?> unactive-link <?php }?> rounded-2 p-2 ">Buchung</a>
    </nav>

		<!--Loginbtn, Warenkorb und Search-->
		<div class="d-flex justify-content-center align-items-center gap-3 m-2">
			<a href="warenkorb.php" class="fs-4 text-black"><i class="bi bi-bag-fill"></i></a>
			<a href="login.php" class="btn btn-outline-dark btn-sm">Login</a>
		</div>
  </div>
</header>

<div class="container">

</div>


<?php }
}
