<?php
	$path = '../';
	$lang = 'fr/';
?>

<!DOCTYPE html>
<html>
	<head>
		<?php include('base/head.php'); ?>
		<link href="<?php echo $path; ?>css/info-legale.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<?php include('base/header.php'); ?>
			<?php include('base/header-nav.php'); ?>
			<?php include('base/second-header.php'); ?>
			<div class="row">
				<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 body">
					<h4>Statut de l'Association</h4>
					<ul>
						<li><a href=''>Voir le statut de l'association</a></li>
					</ul>
					<h4>Assemblées Générales :</h4>
					<ul>
						<li><a href='download/p.v.amisassemble 29-10-2009.doc'>PV de l'Assemblée Générale du 29/10/2009</a></li>
						<li><a href='download/p.v.assemblee 23-7-2010.doc'>PV de L'Assemblée Générale du 23/07/2010</a></li>
					</ul>
					<h4>Contrats :</h4>
					<ul>
						<li><a href='download/contrat-droits-auteur.pdf'>Contrat relatif aux droits d'auteur</a></li>
						<li><a href='download/contrat-depot.pdf'>Contrat de commission portant dépôt d'oeuvres d'art en galerie en vue de leur vente</a></li>
						<li><a href='download/Fiche_de_depot.pdf'>Fiche de dépôt</a></li>
						<li><a href='download/Contrat-exposition.pdf'>Contrat d'exposition</a></li>
						<li><a href='download/fiche-technique-exposition.pdf'>Fiche technique d'exposition</a></li>
					</ul>
					<h4>Divers :</h4>
					<ul>
						<li><a href='download/fiche-associe.pdf'>Fiche associé</a></li>
					</ul>
				</section>
			</div>
			<?php include('base/foot.php'); ?>
		</div>
	</body>
</html>