<?php
/*
Template Name: 須﨑選手フォトギャラリー
*/
?>
<?php get_template_part('susaki/header-susaki'); ?>

<main class="p-page--gallery">
	<article>
		<div class="p-common__titlearea">
			<h1 class="p-common__titlearea--title"><img src="<?php echo get_theme_file_uri('/susaki/images/gallery-title-01.svg') ?>" alt="Photo Gallery"></h1>
		</div>
		<p class="p-common__breadcrumbs"><span><span><a href="/en/susaki/">HOME</a> <span class="p-common__breadcrumbs--delimiter">&gt;</span> <span class="breadcrumb_last" aria-current="page"><?php the_title(); ?></span></span></span></p>
		<?php $the_query = new WP_Query( array( 'post_type' => 'gallery' ) ); if ( $the_query->have_posts() ) : ?>
		<ul class="p-page--gallery__list u-mt100">
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<li><a href="<?php the_permalink() ?>"><figure><?php the_post_thumbnail('thumb-380'); ?><figcaption><?php the_title(); ?></figcaption></figure></a></li>
		<?php endwhile; ?>
		</ul>
		<?php endif; wp_reset_postdata(); ?>
	</article>
</main>

<?php get_template_part('susaki/footer-susaki'); ?>
