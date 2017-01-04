<?php if (!defined('PLX_ROOT')) exit; ?>


	</div><!-- /.container -->


		<section>
		<div class="container">
		<div class="row">

			<!-- derniers commentaires -->
			<div class="col-sm-12 col-md-6 col-lg-4">
				<h3>
					<?php $plxShow->lang('LATEST_COMMENTS'); ?>
				</h3>

				<ul>
					<?php $plxShow->lastComList('<li><a href="#com_url">#com_author '.$plxShow->getLang('SAID').' : #com_content(34)</a></li>'); ?>
				</ul>
			</div>

			<!-- Tag  -->
			<div class="col-sm-12 col-md-6 col-lg-4">
				<h3>
					<?php $plxShow->lang('TAGS'); ?>
				</h3>

				<ul class="tagList">
					<?php $plxShow->tagList('<li class="tag #tag_size"><a class="#tag_status" href="#tag_url" title="#tag_name">#tag_name</a></li>', 20); ?>
				</ul>

			</div>

			<!-- categories -->
			<div class="col-sm-12 col-md-6 col-lg-4">
				<h3>
					<?php $plxShow->lang('CATEGORIES'); ?>
				</h3>
				<ul>
					<?php $plxShow->catList('','<li class="cat" id="#cat_id"><a class="#cat_status" href="#cat_url" title="#cat_name">#cat_name</a> <span class="badge">#art_nb</span></li>'); ?>
				</ul>
			</div>

		</div>
		</div>
	</section>


	<footer role="contentinfo">
		<div class="container-fuild">
			<!-- stay tuned  -->
			<ul class="social list-inline text-center">
				<li>
					<a href="#"><i class="fa fa-instagram fa-fw fa-2x"></i><br>Instagram</a>
				</li>
				<li>
					<a href="#"><i class="fa fa-twitter fa-fw fa-2x"> </i><br>Twitter</a>
				</li>
				<li>
					<a href="#"><i class="fa fa-facebook fa-fw fa-2x"></i><br>Facebook</a>
				</li>
				<li>
					<a href="#"><i class="fa fa-google-plus fa-fw fa-2x"></i><br>Google+</a>
				</li>
				<li>
					<a href="#"><i class="fa fa-rss fa-fw fa-2x"></i><br>Rss</a>
				</li>
			</ul>
			<!-- Admin  -->
			<div class="admin">
				<p class="text-center">
					<?php $plxShow->mainTitle('link'); ?> © 2016 - <?php $plxShow->subTitle(); ?> -
					<a href="<?php $plxShow->urlRewrite('#top') ?>" title="<?php $plxShow->lang('GOTO_TOP') ?>"><?php $plxShow->lang('TOP') ?></a>
					<br/>
					<a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a> -
					<small><a href="http://cfdev.fr" class="cfdev" title="mphoto template by www.cfdev.fr under GPLV3"> </a></small>
					<?php $plxShow->httpEncoding() ?>
				</p>
			</div>
		</div>
	</footer>
    <!-- JavaScript
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?php $plxShow->template(); ?>/css/dist/js/bootstrap.min.js"></script>
	<script src="<?php $plxShow->template(); ?>/js/contact.js"></script>
	<script src="<?php $plxShow->template(); ?>/js/form.js"></script>
	<script src="<?php $plxShow->template(); ?>/js/img.js"></script>
	<!-- ZOOMBOX -->
	<script src="<?php $plxShow->template(); ?>/js/zoombox/zoombox.js"></script>
	<script type="text/javascript">jQuery(function($){	$('a.zoombox').zoombox();});</script>
</body>

</html>
