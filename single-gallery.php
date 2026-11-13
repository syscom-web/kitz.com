
<?php
if ( is_singular('gallery') ) {
	function single_susaki_gallery( $output, $attr, $instance ) {
		$ids = explode(',', $attr['ids']);
		$images = array();
		foreach( $ids as $id ) {
			if ( wp_get_attachment_image($id) ) {
				$wp_rec = get_post( $id );
				$images[] = [ wp_get_attachment_image_src($id, 'thumb-1000')[0], wp_get_attachment_image_src($id, 'thumb-180')[0], $wp_rec->post_excerpt ];
			}
		}
		$output = '<ul class="p-page--gallery__slider">';
		foreach( $images as $image ) {
			$output .= '<li><img src="'.$image[0].'" alt="'.$image[2].'"></li>';
		}
		$output .= '</ul>';
		$output .= '<ul class="p-page--gallery__slider--thumbnail u-mt40">';
		foreach( $images as $image ) {
			$output .= '<li><img src="'.$image[1].'" alt="'.$image[2].'"></li>';
		}
		$output .= '</ul>';
		return $output;
	}
	add_filter( 'post_gallery', 'single_susaki_gallery', 10, 3 );
}
?>

<?php get_template_part('susaki/header-susaki'); ?>

<main class="p-page--gallery__single">
	<article>
		<div class="p-common__titlearea">
			<h2 class="p-common__titlearea--title"><img src="<?php echo get_theme_file_uri('/susaki/images/gallery-title-01.svg') ?>" alt="フォトギャラリー"></h2>
		</div>
		<p class="p-common__breadcrumbs"><span><span><a href="/susaki/">ホーム</a> <span class="p-common__breadcrumbs--delimiter">&gt;</span> <a href="/susaki/gallery/">フォトギャラリー</a> <span class="p-common__breadcrumbs--delimiter">&gt;</span> <span class="breadcrumb_last" aria-current="page"><?php the_title(); ?></span></span></span></p>
		<?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
			<h1 class="u-tac u-mt70"><?php the_title() ?></h1>
			<div class="u-mt15"><?php remove_filter('the_content', 'wpautop'); the_content(); ?></div>
		<?php endwhile; endif; ?>
	</article>

	<?php $the_query = new WP_Query( array( 'post_type' => 'gallery', 'post__not_in' => array( get_the_ID() ) ) ); if ( $the_query->have_posts() ) : ?>
		<h2 class="p-common__titlearea--title u-mt95"><img src="<?php echo get_theme_file_uri('/susaki/images/gallery-title-02.svg') ?>" alt="Others Photo"></h2>
		<ul class="p-page--gallery__single--buttons u-mt60">
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<li><a href="<?php the_permalink() ?>" class="c-button01"><?php the_title(); ?></a></li>
		<?php endwhile; ?>
		</ul>
	<?php endif; wp_reset_postdata(); ?>
</main>

<?php get_template_part('susaki/footer-susaki'); ?>
