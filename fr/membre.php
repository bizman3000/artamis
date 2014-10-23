<?php 
	$path = '../';
	$lang = 'fr/';
?>

<!DOCTYPE html>
<html>
	<head>
		<?php include('base/head.php'); ?>
		<link href="<?php echo $path; ?>css/membre.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<?php include('base/header.php'); ?>
			<?php include('base/header-nav.php'); ?>
			<?php include('base/second-header.php'); ?>
			<div class="row">
				<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 body">
					<h4>Membres de l'association</h4>
					<ul>
						<li>
							<strong>Membre actif</strong> : Est membre de l’association toute personne, à jour avec la 
							cotisation annuelle qui a été  présentée par deux membres actifs, bienfaiteurs ou
							honoraires, et agrée par le bureau.
						</li><br>
						<li>
							<strong>Membres bienfaiteurs</strong> : Sont considérés comme tels ceux, qui soutiennent 
							l’association par une participation supérieure à 3 fois la cotisation des personnes morales
							et dont ils déterminent eux-mêmes le montant.
						</li><br>
						<li>
							<strong>Membres d’honneur</strong> : Tous ceux qui par leur action ont rendu de signalés 
							services à l’Association.
						</li>
					</ul>
					<h4>Membres d'honneur :</h4>
					<table>
						<tr>
							<td>Heidi Melano (artiste mosaiciste)</td>
							<td></td>
						</tr>
						<tr>
							<td>Jean Francois Gaulthier (peintre)</td>
							<td><a href='www.gaulthier.com'>gaulthier.com</a></td>
						</tr>
						<tr>
							<td>Gerard Economos (artiste peintre)</td>
							<td><a href='www.gerardeconomos.net'>gerardeconomos.net</a></td>
						</tr>
						<tr>
							<td>Piero Sbarluzzi (artiste sculpteur)</td>
							<td></td>
						</tr>
						<tr>
							<td>Chang Jiahuang (artiste peintre)</td>
							<td></td>
						</tr>
					</table>
					<h4>Membres d'honneur :</h4>
					<ul>
						<li><strong>Président</strong> : Diana Vicinelli Landi</li>
						<li><strong>Vice président</strong> : France Attal</li>
						<li><strong>Trésorier</strong> : Axelle Hering</li>
						<li><strong>Secrétaire Générale</strong> : Marie-Hélène Parent</li>
					</ul>
					<table>
						<tr>
							<td>Diana Vicinelli Landi</td>
							<td>06.77.82.15.79</td>
							<td><a href="mailto:diana.artamis@gmail.com">diana.artamis@gmail.com</a></td>
						</tr>
						<tr>
							<td>France Attal</td>
							<td>06.61.93.37.08</td>
							<td><a href="mailto:gilfrance1@free.fr">gilfrance1@free.fr</a></td>
						</tr>
						<tr>
							<td>Marie Hélène Parent</td>
							<td>06.09.81.68.18</td>
							<td><a href="mailto:parentedouardmh06@gmail.com">parentedouardmh06@gmail.com</a></td>
						</tr>
						<tr>
							<td>Axelle Hering</td>
							<td>06.07.58.03.79</td>
							<td><a href="mailto:ha.artamis@gmail.com">ha.artamis@gmail.com</a></td>
						</tr>
					</table>
				</section>
			</div>
			<?php include('base/foot.php'); ?>
		</div>
	</body>
</html>