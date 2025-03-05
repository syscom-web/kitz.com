<?php
/*
Template Name: 須﨑選手大会スケジュール
*/
?>
<?php get_template_part('susaki/header-susaki'); ?>

<main class="p-page--schedule">
	<article>
		<div class="p-common__titlearea">
			<h1 class="p-common__titlearea--title"><img src="<?php echo get_theme_file_uri('/susaki/images/schedule-title-01.svg') ?>" alt="Tournament Schedule"></h1>
		</div>
		<p class="p-common__breadcrumbs"><span><span><a href="/en/susaki/">HOME</a> <span class="p-common__breadcrumbs--delimiter">&gt;</span> <span class="breadcrumb_last" aria-current="page"><?php the_title(); ?></span></span></span></p>
		<?php 
		$count = 0;
		$the_query = new WP_Query( array( 'post_type' => 'schedule', ) ); ?>
		<?php if ( $the_query->have_posts() ) : ?>
		<ul class="p-page--schedule__list u-mt100">
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
		$count++; $class = ( $count == 1 ) ? ' open' : ''; ?>
		<li><span class="p-page--schedule__list--li<?php echo $class; ?>"><?php the_title(); ?><button>button</button></span>
		<?php $group = get_field('schedule_fileds'); if ( $group ) : ?>
			<ul class="p-page--schedule__list--sub">
			<?php foreach ( $group as $value ) : $value = $value['months']; ?>
				<li class="p-page--schedule__list--sub__li"><time datetime="<?php echo $value['year'] ?>-<?php echo sprintf('%02d', $value['month']) ?>"><?php echo $value['year'] ?>/<?php echo $value['month'] ?></time><span class="p-page--schedule__list--sub__text"><?php echo $value['text'] ?></span><span class="p-page--schedule__list--sub__result"><?php echo ( $value['result'] ) ? '<span>'.$value['result'].'</span>' : ''; ?></span></li>
			<?php endforeach; ?>
			</ul></li>
		<?php else: ?>
		</li>
		<?php endif; endwhile; ?>
		</ul>
		<?php endif; wp_reset_postdata(); ?>
	</article>
</main>

<?php get_template_part('susaki/footer-susaki'); ?>