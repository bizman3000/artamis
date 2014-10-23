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
					<h3>Digital Média</h3>
					<ul>
						<li>Date 1<a href="<?php echo $path.$lang; ?>classes-et-atelier/photographie-et-digital-media/">Découverte de la Photographie digitale</a></li>
						<li>Date 2<a href="<?php echo $path.$lang; ?>classes-et-atelier/photographie-et-digital-media/">Perfectionnement des images : images réelles et virtuelles</a></li>
						<li>Date 3<a href="<?php echo $path.$lang; ?>classes-et-atelier/photographie-et-digital-media/">De l'image à l'imprimante</a></li>
						<li>Date 4<a href="<?php echo $path.$lang; ?>classes-et-atelier/photographie-et-digital-media/">Le logiciel Photoshop pour photographes</a></li>
						<li>Date 5<a href="<?php echo $path.$lang; ?>classes-et-atelier/photographie-et-digital-media/">Digital Media et sculpture virtuelle</a></li>
					</ul>
				</section>
				<aside class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
					<img src="<?php echo $path; ?>img/atelier_photographie_et_digital_media.jpg" alt="img atelier_diagital_media" class="img-thumbnail">
					<h4>Digital Média</h4>
					<p>
						Le département Digital Media est dirigé par Lothar Vigelandzoon qui a plus de 15 ans d'expérience dans le domaine.
						Il propose plusieurs types de classes et d'ateliers dans le domaine de l'image digitale.
						Les cours et les ateliers sont ouverts à tous sans limite d'âge ou d'expérience.
						Chaque année il accueil des artistes étrangers pour des échanges des techniques et d'expériences artistiques.
					</p>
				</aside>
			</div>
			<?php include($path.$lang.'base/foot.php'); ?>
		</div>
	</body>
</html>