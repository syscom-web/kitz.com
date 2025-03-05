<?php

/**
 * Template Name: 緊急のお知らせ
 *
 */
?>

<?php get_header(); ?>

<?php
if (have_posts()) :
	while (have_posts()) :
		the_post(); ?>

		<main class="p-main">
			<section class="p-page-mv">
				<div class="p-page-mv__inner">
					<h1 class="p-page-mv__ttl p-page-mv__ttl--business"><?php the_title(); ?></h1>
				</div>
			</section>
			<!-- /.p-page-mv -->
			<div class="p-page-valve valve-sub">
				<div class="c-breadcrumb">
					<ul class="c-breadcrumb__list">
						<li class="c-breadcrumb__item"><a title="Home" href="<?php echo home_url() ?>/">Home</a></li>
						<li class="c-breadcrumb__item"><?php the_title(); ?></li>
					</ul>
				</div>
				<section class="p-page-news">
					<div class="p-page-news__inner">
						<div class="p-page-news--detail">
							<article class="p-page-news--detail__entry">
								<div class="p-page-news--detail__entry__body">
									<?php the_content(); ?>
								</div>
							</article>
						</div><!-- /.p-page-news--detail -->
					</div><!-- /.p-page-news__inner -->
				</section><!-- /.p-page-news -->
			<?php endwhile; ?>
		<?php endif; ?>
		<?php get_footer(); ?>