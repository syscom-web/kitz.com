<!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_template_part("php-recruit/_recruit-head"); ?>
</head>

<body>
	<div class="p-top">

		<!-- ヘッダー -->
		<?php get_template_part("php-recruit/_recruit-header"); ?>

		<!-- メインコンテンツエリア ============================================= -->
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
		<?php endwhile;
		endif; ?>

		<div class="p-top-person__main">
			<h3 class="p-top-person__main-title">
				<img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/common/cmn-bg-title01.gif'); ?>" alt="社員が語るキッツ">
			</h3>
			<div class="p-top-person__list"><?php get_template_part("php-recruit/_person-list"); ?></div>
		</div>

		<div class="p-top-person__btn c-btn c-btn--pink">
			<a href="<?php echo esc_url(home_url() . '/recruit/person/interview'); ?>" class="u-href-100">詳しく見る</a>
		</div>

	</div>

	</section>
	<!-- ========================================================= -->

	<!-- フッター -->
	<?php get_template_part("php-recruit/_recruit-footer"); ?>
	</div>
	<!-- /.p-top -->

	<?php wp_footer(); ?>
</body>

</html>