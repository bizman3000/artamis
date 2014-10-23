<?php 
	$path = './';
	$lang = 'fr/';
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include('fr/base/head.php'); ?>
		<link href="css/index.css" rel="stylesheet">
		<link href="css/carousel.css" rel="stylesheet">
		<link href="css/carousel-even.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<?php include('fr/base/header.php'); ?>
			<?php include('fr/base/header-nav.php'); ?>
			<?php include('fr/base/second-header.php'); ?>
			<div class="row">
				<div id="transition-timer-carousel-article" class="carousel slide transition-timer-carousel-article" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#transition-timer-carousel-article" data-slide-to="0" class="active"></li>
						<li data-target="#transition-timer-carousel-article" data-slide-to="1"></li>
						<li data-target="#transition-timer-carousel-article" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<img src="" />
							<div class="carousel-caption">
								<h1 class="carousel-caption-header">Expo</h1>
									
							</div>
						</div>
						<div class="item">
							<img src="" />
							<div class="carousel-caption">
								<h1 class="carousel-caption-header">Even</h1>
									
							</div>
						</div>
						<div class="item">
							<img src="" />
							<div class="carousel-caption">
								<h1 class="carousel-caption-header">Calendrier</h1>
									
							</div>
						</div>
					</div>
					<a class="left carousel-control" href="#transition-timer-carousel-article" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#transition-timer-carousel-article" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
			</div>
			<div class="row">
				<span class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
					<img src="<?php echo $path; ?>img/siege_home.png" alt="img siege_home" class="img-thumbnail">
				</span>
				<span class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<h3>Association Artamis</h3>
					L'Association ArtAmis est un espace ouvert a toute personne, 
					homme et femme passionnées par l'art.
					Elle répond aux besoins d'expériences esthétiques nécessaires a l'appréciation du moment present 
					et permet de retrouver le goût des choses.
					<a class="btn btn-blog pull-right" href="fr/qui-sommes-nous.php">Plus d'infos...</a>
				</span>
			</div>
			<div class="row">
				<ul class="thumbnails">
					<li class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
						<div class="thumbnail">
							<div class="img-footer-diag">
								<img src="img/home_classes.png" title="" alt="">
							</div>
							<div class="caption">
								<h3>Classes et Ateliers</h3>
								<p>
									Artamis est un lieu de rencontre et de travail d'artistes locaux et étrangers.
									Elle propose des journées de découverte et  des cours  d'apprentissage dans les différents arts plastiques.
								</p>
							</div>
							<a class="btn btn-blog pull-right" href="">Afficher plus</a>
						</div>
					</li>
					<li class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
						<div class="thumbnail">
							<div class="img-footer-diag">
								<img src="img/home_sortie.png" title="" alt="">
							</div>
							<div class="caption">
								<h3>Visites et Sorties</h3>
								<p>
									Artamis organise des visites culturelles et des sorties 
									conviviales pour favoriser les liens sociaux, l'echange, la communication entre ses membres. 
								</p>
							</div>
							<a class="btn btn-blog pull-right" href="">Afficher plus</a>
						</div>
					</li>
					<li class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
						<div class="thumbnail">
							<div class="img-footer-diag">
								<img src="img/home_voyages.png" title="" alt="">
							</div>
							<div class="caption">
								<h3>Voyages à thèmes</h3>
								<p>
									Chaque année Artamis organise des voyages a theme autour de l'art, 
									de la musique et de la culture en general.
								</p>
							</div>
							<a class="btn btn-blog pull-right" href="">Afficher plus</a>
						</div>
					</li>
					<li class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
						<div class="thumbnail">
							<div class="img-footer-diag">
								<img src="img/home_expos.png" title="" alt="">
							</div>
							<div class="caption">
								<h3>Evènements et Expositions</h3>
								<p>
									Des évenements autour de l'art, des visites des musées et d'expositions sont proposés 
									aux associés pour accroitre notre capacité d'emerveillement dans la vie de tous les jours.
								</p>
							</div>
							<a class="btn btn-blog pull-right" href="">Afficher plus</a>
						</div>
					</li>
				</ul>
			</div>
			<?php include('fr/base/foot.php'); ?>
		</div>
		<script>
			$('.carousel').carousel({
				interval: 10000
			});
		</script>
	</body>
</html>