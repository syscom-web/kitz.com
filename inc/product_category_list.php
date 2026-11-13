<!-- newsproduct_category_list -->
<ul class="productlist_module">
<?php
$current_ID = $post->ID;
$terms = get_the_terms($post->ID, 'news_cate');
$post_taxonomy = $terms[0]->taxonomy;
$post_term = $terms[0]->slug;
// 親記事と同じタグを持つ記事を抽出
if ($post->post_parent) {
	$post_term = get_post($post->post_parent)->post_name;
} else {
	$post_term = $post->post_name;
}
$post_taxonomy = 'news_cate';
$paged = get_query_var( 'paged' );
$tagged_query = new WP_Query(
	array(
		'post_type'      => 'product',
		'posts_per_page' => -1,
		'paged'          => $paged,
		'taxonomy'       => $post_taxonomy,
		'term'           => $post_term,
	)
);
while ( $tagged_query->have_posts() ) :
	$tagged_query->the_post();
	//if ( $post->post_parent == 0 ) continue;
	if ( $post->ID == $current_ID ) continue;
	$thumbnail_id = get_post_thumbnail_id();
	$thumbnail_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
	$thumbnail_caption = get_post($thumbnail_id)->post_excerpt;

?>
	<li>
		<a href="<?php the_permalink(); ?>" target="_top">
			<p class="photo">
				<img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php echo esc_attr($thumbnail_alt); ?>">
			</p>

			<p class="title"><?php the_title() ?></p>
			<p class="text"><?php echo $thumbnail_caption; ?></p>
		</a>
	</li>
<?php
endwhile;
wp_reset_query();
?>

</ul>
