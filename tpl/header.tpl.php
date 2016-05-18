<?php
session_start();
$path = explode('/', $_SERVER['PHP_SELF']);
$path = array_pop($path);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Oscar Larriega <larriega@gmail.com>">
	<title>Synergy</title>

	<link rel="shortcut icon" type="image/ico" href="favicon.ico">

	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/main.css" rel="stylesheet">
</head>
<body>
	<div class="wrapper">
		<header class="container">
			<div class="row">
				<div class="col-sm-3">
					<a href="/" class="logo">
						<img src="assets/images/logo-synergy.png" class="img-responsive">
					</a>
				</div>
				<div class="col-sm-5 col-sm-offset-1">
					<nav>
						<ul class="nav nav-pills nav-justified">
							<li><a href="index.php" class="<?= ($path == 'index.php' || $path == '') ? 'active' : '' ?>">NOSOTROS</a></li>
							<li><a href="servicios.php" class="<?= ($path == 'servicios.php') ? 'active' : '' ?>">SERVICIOS</a></li>
							<li><a href="testimonio.php" class="<?= ($path == 'testimonio.php') ? 'active' : '' ?>">TESTIMONIOS</a></li>
							<li><a href="contacto.php" class="<?= ($path == 'contacto.php') ? 'active' : '' ?>">CONTACTO</a></li>
						</ul>
					</nav>
				</div>
				<div class="col-sm-3">
					<ul class="list-unstyled nav-socials">
						<li>
							<a href="https://www.facebook.com/synergycelebracionescorporativas" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
						</li>
						<li class="social-middle">
							<a href="#"><i class="fa fa-twitter fa-2x"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-youtube fa-2x"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</header>