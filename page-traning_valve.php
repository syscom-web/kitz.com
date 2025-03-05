<?php
/**
 * Template Name: バルブの基礎 -集合研修-
 *
 */
?>
<?php get_header(); ?>
  <main class="p-main">
    <section class="p-page-mv">
      <div class="p-page-mv__inner">
        <h1 class="p-page-mv__ttl p-page-mv__ttl--business">バルブの基礎 - 集合研修 -</h1>
      </div>
    </section><!-- /.p-page-mv -->
    <div class="p-page-valve valve-sub">
      <div class="c-breadcrumb">
        <ul class="c-breadcrumb__list">
          <li class="c-breadcrumb__item"><a title="ホーム" href="/">ホーム</a></li>
					<li class="c-breadcrumb__item"><a title="バルブの技術研修" href="/training/">バルブの技術研修</a></li>
          <li class="c-breadcrumb__item">バルブの基礎 - 集合研修 -</li>
        </ul>
      </div>
      <section class="p-sustainability p-training">
        <div class="p-page-menu p-sustainability-menu p-training-menu">
					<ul>
						<li><a href="/training/valve/" class="current">バルブの基礎<br>- 集合研修 -</a></li>
						<li><a href="/training/valve_online/">バルブの基礎<br>- オンライン研修 -</a></li>
						<li><a href="/training/automatic/">自動弁の基礎講座<br>- 集合研修 -</a></li>
						<li><a href="/training/automatic_online/">自動弁の基礎講座<br>- オンライン研修 -</a></li>
						<li><a href="/training/inquiry/">お問い合わせ</a></li>
					</ul>
				</div>
				<section class="p-training__container p-training-valve p-training-home">
					<div class="p-training-valve__intro">
						<p><?php the_field('training-intro_txt'); ?></p>
					</div>
          <div class="p-training-valve__container">
            <div class="p-training-valve__container--box">
							<h2 class="p-sustainability-ttl__h2">開催期日</h2>
							<ul class="valve-date_list">
							<?php if( have_rows('training-list_date') ): ?>
							<?php while ( have_rows('training-list_date') ) : the_row(); ?>
								<li><?php the_sub_field('training-date'); ?></li>
								<?php endwhile; ?><?php endif; ?>
							</ul>
						</div>
						<?php if( have_rows('training-detail_wrap') ): ?>
						<?php while ( have_rows('training-detail_wrap') ) : the_row(); ?>
						<div class="p-training-valve__container--box">
							<h2 class="p-sustainability-ttl__h2"><?php the_sub_field('training-detail_ttl'); ?></h2>
							<?php the_sub_field('training-detail_contents'); ?>
						</div>
						<?php endwhile; ?><?php endif; ?>
						
						<div class="p-training-valve__container--box">
							<h2 class="p-sustainability-ttl__h2">宿泊場所</h2>
							<?php if( have_rows('training-place_wrap') ): ?>
							<?php while ( have_rows('training-place_wrap') ) : the_row(); ?>
							<?php the_sub_field('training-place_contents'); ?>
							<ul class="valve-date_list u-mt20">
							<?php if( have_rows('training-place_price-list') ): ?>
							<?php while ( have_rows('training-place_price-list') ) : the_row(); ?>
								<li><?php the_sub_field('training-place_price'); ?></li>
								<?php endwhile; ?><?php endif; ?>
							</ul>
							<div class="u-mt30"><?php the_sub_field('training-place_note'); ?></div>
							<?php endwhile; ?><?php endif; ?>
						</div>
						
						<div class="p-training-valve__container--box">
							<h2 class="p-sustainability-ttl__h2">注意事項</h2>
							<?php the_field('training-attention'); ?>
						</div>
					
						<div class="p-training-valve__container--box training-schedule">
							<h2 class="p-sustainability-ttl__h2"><?php the_field('training-schedule_title'); ?></h2>
							<?php if( have_rows('training-schedule_wrap') ): ?>
							<?php while ( have_rows('training-schedule_wrap') ) : the_row(); ?>
							<div class="c-table--scroll">
							<table class="c-table--type02">
								<thead>
									<tr>
										<th colspan="2"><?php the_sub_field('training-schedule_ttl'); ?></th>
									</tr>
								</thead>
								<tbody>
									<?php if( have_rows('training-schedule_table') ): ?>
									<?php while ( have_rows('training-schedule_table') ) : the_row(); ?>
									<tr>
										<td><?php the_sub_field('training-schedule_caption'); ?></td>
										<td><?php the_sub_field('training-schedule_contents'); ?></td>
									</tr>
									<?php endwhile; ?><?php endif; ?>
								</tbody>
							</table>
							</div>
							<?php endwhile; ?><?php endif; ?>
						</div>
          </div>
					<div class="p-training-home__menu">
						<div>
							<h2 class="p-sustainability-ttl__h2">バルブの基礎 - 集合研修 - 講座お申し込み</h2>
							<p>詳細は下記の「お申し込みフォーム」よりお申し込みください。</p>
							<ul>
								<li><a href="/training/valve/apply/?post_id=<?php echo get_the_ID();?>" class="c-btn--type01">お申し込みフォーム</a></li>
							</ul>
						</div>
					</div>
				</section>
			</section>
			<?php get_footer(); ?>