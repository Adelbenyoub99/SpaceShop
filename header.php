<?php
session_start();
require_once "fonctions/BDD.php";
$pdo = pdo();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<!-- iconfav -->
	<link rel="icon" type="image/png" href="assets/uploads/favicon.jpg">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css"> 
	<!-- icon -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/rating.css">
	<link rel="stylesheet" href="assets/css/spacing.css">
	<link rel="stylesheet" href="assets/css/bootstrap-touch-slider.css">
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<link rel="stylesheet" href="assets/css/tree-menu.css">
	<link rel="stylesheet" href="assets/css/select2.min.css">
	<link rel="stylesheet" href="assets/css/AdminLTE.min.css">
	<link rel="stylesheet" href="assets/css/_all-skins.min.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/responsive.css">

	<title>SPACESHOP</title>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
	<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5993ef01e2587a001253a261&product=inline-share-buttons"></script>

</head>
<body>
	<!-- top bar -->
	<div class="top">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="right">
						<ul>
							<?php
							if (isset($_SESSION['client'])) {
							?>
								<li>
									<a href="profile.php">
										<i class="fa fa-home"></i>
										<?php echo $_SESSION['client']['nom_c']; ?>
									</a>
								</li>
								<li><a href="panier.php"><i class="fa fa-shopping-cart"></i> Panier</a></li>
								<li><a href="fonctions/deconnecter.php"><i class="fa fa-sign-in"></i> Déconnexion</a></li>
							<?php
							} elseif (isset($_SESSION['botique'])) {
							?>
								<li><a href="profileboutique.php"> <i class="fa fa-home"></i> Gérer la boutique </a></li>
								<li><a href="fonctions/deconnecter.php"><i class="fa fa-sign-in"></i> Déconnexion</a></li>
							<?php
							} else {
							?>
								<li><a href="connexion.php"><i class="fa fa-sign-in"></i> Connexion</a></li>
								<li><a href="inscription.php"><i class="fa fa-user-plus"></i> Inscription </a></li>
								<li><a href="pageboutique.php"><i class="fa fa-plus"></i> Vendeur </a></li>
							<?php
							}
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header">
		<div class="container">
			<div class="row inner">
				<div class="col-md-4 logo">
					<a href="index.php"><b style="font-size:28px; color:black;">SPACE<b style="color:orange;">SHOP</b> </b></a>
				</div>
				<div class="col-md-5 right">
					<ul>
						<li><a href="index.php">Accueil</a></li>
						<li><a href="lesproduit.php">Nos produits</a></li>
						<li><a href="apropos.php">A propos </a></li>
						<li><a href="contact.php">Contactez-nous</a></li>
					</ul>
				</div>
				<div class="col-md-3 search-area">
					<form class="navbar-form navbar-left" role="search" method="get">
						<div class="form-group">
							<input type="text" class="form-control search-top" placeholder="Recherche " name="search">
						</div>
						<button type="submit" class="btn btn-danger">Rechercher</button>
					</form>
				</div>
			</div>
		</div>
	</div>