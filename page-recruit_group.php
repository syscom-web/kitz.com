<?php
/**
 * Template Name: 採用情報 キッツグループ採用情報
 *
 */
?><!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_template_part("php-recruit/_recruit-head"); ?>
  <link rel='stylesheet' href='/cms/wp-content/themes/kitz/css/style_m2.css' type='text/css' media='all' />
</head>

<body>
	<div class="p-top">

		<!-- ヘッダー -->
		<?php get_template_part("php-recruit/_recruit-header"); ?>
    
    <div class="c-recruit-top">
		<div class="c-recruit-top__bg is-group"></div>
	<div class="c-inner c-recruit-top__inner">

		<div class="c-recruit-top__mv">
			<img src="/cms/wp-content/themes/kitz/images/m/group/group-sec01-img01.jpg" alt="仕事を知る">
		</div>

    <div class="c-recruit-top__txt">
			<span class="c-recruit-top__txt--strong is-group">KITZ GROUP</span>
			<h1>キッツグループ採用情報</h1>
		</div>
    
		<div class="c-recruit-top__ico is-group">
			<img src="/cms/wp-content/themes/kitz/images/m/group/group-sec01-ico02.png" alt="会社を知るアイコン">
		</div>

		<div class="c-recruit-top__breadcrumb u-breadcrumb-font">
			<!-- Breadcrumb NavXT 6.6.0 -->
<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to ホーム." href="/recruit/" class="home" ><span property="name">ホーム</span></a><meta property="position" content="1"></span> &gt; <span property="itemListElement" typeof="ListItem"><span property="name" class="post post-page current-item">キッツグループ採用情報</span><meta property="url" content="/recruit/work/"><meta property="position" content="3"></span>		</div>

	</div>
</div>
    


		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
		<?php endwhile;
		endif; ?>

</div>

	<!-- フッター -->
	<?php get_template_part("php-recruit/_recruit-footer"); ?>

	<?php wp_footer(); ?>
</body>

</html>