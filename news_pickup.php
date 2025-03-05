<?php 

	$res[0] = $_POST['input1'];
	
	$joken= array(
						'post_type' => array('news'),
						'paged' => $paged,
						'posts_per_page' => 10
					);
					$customPosts = query_posts($joken);
	echo(json_encode($res));
?>