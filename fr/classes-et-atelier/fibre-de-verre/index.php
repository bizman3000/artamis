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
					<h3>Fibre de Verre</h3>
					<ul>
						<li>Date 1<a href="<?php echo $path.$lang; ?>classes-et-atelier/ceramique/">Introduction à la peinture sur verre</a></li>
						<li>Date 2<a href="<?php echo $path.$lang; ?>classes-et-atelier/fibre-de-verre/">Les techniques de base du vitrail</a></li>
						<li>Date 3<a href="<?php echo $path.$lang; ?>classes-et-atelier/metal/">Incision sur verre et décoration en or</a></li>
						<li>Date 4<a href="<?php echo $path.$lang; ?>classes-et-atelier/mosaique/">Les vitraux</a></li>
					</ul>
				</section>
				<aside class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
					<img src="<?php echo $path; ?>img/atelier_fibre_de_verre.jpg" alt="img atelier_fibre_de_verre" class="img-thumbnail">
					<h4>FIBRE DE VERRE</h4>
					<p>
						Le département verre est dirige par Martine Micallef qui a plusieurs ans d'expérience dans le domaine.
						Il offre une grande variété de cours et d'ateliers à tous les niveaux.
						Il est ouvert à tous sans limite d'âge ou d'expérience.
						Chaque année accueils des artistes étrangers pour des échanges d'expériences et des techniques dans le 
						domaine ou organise de visites et de stage dans des ateliers leaders dans le domaine.
					</p>
				</aside>
			</div>
			<?php include($path.$lang.'base/foot.php'); ?>
		</div>
	</body>
</html>