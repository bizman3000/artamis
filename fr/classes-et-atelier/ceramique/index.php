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
					<h3>Céramique</h3>
					<ul>
						<li>Date 1<a href="<?php echo $path.$lang; ?>classes-et-atelier/ceramique/date-1.php">Introduction à la Céramique</a></li>
						<li>Date 2<a href="<?php echo $path.$lang; ?>classes-et-atelier/ceramique/date-2.php">Les techniques de base de la Céramique</a></li>
						<li>Date 3<a href="<?php echo $path.$lang; ?>classes-et-atelier/ceramique/date-3.php">Céramique émaillée</a></li>
						<li>Date 4<a href="<?php echo $path.$lang; ?>classes-et-atelier/ceramique/date-4.php">La technique Raku</a></li>
					</ul>
				</section>
				<aside class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
					<img src="<?php echo $path; ?>img/atelier_ceramique.jpg" alt="img atelier_ceramique" class="img-thumbnail">
					<h4>Céramique 2011</h4>
					<p>
						Le département de céramique  est dirigé par Daniel Branchard, 
						artiste potier qui a plus de 20 ans d’expérience dans le domaine.
						Une grande variété de classes et d’ateliers sont proposés à tous, sans limite d’âge ou d’expérience.
						Chaque année le département accueille des artistes pour des échanges d’expériences et des techniques et organise de stages de perfectionnement auprès d’artistes céramistes de niveau international.
					</p>
				</aside>
			</div>
			<?php include($path.$lang.'base/foot.php'); ?>
		</div>
	</body>
</html>