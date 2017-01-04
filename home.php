<?php include(dirname(__FILE__).'/header.php'); ?>
<?php require 'lib/cfImgReader.php';?>

	<?php
	# Get global var
	ob_start();
	$plxShow->template();
	$template_path = ob_get_clean();
	ob_start();
	$plxShow->racine();
	$racine_path = ob_get_clean();
	?>

	<article role="article"  class="row portfolio animated fadeInDown">

	<?php
	while($plxShow->plxMotor->plxRecord_arts->loop()):
	# resume
	ob_start();
	$plxShow->artChapo();
	$text = strip_tags( ob_get_clean() );
	# Couper la chaine à 100 mots
	$resume = wordwrap($text, 100, "***", false);
	# Creation d'un tableau
	$tcut = explode("***", $resume);
	# Récupération de la première ligne de 100 mots
	$resume = $tcut[0].' ...';

  # Récupère l'url
  ob_start();
  $img = "#url";
  $plxShow->artThumbnail('#img_url');
  $img = strip_tags(ob_get_clean());
  # Ok, on récupère les info et on les affiche
  $info_img = new cfImgReader($img);
  # On recup la class a appliquer pour la rotation
  $imgClass = $info_img->fixRotate_exif();
	?>



	<figure id="post-<?php echo $plxShow->artId(); ?>" class="col-xs-12 col-sm-6 col-md-4" onclick="location.href='<?php $plxShow->artUrl(); ?>'">
		<img src="<?php echo $template_path ?>/lib/thumb.php?src=<?php $plxShow->artThumbnail('#img_url'); ?>&w=600&h=545&s=1&q=92" class="center img-responsive <?php echo $imgClass;?>" alt="design"/>
		<figcaption class="text-center"><a href="<?php $plxShow->artUrl(); ?>" title="<?php $plxShow->artTitle(''); ?>">
			<h3><?php $plxShow->artTitle(''); ?></h3></a><p><small><?php echo $resume; ?></small></p>
			<a href="<?php $plxShow->artUrl(); ?>" title="Voir <?php $plxShow->artTitle(''); ?>"><span class="portfolio-link"><i class="fa fa-2x fa-link round"></i></a></span>
		</figcaption>
	</figure>

	<?php endwhile; ?>

	</article>

	<nav class="pagination center">
		<?php $plxShow->pagination(); ?>
	</nav>


<?php include(dirname(__FILE__).'/footer.php'); ?>
