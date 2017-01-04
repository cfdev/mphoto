<?php include(dirname(__FILE__).'/header.php'); ?>

<section>

	<div id="container">

		<div class="full-width">

			<article role="article">

				<header>
					<h1>
						<?php $plxShow->lang('ERROR'); ?>
					</h1>
				</header>

				<section>
					<div class="alert alert-warning">
						<span class="fa-stack fa-lg">
						  <i class="fa fa-camera fa-stack-1x"></i>
						  <i class="fa fa-ban fa-stack-2x text-danger"></i>
						</span>
						<?php $plxShow->erreurMessage(); ?> ...
					</div>
				</section>

			</article>

		</div>

	</div>

</section>

<?php include(dirname(__FILE__).'/footer.php'); ?>
