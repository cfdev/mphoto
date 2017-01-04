<?php if(!defined('PLX_ROOT')) exit; ?>

	<?php if($plxShow->plxMotor->plxRecord_coms): ?>

	<div id="comments">

		<h2>
			<?php echo $plxShow->artNbCom(); ?>
		</h2>

		<?php while($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires ?>

		<?php
		# Image gravatar
		ob_start();
		$plxShow->template();
		$template_path = ob_get_clean();
		$email = $plxShow->plxMotor->plxRecord_coms->f('mail');
		$default = $template_path.'/img/user.png';
		$size = 50;	
		$grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;			
		?>
	
		<div id="<?php $plxShow->comId(); ?>" class="comment">
			<blockquote>
			<div class="row">
				<div class="col-md-1">				
						<!-- Image gravatar -->
						<img src="<?php echo $grav_url; ?>" alt="" />	
				</div>
				<div class="col-md-11">	
					<p class="info_comment">				
						<a class="num-com" href="<?php $plxShow->ComUrl(); ?>" title="#<?php echo $plxShow->plxMotor->plxRecord_coms->i+1 ?>">#<?php echo $plxShow->plxMotor->plxRecord_coms->i+1 ?></a>
						<time datetime="<?php $plxShow->comDate('#num_year(4)-#num_month-#num_day #hour:#minute'); ?>"><?php $plxShow->comDate('#day #num_day #month #num_year(4) &#64; #hour:#minute'); ?></time>
						<?php $plxShow->comAuthor('link'); ?>
						<?php $plxShow->lang('SAID'); ?> :
					</p>
					<p class="content_com type-<?php $plxShow->comType(); ?>"><?php $plxShow->comContent(); ?></p>
				</div>
			</div>
			</blockquote>
		</div>

		<?php endwhile; # Fin de la boucle sur les commentaires ?>

		<div class="rss">
			<?php $plxShow->comFeed('rss',$plxShow->artId()); ?>
		</div>

	</div>

	<?php endif; ?>

	<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>

	<div id="form">

		<h2>
			<?php $plxShow->lang('WRITE_A_COMMENT') ?>
		</h2>

		<form action="<?php $plxShow->artUrl(); ?>#form" method="post">
			<fieldset>
			

				<p>					
					<label for="id_name"><?php $plxShow->lang('FORM_NAME') ?> :</label>
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
						<input id="id_name" name="name" type="text" size="20" value="<?php $plxShow->comGet('name',''); ?>" maxlength="30"  class="form-control" placeholder="<?php $plxShow->lang('NAME') ?>" aria-describedby="basic-addon1" />
					</div>
				</p>
				<p>
					<label for="id_site"><?php $plxShow->lang('FORM_WEBSITE') ?> :</label>
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></span>
						<input id="id_name" name="site" type="text" size="20" value="<?php $plxShow->comGet('site',''); ?>" maxlength="30"  class="form-control" placeholder="<?php $plxShow->lang('WEBSITE') ?>" aria-describedby="basic-addon1" />
					</div>
				</p>
				<p>
					<label for="id_mail"><?php $plxShow->lang('FORM_EMAIL') ?> :</label>
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1">@</span>
						<input id="id_name" name="mail" type="text" size="20" value="<?php $plxShow->comGet('mail',''); ?>" maxlength="30"  class="form-control" placeholder="<?php $plxShow->lang('EMAIL') ?>" aria-describedby="basic-addon1" />
					</div>
				</p>
				<p>
					<label for="id_content" class="lab_com"><?php $plxShow->lang('COMMENT') ?> :</label>
					<textarea id="id_content" name="content" cols="35" rows="6" placeholder="Message..."><?php $plxShow->comGet('content',''); ?></textarea>
				</p>
				
				<?php $plxShow->comMessage('<p  id="com_message" class="com-alert"><strong>#com_message</strong></p>'); ?>				
		
				<?php if($plxShow->plxMotor->aConf['capcha']): ?>
				<p>
					<label for="id_rep"><?php echo $plxShow->lang('ANTISPAM_WARNING') ?></label>
					<?php $plxShow->capchaQ(); ?> :
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></span>
						<input id="id_rep" name="rep" type="text" size="2" maxlength="1"   class="form-control" placeholder="<?php echo $plxShow->lang('ANTISPAM') ?>" aria-describedby="basic-addon1" />
					</div>				
				</p>
				<?php endif; ?>
				<p>
					<input type="submit" value="<?php $plxShow->lang('SEND') ?>" />
				</p>
			</fieldset>
		</form>

	</div>

	<?php else: ?>

		<p>
			<?php $plxShow->lang('COMMENTS_CLOSED') ?>.
		</p>

	<?php endif; # Fin du if sur l'autorisation des commentaires ?>
