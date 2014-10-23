<?php 
	$path = '../';
	$lang = 'fr/';
?>

<!DOCTYPE html>
<html>
	<head>
		<?php include('base/head.php'); ?>
		<link href="<?php echo $path; ?>css/partenaire.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<?php include('base/header.php'); ?>
			<?php include('base/header-nav.php'); ?>
			<?php include('base/second-header.php'); ?>
			<div class="row">
				<aside class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
					<h4>Partenaires</h4>
				</aside>
				<section class="col-lg-9 col-md-9 col-sm-9 col-xs-9 body">
					<p>
						Artamis a developpé une collaboration étroite avec d'autres organisations artistiques leaders 
						dans les differents domaines de son activité (mettre les liens vers les sites partenaires ici)
					</p>
					<table>
						<tr>
							<td>Les amis du Musée Matisse</td>
							<td><a href='http://www.amis-musee-matisse.fr'>www.amis-musee-matisse.fr</a></td>
						</tr>
					</table>
				</section>
			</div>
			<?php include('base/foot.php'); ?>
		</div>
	</body>
</html>