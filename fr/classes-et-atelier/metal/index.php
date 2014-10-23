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
					<h3>Métal</h3>
					<ul>
						<li>Date 1<a href="<?php echo $path.$lang; ?>classes-et-atelier/ceramique/">Le bronze</a></li>
						<li>Date 2<a href="<?php echo $path.$lang; ?>classes-et-atelier/fibre-de-verre/">Le laiton</a></li>
						<li>Date 3<a href="<?php echo $path.$lang; ?>classes-et-atelier/metal/">L'argent et le fer</a></li>
						<li>Date 4<a href="<?php echo $path.$lang; ?>classes-et-atelier/mosaique/">La technique de la feuille d'or/cuivre</a></li>
					</ul>
				</section>
				<aside class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
					<img src="<?php echo $path; ?>img/atelier_metal.jpg" alt="img atelier_metal" class="img-thumbnail">
					<h4>Métal</h4>
					<p>
						Le département métal proposes des classes et des ateliers pour le cuivre, le laiton, l'argent.
						Les cours sont ouverts à tous experts ou débutants.
						Chaque année il invite des artistes étrangers pour des ateliers à fin d'élargir et approfondir les différentes techniques.
					</p>
				</aside>
			</div>
			<?php include($path.$lang.'base/foot.php'); ?>
		</div>
	</body>
</html>