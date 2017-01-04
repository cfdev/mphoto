<?php if (!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html>
<!--
cfdev template
website: www.cfdev.fr
template Name: mphoto
Licence: GPLV3
  -->
<html lang="<?php $plxShow->defaultLang() ?>">
<head>
	<meta charset="<?php $plxShow->charset('min'); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0">
	<title><?php $plxShow->pageTitle(); ?></title>
	<?php $plxShow->meta('description') ?>
	<?php $plxShow->meta('keywords') ?>
	<?php $plxShow->meta('author') ?>
	<link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />

	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/animate.css" media="screen"/>
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/dist/css/bootstrap.min.css" media="screen"/>
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/dist/css/bootstrap-theme.min.css" media="screen"/>
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/font-awesome.min.css" media="screen"/>
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/js/zoombox/zoombox.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/mstyle.css" media="screen"/>

	<?php $plxShow->templateCss() ?>
	<?php $plxShow->pluginsCss() ?>
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
</head>

<body id="top">

	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	    <div class="container-fluid">
        <div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
			</button>

			<div class="site-logo">
				<a href="<?php $plxShow->racine(); ?>">
					<img src="<?php $plxShow->template(); ?>/img/logo.png" height="50px" alt="logo" class="logo"/>
					<h1 class="mainTitle"><?php $plxShow->mainTitle(); ?></h1>
				</a>
			</div>


        </div>
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<?php $plxShow->staticList('','<li id="#static_id" class="#static_status"><a href="#static_url" class="#static_status text-uppercase bold" title="#static_name">#static_name</a></li>'); ?>
				<?php $plxShow->pageBlog('<li id="#page_id"><a class="#page_status text-uppercase bold" href="#page_url" title="Revue de presse">Revue de presse</a></li>'); ?>
				<?php $plxShow->pageBlog() ?>
			</ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

	<div class="container fontWhite padding60Top">
