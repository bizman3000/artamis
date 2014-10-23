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
					<h3>Peinture</h3>
					<ul>
						<li>Date 1<a href="<?php echo $path.$lang; ?>classes-et-atelier/peinture/">Introduction au dessin</a></li>
						<li>Date 2<a href="<?php echo $path.$lang; ?>classes-et-atelier/peinture/">Les bases de la peinture</a></li>
						<li>Date 3<a href="<?php echo $path.$lang; ?>classes-et-atelier/peinture/">L'aquarelle classique et l'aquarelle chinoise</a></li>
						<li>Date 4<a href="<?php echo $path.$lang; ?>classes-et-atelier/peinture/">La peinture à l'huile</a></li>
						<li>Date 5<a href="<?php echo $path.$lang; ?>classes-et-atelier/peinture/">Les paysages avec les pastels à l'huile</a></li>
						<li>Date 6<a href="<?php echo $path.$lang; ?>classes-et-atelier/peinture/">Peinture sur soie/cuir</a></li>
						<li>Date 7<a href="<?php echo $path.$lang; ?>classes-et-atelier/peinture/">L'art de la calligraphie</a></li>
						<li>Date 8<a href="<?php echo $path.$lang; ?>classes-et-atelier/peinture/">La peinture sur verre</a></li>
						<li>Date 9<a href="<?php echo $path.$lang; ?>classes-et-atelier/peinture/">Collage, découpage et techniques mixtes</a></li>
					</ul>
				</section>
				<aside class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
					<img src="<?php echo $path; ?>img/atelier_peinture.jpg" alt="img atelier_peinture" class="img-thumbnail">
					<h4>Peinture</h4>
					<p>
						Le département de peinture est dirigé par Isabelle Quentin qui a plus de 15 ans d'expérience dans le domaine.
						Il propose plusieurs types de classes et d'ateliers dans des différentes techniques.
						Les cours et les ateliers sont ouverts à tous sans limite d'âge ou d'expérience.
						Chaque année accueils des artistes étrangers pour des échanges des techniques et d'expérience artistique
					</p>
				</aside>
			</div>
			<?php include($path.$lang.'base/foot.php'); ?>
		</div>
	</body>
</html>