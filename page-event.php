<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_template_part("php-recruit/_recruit-head"); ?>
</head>

<body>
  <div class="p-event">

    <!-- ヘッダー -->
    <?php get_template_part("php-recruit/_recruit-header"); ?>

    <!-- 新卒採用トップ -->
    <?php get_template_part("php-recruit/_recruit-top"); ?>

    <!-- 新卒採用情報リンク一覧 -->
    <div class="c-inner u-page-px u-page-pt-80">
      <?php get_template_part("php-recruit/_recruit-link"); ?>
    </div>

    <!-- メインコンテンツ -->
    <section class="p-event__main c-fade-in">
      <?php
      $array_detail = [
        ["実施時間", "13:00～17:00"],
        ["実施場所", "WEB（PCより参加をお願い致します。）"],
        ["体験できる仕事", "メーカーの技術職（理系）、営業職（文系）"],
        ["募集人数", "10名前後/回"],
        ["資格・対象", "高専・大学1年生以上。理系のみ対象あり"],
        ["報酬・交通費", "オンライン開催の為ためなし。"],
      ];
      ?>
      <div class="c-inner u-page-px u-page-py u-page-bb">

        <h1 class="u-page-title"><?php the_title(); ?></h1>
        <div class="p-event__txt"><?php echo the_field('lead'); ?></div>

        <div class="p-event__course u-page-bb">
          <ul class="p-event-course">
            <?php if (have_rows("event_course")) : $counter = 1; ?>
              <?php while (have_rows("event_course")) : the_row(); ?>
                <li class="p-event-course__item">
                  <div class="p-event-course__num"><?php the_sub_field("event_course_target"); ?></div>
                  <p class="p-event-course__title"><?php the_sub_field("event_course_name"); ?></p>
                  <div class="p-event-course__content">
                    <dl class="p-event-course__schedule">
                      <dt class="p-event-course__schedule-title">日程</dt>
                      <dd class="p-event-course__schedule-date"><?php the_sub_field("event_course_schedule"); ?></dd>
                    </dl>
                    <p class="p-event-course__txt"><?php the_sub_field("event_course_desc"); ?></p>
                  </div>
                </li>
            <?php
                $counter++;
              endwhile;
            endif; ?>
          </ul>
        </div>
        <!--
				<div class="p-event__detail p-event-detail">
					<p class="p-event-detail__title">詳細情報（全コース共通）</p>
					<dl class="p-event-detail__list">
						<?php for ($i = 0; $i < count($array_detail); $i++) :
              $item = $array_detail[$i];
              $num = $i + 1;
            ?>
							<div class="p-event-detail__item0<?php echo $num; ?>">
								<dt class="p-event-detail__item-title"><?php echo $item[0]; ?></dt>
								<dd class="p-event-detail__item-desc"><?php echo $item[1]; ?></dd>
							</div>
						<?php endfor; ?>
					</dl>
				</div>
        -->
        <!-- <div class="p-event__entry p-event-entry">
					<p class="p-event-entry__txt01">エントリーはこちら</p>
					<p class="p-event-entry__txt02">
						リクナビ2023、マイナビ2023、または下記バナーより直接エントリーしてください。<br>最新のイベント情報をご案内しますので、ぜひエントリーをお願いします!!
					</p>
					<div class="p-event-entry__link">
						<?php get_template_part("php-recruit/_entry-link"); ?>
					</div>
				</div> -->
        <?php the_content(); ?>

        <div class="p-event__main__btn c-btn c-btn--blue">
          <a href="<?php echo esc_url(home_url() . "/recruit/information"); ?>" class="u-href-100">一覧に戻る</a>
        </div>

      </div>

    </section>

    <!-- フッター -->
    <?php get_template_part("php-recruit/_recruit-footer"); ?>
  </div>
  <?php wp_footer(); ?>
</body>

</html>