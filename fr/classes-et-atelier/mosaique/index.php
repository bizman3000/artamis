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
					<h3>Mosaïque</h3>
					<ul>
						<li>Date 1<a href="<?php echo $path.$lang; ?>classes-et-atelier/ceramique/">Journee decouverte - initiation a la mosaique</a></li>
						<li>Date 2<a href="<?php echo $path.$lang; ?>classes-et-atelier/fibre-de-verre/">Cours de mosaique</a></li>
						<li>Date 3<a href="<?php echo $path.$lang; ?>classes-et-atelier/metal/">Perfectionnement  des techniques / Le mosaique miniature ( Micromosaique)</a></li>
						<li>Date 4<a href="<?php echo $path.$lang; ?>classes-et-atelier/mosaique/">Perfectionnement des techniques / Le tapis en mosaique</a></li>
						<li>Date 5<a href="<?php echo $path.$lang; ?>classes-et-atelier/mosaique/">Perfectionnement des techniques de mosaique en 3 dimensions</a></li>
						<li>Date 6<a href="<?php echo $path.$lang; ?>classes-et-atelier/mosaique/">Perfectionnement des techniques / Les portaits</a></li>
						<li>Date 7<a href="<?php echo $path.$lang; ?>classes-et-atelier/mosaique/">La sculpture en mosaique</a></li>
					</ul>
				</section>
				<aside class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
					<img src="<?php echo $path; ?>img/atelier_mosaique.jpg" alt="img atelier_mosaique" class="img-thumbnail">
					<h4>Mosaïque</h4>
					<p>
						Le departement de mosaique est dirige par Diana Landi qui a plus de 15 ans d’experience dans le domaine.
						Il offres une grande varieté de cours et d’ateliers a tous les niveaux.
						Il est ouvert a tous sans limite d’age ou d’experience.
						Chaque année accueils des artistes pour des echanges d’experiences et des techniques.
					</p>
				</aside>
			</div>
			<?php include($path.$lang.'base/foot.php'); ?>
		</div>
	</body>
</html>