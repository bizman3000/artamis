<?php 
	$path = '../../../';
	$lang = 'fr/';
?>

<!DOCTYPE html>
<html>
	<head>
		<?php include($path.$lang.'base/head.php'); ?>
		<link href="<?php echo $path; ?>css/index-classes-et-atelier.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<?php include($path.$lang.'base/header.php'); ?>
			<?php include($path.$lang.'base/header-nav.php'); ?>
			<?php include($path.$lang.'base/header-nav-atelier.php'); ?>
			<?php include($path.$lang.'base/second-header.php'); ?>
			<div class="row">
				<section class="col-lg-9 col-md-9 col-sm-9 col-xs-9 body">
					<h3>Sculpture</h3>
					<ul>
						<li>Date 1<a href="<?php echo $path.$lang; ?>classes-et-atelier/sculpture/">Le bronze</a></li>
						<li>Date 2<a href="<?php echo $path.$lang; ?>classes-et-atelier/sculpture/">le marbre</a></li>
						<li>Date 3<a href="<?php echo $path.$lang; ?>classes-et-atelier/sculpture/">Terre cuite</a></li>
						<li>Date 4<a href="<?php echo $path.$lang; ?>classes-et-atelier/sculpture/">Mosaique</a></li>
						<li>Date 4<a href="<?php echo $path.$lang; ?>classes-et-atelier/sculpture/">Collage et materiaux divers</a></li>
					</ul>
				</section>
				<aside class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
					<img src="<?php echo $path; ?>img/atelier_sculpture.jpg" alt="img atelier_ceramique" class="img-thumbnail">
					<h4>Sculpture</h4>
					<p>
						Le département sculpture est  dirigé par différents artistes,
						chacun spécialisé dans un ou plusieurs domaines proposés.
						Il propose des classes et des ateliers dans des matériaux divers<br>
						-bronze (Lothar Vigelanzoon)<br>
						-marbre (Vel Palassis)<br>
						-terre cuite (...)<br>
						-mosaïque (Diana Landi)<br>
						 Les cours sont ouverts à tous, experts ou débutants.

						Chaque année il invite des artistes étrangers pour des ateliers à fin d'élargir et approfondir l'expérience acquise.
					</p>
				</aside>
			</div>
			<?php include($path.$lang.'base/foot.php'); ?>
		</div>
	</body>
</html>