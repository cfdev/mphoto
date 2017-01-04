<?php include(dirname(__FILE__).'/header.php'); ?><?php require 'lib/cfImgReader.php';?>

<section>
	<div id="container">

			<article role="article" id="post-<?php echo $plxShow->artId(); ?>">
				<header>
					<h1>
						<?php $plxShow->artTitle('');?>
					</h1>
					<p>						<span class="glyphicon glyphicon-pencil" aria-hidden="true">&nbsp;</span>
						<?php $plxShow->lang('WRITTEN_BY') ?> <?php $plxShow->artAuthor(); ?> -
						<time datetime="<?php $plxShow->artDate('#num_year(4)-#num_day-#num_month'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time> -						<span class="glyphicon glyphicon-comment" aria-hidden="true">&nbsp;</span><?php $plxShow->artNbCom(); ?>
					</p>
				</header>
			<?php
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
			<section>				<div class="row">					<div class="col-sm-6">						<?php $plxShow->artThumbnail('<img class="img-responsive space4 '.$imgClass.'" src="#img_url" alt="#img_alt" title="#img_title" />'); ?>					</div>					<div class="col-sm-6">						<?php						# On affiche les données EXIF						$info_img->show_exif('<ul class="cfImgReader space4"><i class="fa fa-camera fa-2x"></i><li>Size: #Widthx#Height</li><li>Appareil: #Make</li><li>Modèle: #Model</li><li>Capture: #ExpoTime #Aperture #FLength</li><li>ISO: #ISO</li></ul> ');						?>					</div>				</div>				<div class="space6">				<?php	$plxShow->artContent(); ?>				</div>			</section>

				<footer role="art_details">
					<p>
						<span class="glyphicon glyphicon-folder-open" aria-hidden="true">&nbsp;</span> <?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?> -
						<span class="glyphicon glyphicon-tags" aria-hidden="true">&nbsp;</span> <?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags('<a class="tag tag-#tag_status" href="#tag_url" title="#tag_name">#tag_name</a>'); ?>
					</p>
				</footer>
			</article>

			<?php $plxShow->artAuthorInfos('<div class="author-infos">#art_authorinfos</div>'); ?>			<p class="art_share center"><span class="glyphicon glyphicon-heart" aria-hidden="true">&nbsp;</span><?php $plxShow->lang('SHARE_IT') ?></p>			<div class="text-center">				<div id="lessbuttons_holder"></div><script async src="https://lessbuttons.com/script.js?facebook=1&twitter=1&googleplus=1&pinterest=1&position=inline"></script>			</div>
			<?php include(dirname(__FILE__).'/commentaires.php'); ?>

	</div>

</section>

<?php include(dirname(__FILE__).'/footer.php'); ?>
