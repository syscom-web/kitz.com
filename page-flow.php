<!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_template_part("php-recruit/_recruit-head"); ?>
</head>

<body>
	<div class="p-flow">

		<!-- ヘッダー -->
		<?php get_template_part("php-recruit/_recruit-header"); ?>

		<!-- 新卒採用トップ -->
		<?php get_template_part("php-recruit/_recruit-top"); ?>

		<!-- 新卒採用情報リンク一覧 -->
		<div class="c-inner u-page-px u-page-pt-80">
			<?php get_template_part("php-recruit/_recruit-link"); ?>
		</div>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
		<?php endwhile;
		endif; ?>

		<!-- フッター -->
		<?php get_template_part("php-recruit/_recruit-footer"); ?>
	</div>

	<?php wp_footer(); ?>
</body>

</html>