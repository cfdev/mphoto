<?php include(dirname(__FILE__).'/header.php'); ?>

<section>

	<div id="container">

			<p class="directory">
				<strong><?php $plxShow->catName(); ?></strong>
				<?php $plxShow->catDescription(' : #cat_description'); ?>
			</p>
			
			<ul class="breadcrumb">
				<li><a href="<?php $plxShow->racine() ?>"><?php $plxShow->lang('HOME'); ?></a></li>
				<li>
				<?php 
				 $plxShow->catName();
				 $plxShow->catDescription(' : #cat_description');
				?>
				 </li>	
			</ul>
			
			<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>

			<article role="article" id="post-<?php echo $plxShow->artId(); ?>">

				<header>
					<h1>
						<?php $plxShow->artTitle('link'); ?>
					</h1>
					<p>
						<span class="glyphicon glyphicon-pencil" aria-hidden="true">&nbsp;</span>
						<?php $plxShow->lang('WRITTEN_BY') ?> <?php $plxShow->artAuthor(); ?> -
						<time datetime="<?php $plxShow->artDate('#num_year(4)-#num_day-#num_month'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time> -
						<span class="glyphicon glyphicon-comment" aria-hidden="true">&nbsp;</span><?php $plxShow->artNbCom(); ?>
					</p>
				</header>

				<section>
					<?php $plxShow->artChapo(); ?>
				</section>

				<footer role="art_details">
					<p>
						<span class="glyphicon glyphicon-folder-open" aria-hidden="true">&nbsp;</span> <?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?> -
						<span class="glyphicon glyphicon-tags" aria-hidden="true">&nbsp;</span> <?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags('<a class="tag tag-#tag_status" href="#tag_url" title="#tag_name">#tag_name</a>'); ?>
					</p>
				</footer>

			</article>

			<?php endwhile; ?>

			<div id="pagination">
				<?php $plxShow->pagination(); ?>
			</div>

			<div class="rss">
				<?php $plxShow->artFeed('rss',$plxShow->catId()); ?>
			</div>

	
	</div>

</section>

<?php include(dirname(__FILE__).'/footer.php'); ?>
