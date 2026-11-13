<?php
/**
 * Template Name: 採用情報 会社を知る
 *
 */
?><!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_template_part("php-recruit/_recruit-head"); ?>
  
</head>

<body>
	<div class="p-top">

		<!-- ヘッダー -->
		<?php get_template_part("php-recruit/_recruit-header"); ?>
    <link rel='stylesheet' href='/cms/wp-content/themes/kitz/css/style_m2.css' type='text/css' media='all' />
    <div class="c-recruit-top">
		<div class="c-recruit-top__bg is-company"></div>
	<div class="c-inner c-recruit-top__inner">

		<div class="c-recruit-top__mv">
			<img src="/cms/wp-content/themes/kitz/images/m/company/company-sec01-img01.jpg" alt="仕事を知る">
		</div>
		<div class="c-recruit-top__txt">
			<span class="c-recruit-top__txt--strong is-company">COMPANY</span>
			<h1>会社を知る</h1>
		</div>
		<div class="c-recruit-top__ico is-company">
			<img src="/cms/wp-content/themes/kitz/images/m/company/company-sec01-ico02.png" alt="会社を知るアイコン">
		</div>

		<div class="c-recruit-top__breadcrumb u-breadcrumb-font">
			<!-- Breadcrumb NavXT 6.6.0 -->
<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to ホーム." href="/recruit/" class="home" ><span property="name">ホーム</span></a><meta property="position" content="1"></span> &gt; <span property="itemListElement" typeof="ListItem"><span property="name" class="post post-page current-item">会社を知る</span><meta property="url" content="/recruit/work/"><meta property="position" content="3"></span>		</div>

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