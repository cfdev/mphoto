﻿<?php include(dirname(__FILE__).'/header.php'); ?>

<section>
	<div id="container">

			<article role="article" id="post-<?php echo $plxShow->artId(); ?>">
				<header>
					<h1>
						<?php $plxShow->artTitle('');?>
					</h1>
					<p>
						<?php $plxShow->lang('WRITTEN_BY') ?> <?php $plxShow->artAuthor(); ?> -
						<time datetime="<?php $plxShow->artDate('#num_year(4)-#num_day-#num_month'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time> -
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
			<section>

				<footer role="art_details">
					<p>
						<span class="glyphicon glyphicon-folder-open" aria-hidden="true">&nbsp;</span> <?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?> -
						<span class="glyphicon glyphicon-tags" aria-hidden="true">&nbsp;</span> <?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags('<a class="tag tag-#tag_status" href="#tag_url" title="#tag_name">#tag_name</a>'); ?>
					</p>
				</footer>
			</article>

			<?php $plxShow->artAuthorInfos('<div class="author-infos">#art_authorinfos</div>'); ?>
			<?php include(dirname(__FILE__).'/commentaires.php'); ?>

	</div>

</section>

<?php include(dirname(__FILE__).'/footer.php'); ?>