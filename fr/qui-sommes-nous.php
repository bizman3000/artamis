<?php 
	$path = '../';
	$lang = 'fr/';
?>

<!DOCTYPE html>
<html>
	<head>
		<?php include('base/head.php'); ?>
		<link href="<?php echo $path; ?>css/qui-sommes-nous.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<?php include('base/header.php'); ?>
			<?php include('base/header-nav.php'); ?>
			<?php include('base/second-header.php'); ?>
			<div class="row">
				<aside class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
					<h4>Qui sommes-nous ?</h4>
				</aside>
				<section class="col-lg-9 col-md-9 col-sm-9 col-xs-9 body">
					<img src="<?php echo $path; ?>img/qui_sommes_nous.jpg" alt="img qui-sommes-nous" class="img-thumbnail">
					<p>
						ArtAmis est une association ouverte à tous, hommes ou femmes passionnés par l'art.<br>
						Elle propose des activités qui rendent vivant l'art contemporain, valorisent le patrimoine historique et 
						favorisent les expériences esthétiques nécessaires à l'appréciation du moment présent.<br>
						Sa mission est de construire un espace de création pluridisciplinaire dédié principalement aux arts plastiques, 
						de tisser des liens entre artistes et amateurs sans limites géographiques, toutes formes d'art confondues.<br>
						Elle développe des initiatives de création contemporaine et invente des supports inédits pour la création.<br>
						Elle propose, par ailleurs, des activités culturelles avec l'objectif d'accroître notre capacité d'émerveillement 
						dans la vie de tous les jours, favoriser les liens sociaux, l'échange, et la communication.
					</p>
				</section>
			</div>
			<?php include('base/foot.php'); ?>
		</div>
	</body>
</html>