<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo $title ?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/styles_footer.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/styles_header.css'); ?>">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!--   ICONO PAGINA    -->
		<link rel="icon" href="http://cellaron.com/media/wysiwyg/zte-mwc-2015-8-l-124x124.png">
	</head>
	<body>
		
		<nav class="navbar navbar-inverse">
			<div class="container-fluid menu_nav_header">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">
						<img class="logoNav" src="<?= base_url(); ?>assets/images/logoNav.png">
					</a>

				</div>
				<ul class="nav navbar-nav">
					<li class="active"><a class="home" href="#">Home</a></li>
					<li><a class="page" href="#">Page 1</a></li>
					<li><a class="page" href="#">Page 2</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-user"></span></a></li>
					<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
				</ul>
			</div>
		</nav>
		<div class="container">