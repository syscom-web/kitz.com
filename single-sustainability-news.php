<?php get_header(); ?>
    <section class="p-page-mv">
			<div class="p-page-mv__inner">
			  <h1 class="p-page-mv__ttl p-page-mv__ttl--news">新着情報</h1>
			</div>
		</section><!-- /.p-page-mv -->
		<div class="p-page-valve valve-sub">
		<div class="c-breadcrumb">
        <ul class="c-breadcrumb__list">
          <li class="c-breadcrumb__item"><a title="ホーム" href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a></li>
          <li class="c-breadcrumb__item"><a title="サステナビリティ" href="<?php echo esc_url( home_url( '/' ) ); ?>sustainability/">サステナビリティ</a></li>
					<li class="c-breadcrumb__item">新着情報</li>
        </ul>
      </div>
    <section class="p-page-news">
      <div class="p-page-news__inner">
				<div class="p-page-news--detail">
					<article class="p-page-news--detail__entry">
						<div class="p-page-news--detail__entry__head">
							<time datetime="<?php the_time('Y年m月d日') ?>" class="p-page-news--detail__entry__head__date"><?php the_time('Y年m月d日') ?></time>
							<h2 class="p-page-news--detail__entry__head__ttl"><?php the_title(); ?></h2>
						</div>
						<div class="p-page-news--detail__entry__body">
							<?php the_content(); ?>
						</div>
						<div class="p-page-news--detail__entry__btn"><a href="<?php echo esc_url( home_url( '/' ) ); ?>sustainability/" class="c-btn--type01">サステナビリティ</a></div>
					</article>
				</div><!-- /.p-page-news--detail -->    
      </div><!-- /.p-page-news__inner -->
    </section><!-- /.p-page-news -->
<?php get_footer(); ?>
