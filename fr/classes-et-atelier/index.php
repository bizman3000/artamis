<?php 
	$path = '../../';
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
				<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 body">
					<img src="" alt="img atelier_img1" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 img-thumbnail">
					<img src="" alt="img atelier_img1" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 img-thumbnail">
					<img src="" alt="img atelier-img1" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 img-thumbnail">
				</section>
			</div>
			<?php include($path.$lang.'base/foot.php'); ?>
		</div>
	</body>
</html>