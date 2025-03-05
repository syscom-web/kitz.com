<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="/favicon.ico">

	<link rel='stylesheet' id='mytheme_style_slick-css' href='<?php echo get_theme_file_uri('/susaki/css/slick.css?ver=1.0') ?>' type='text/css' media='all' />
	<link rel='stylesheet' id='mytheme_style-css' href='<?php echo get_theme_file_uri('/susaki/css/style.css?ver=1.1') ?>' type='text/css' media='all' />
	<script type='text/javascript' defer src='<?php echo get_theme_file_uri('/susaki/js/jquery-3.6.1.min.js?ver=1.0') ?>'></script>
	<script type='text/javascript' defer src='<?php echo get_theme_file_uri('/susaki/js/slick.min.js?ver=1.0') ?>'></script>
	<script type='text/javascript' defer src='<?php echo get_theme_file_uri('/susaki/js/common.js?ver=1.1') ?>'></script>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body>
<?php edit_post_link('Editer'); ?>
<header class="l-header">
	<<?php echo (is_page('susaki')) ? 'h1' : 'div'; ?> class="l-header__logo"><a href="<?php echo esc_url( home_url('/susaki/') ) ?>"><img src="<?php echo get_theme_file_uri('/susaki/images/common/logo.png') ?>" alt="Yui Susaki Special Support Site"></a></<?php echo (is_page('susaki')) ? 'h1' : 'div'; ?>>
	<div class="l-header__menu"><span></span><span></span><span></span></div>
	<nav class="l-header__nav">
		<ul>
			<li<?php echo (is_page('susaki')) ? ' class="current_page_item"' : '' ?>><a href="<?php echo esc_url( home_url('/en/susaki/') ) ?>" aria-current="page">TOP</a></li>
			<li<?php echo (is_page('gallery')) ? ' class="current_page_item"' : '' ?>><a href="<?php echo esc_url( home_url('/en/susaki/gallery/') ) ?>">Photo Gallery</a></li>
			<li<?php echo (is_page('schedule')) ? ' class="current_page_item"' : '' ?>><a href="<?php echo esc_url( home_url('/en/susaki/schedule/') ) ?>">Tournament Schedule</a></li>
		</ul>
		<a href="https://forms.office.com/Pages/ResponsePage.aspx?id=JYud3M69r0uTCxAwGVp-qqzYmmJY-qdMhMsz9MVVIsBUNDg3V0FYMjRUS0VITjREU1NWMDZNWjFSTC4u" target="_blank" class="l-header__nav--button">Messages of support and acceptance of interviews</a>
		<a href="/" target="_blank">
			<picture>
				<source srcset="<?php echo get_theme_file_uri('/susaki/images/common/logo-small-white.svg') ?>" media="(max-width: 1100px)">
				<img src="<?php echo get_theme_file_uri('/susaki/images/common/logo-small.svg') ?>" alt="KITZ Corporate Site" class="l-header__nav--img">
			</picture>
		</a>
	</nav>
</header>
