<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_template_part("php-recruit/_recruit-head"); ?>
</head>

<body>
    <div class="p-career">

        <!-- ヘッダー -->
        <?php get_template_part("php-recruit/_recruit-header"); ?>

        <!-- キャリア採用情報トップ -->
        <?php get_template_part("php-recruit/_recruit-top"); ?>

		<!-- メインコンテンツ -->
		<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>

        <!-- フッター -->
        <?php get_template_part("php-recruit/_recruit-footer"); ?>
    </div>

    <?php wp_footer(); ?>
</body>

</html>