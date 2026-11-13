<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_template_part("php-recruit/_recruit-head"); ?>
</head>

<body>
  <div class="p-number">

    <!-- ヘッダー -->
    <?php get_template_part("php-recruit/_recruit-header"); ?>

    <!-- トップ -->
    <div class="p-number__top">
      <div class="p-number-top">
        <h1>
          <picture>
            <source srcset="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec01-mv01.png'); ?>" media="(min-width: 768px)">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec01-mv02.png'); ?>" alt="数字で見るキッツ">
          </picture>
        </h1>
        <!-- パンくずリスト -->
        <div class="p-number-top__breadcrumb">
          <div class="c-inner u-breadcrumb-font">
            <?php if (function_exists('bcn_display')) {
              bcn_display();
            }
            ?>
          </div>
        </div>
      </div>
    </div>

    <!-- キッツってこんな会社 -->
    <section class="p-number__about">
      <?php $about = get_field("number_about"); ?>
      <div class="p-number-about c-inner u-page-px">
        <h2 class="p-number-about__title p-number__title"><span>キッツってこんな会社</span></h2>
        <div class="p-number-about__content">
          <!-- 男女比 -->
          <div class="p-number-about__gender">
            <div class="p-number__img">
              <picture>
                <source srcset="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec02-img01.png?v=20221215'); ?>" media="(min-width: 768px)">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec02-img02.png?v=20221215'); ?>" alt="正社員の男女比">
              </picture>
            </div>
            <p class="p-number-about__gender--woman">
              <span class="p-number__txt p-number__txt--24">女性</span>
              <span class="p-number__value is-counter"><?php echo number_format($about["number_about_woman"]); ?></span>
              <span class="p-number__txt">人</span>
            </p>
            <p class="p-number-about__gender--man">
              <span class="p-number__txt p-number__txt--24">男性</span>
              <span class="p-number__value is-counter js-number-value"><?php echo number_format($about["number_about_man"]); ?></span>
              <span class="p-number__txt">人</span>
            </p>
          </div>
          <!-- 年間休日数 -->
          <div class="p-number-about__holiday">
            <div class="p-number__img">
              <picture>
                <source srcset="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec02-img03.png'); ?>" media="(min-width: 768px)">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec02-img04.png'); ?>" alt="年間休日数">
              </picture>
            </div>
            <p class="p-number-about__holiday--txt">
              <span class="p-number__txt">年間</span>
              <span class="p-number__value is-counter"><?php echo number_format($about["number_about_holiday"]); ?></span>
              <span class="p-number__txt">日</span>
            </p>
          </div>
          <!-- 育休取得人数 -->
          <div class="p-number-about__childcare">
            <div class="p-number__img">
              <picture>
                <source srcset="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec02-img05.png'); ?>" media="(min-width: 768px)">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec02-img06.png'); ?>" alt="育休取得率">
              </picture>
            </div>
            <p class="p-number-about__childcare--woman">
              <span class="p-number__txt">女性</span>
              <span class="p-number__value is-counter"><?php echo number_format($about["number_about_childcare_woman"]); ?></span>
              <span class="p-number__txt">％</span>
            </p>
            <p class="p-number-about__childcare--man">
              <span class="p-number__txt">男性</span>
              <span class="p-number__value is-counter"><?php echo number_format($about["number_about_childcare_man"]); ?></span>
              <span class="p-number__txt">％</span>
            </p>
          </div>
          <!-- 平均残業時間 -->
          <div class="p-number-about__overtime">
            <div class="p-number__img">
              <picture>
                <source srcset="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec02-img09.png'); ?>" media="(min-width: 768px)">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec02-img10.png'); ?>" alt="平均残業時間">
              </picture>
            </div>
            <p class="p-number-about__overtime--txt">
              <span class="p-number__value is-counter"><?php echo number_format($about["number_about_overtime"]); ?></span>
              <span class="p-number__txt">時間／月</span>
            </p>
          </div>
          <!-- 在職率 -->
          <div class="p-number-about__retention">
            <div class="p-number__img">
              <picture>
                <source srcset="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec02-img11.png'); ?>" media="(min-width: 768px)">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec02-img12.png'); ?>" alt="新入社員 3年後の在職率">
              </picture>
            </div>
            <p class="p-number-about__retention--txt">
              <span class="p-number__value is-counter"><?php echo number_format($about["number_about_retention_rate"]); ?></span>
              <span class="p-number__txt">％</span>
            </p>
          </div>
          <!-- 年度別採用人数 -->
          <div class="p-number-about__recruitment">
            <?php $array_recruitment = $about["number_about_recruitment"]; ?>
            <div class="p-number__img">
              <picture>
                <source srcset="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec02-img13.png'); ?>" media="(min-width: 768px)">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec02-img14.png'); ?>" alt="年度別採用人数">
              </picture>
            </div>
            <div class="p-number-about__recruitment--table">
              <div class="p-number-about-table">
                <table>
                  <!-- ヘッダー -->
                  <thead>
                    <tr class="p-number-about-table__head p-number__txt p-number__txt--24">
                      <th>
                        <!-- empty -->
                      </th>
                      <th>新卒採用</th>
                      <th>社会人採用</th>
                      <th>社会人採用比率</th>
                    </tr>
                  </thead>
                  <!-- ボディ -->
                  <tbody>
                    <?php
                    $recruitment = $about["number_about_recruitment"];
                    if ($recruitment) :  ?>
                      <?php foreach ($recruitment as $item) : ?>
                        <tr class="p-number-about-table__record">
                          <td>
                            <span class="p-number-about-table__txt-year--large"><?php echo $item["number_about_recruitment_year"]; ?></span>
                            <br><span class="p-number-about-table__txt-year--small"><?php echo $item["number_about_recruitment_term"]; ?></span>
                          </td>
                          <td>
                            <span class="p-number-about-table__value p-number__value is-counter"><?php echo number_format($item["number_about_recruitment_new"]); ?></span>
                            <span class="p-number__txt">人</span>
                          </td>
                          <td>
                            <span class="p-number-about-table__value p-number__value is-counter"><?php echo number_format($item["number_about_recruitment_career"]); ?></span>
                            <span class="p-number__txt">人</span>
                          </td>
                          <td>
                            <span class="p-number-about-table__value p-number__value is-counter"><?php echo number_format($item["number_about_recruitment_rate"]); ?></span>
                            <span class="p-number__txt">％</span>
                          </td>
                        </tr>
                    <?php
                      endforeach;
                    endif; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- 在職率（新卒採用、社会人採用） -->
          <div class="p-number-about__employee">
            <?php
            $array_employee_new = $about["number_about_employee_new"];
            $array_employee_career = $about["number_about_employee_career"];
            ?>
            <div class="p-number__img">
              <picture>
                <source srcset="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec02-img15.png'); ?>" media="(min-width: 768px)">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec02-img16.png'); ?>" alt="新入社員の３年後の在職率">
              </picture>
            </div>
            <!-- 新卒採用 -->
            <p class="p-number-about__employee--new-txt">新卒採用</p>
            <div class="p-number-about__employee--new">
              <div class="p-number-about-table">
                <table>
                  <!-- ヘッダー -->
                  <thead>
                    <tr class="p-number-about-table__head p-number__txt p-number__txt--24">
                      <th>
                        <!-- empty -->
                      </th>
                      <th class="is-employee">採用人数</th>
                      <th class="is-employee">
                        在職人数<br>
                        <span class="is-small">※2022年12月時点</span>
                      </th>
                      <th class="is-employee">在職率</th>
                    </tr>
                  </thead>
                  <!-- ボディ -->
                  <tbody>
                    <?php
                    $employee_new = $about["number_about_employee_new"];
                    if ($employee_new) :  ?>
                      <?php foreach ($employee_new as $item) : ?>
                        <tr class="p-number-about-table__record">
                          <td>
                            <span class="p-number-about-table__txt-year--large"><?php echo $item["number_about_employee_new_year"]; ?></span>
                            <br><span class="p-number-about-table__txt-year--small"><?php echo $item["number_about_employee_new_term"]; ?></span>
                          </td>
                          <td>
                            <span class="p-number-about-table__value p-number__value is-counter"><?php echo number_format($item["number_about_employee_new_recruitment"]); ?></span>
                            <span class="p-number__txt">人</span>
                          </td>
                          <td>
                            <span class="p-number-about-table__value p-number__value is-counter"><?php echo number_format($item["number_about_employee_new_enrolled"]); ?></span>
                            <span class="p-number__txt">人</span>
                          </td>
                          <td>
                            <span class="p-number-about-table__value p-number__value is-counter"><?php echo number_format($item["number_about_employee_new_rate"]); ?></span>
                            <span class="p-number__txt">％</span>
                          </td>
                        </tr>
                    <?php
                      endforeach;
                    endif; ?>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- 社会人採用 -->
            <p class="p-number-about__employee--career-txt">社会人採用</p>
            <div class="p-number-about__employee--career">
              <div class="p-number-about-table">
                <table>
                  <!-- ヘッダー -->
                  <thead>
                    <tr class="p-number-about-table__head p-number__txt p-number__txt--24">
                      <th>
                        <!-- empty -->
                      </th>
                      <th class="is-employee">採用人数</th>
                      <th class="is-employee">
                        在職人数<br>
                        <span class="is-small">※2022年12月時点</span>
                      </th>
                      <th class="is-employee">在職率</th>
                    </tr>
                  </thead>
                  <!-- ボディ -->
                  <tbody>
                    <?php
                    $employee_career = $about["number_about_employee_career"];
                    if ($employee_career) :  ?>
                      <?php foreach ($employee_career as $item) : ?>
                        <tr class="p-number-about-table__record">
                          <td>
                            <span class="p-number-about-table__txt-year--large"><?php echo $item["number_about_employee_career_year"]; ?></span>
                            <br><span class="p-number-about-table__txt-year--small"><?php echo $item["number_about_employee_career_term"]; ?></span>
                          </td>
                          <td>
                            <span class="p-number-about-table__value p-number__value is-counter"><?php echo number_format($item["number_about_employee_career_recruitment"]); ?></span>
                            <span class="p-number__txt">人</span>
                          </td>
                          <td>
                            <span class="p-number-about-table__value p-number__value is-counter"><?php echo number_format($item["number_about_employee_career_enrolled"]); ?></span>
                            <span class="p-number__txt">人</span>
                          </td>
                          <td>
                            <span class="p-number-about-table__value p-number__value is-counter"><?php echo number_format($item["number_about_employee_career_rate"]); ?></span>
                            <span class="p-number__txt">％</span>
                          </td>
                        </tr>
                    <?php
                      endforeach;
                    endif; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div><!-- /.p-number-about__employee -->
        </div><!-- /.p-number-about__content -->
        <!-- <p class="p-number-about__settlement">※2020年度は決算期変更のため、9ヵ月決算となります。</p> -->
      </div><!-- /.p-number-about c-inner u-page-px -->
    </section>

    <!-- キッツの実績 -->
    <section class="p-number__achi">
      <?php $achi = get_field("number_achi"); ?>
      <div class="p-number-achi c-inner u-page-px">
        <h2 class="p-number-achi__title p-number__title"><span>キッツの実績</span></h2>
        <div class="p-number-achi__content">
          <!-- バルブの販売台数 -->
          <div class="p-number-achi__sale">
            <div class="p-number__img">
              <picture>
                <source srcset="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec03-img01.png?v=20221215'); ?>" media="(min-width: 768px)">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec03-img02.png?v=20221215'); ?>" alt="バルブの販売台数">
              </picture>
            </div>
            <p class="p-number-achi__sale--txt">
              <span class="p-number__value is-counter"><?php echo number_format($achi["number_achi_sale"]); ?></span>
              <span class="p-number__txt">万台</span>
            </p>
          </div>
          <!-- バルブの口径サイズ -->
          <div class="p-number-achi__size">
            <div class="p-number__img">
              <picture>
                <source srcset="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec03-img03.png'); ?>" media="(min-width: 768px)">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec03-img04.png'); ?>" alt="バルブの口径サイズ">
              </picture>
            </div>
            <p class="p-number-achi__size--txt">
              <span class="p-number__value is-counter"><?php echo number_format($achi["number_achi_size_min"]); ?></span>
              <span class="p-number__txt">mm</span>
              <span class="p-number__txt p-number__txt--50">〜</span>
              <br>
              <span class="p-number__value is-counter"><?php echo number_format($achi["number_achi_size_max"]); ?></span>
              <span class="p-number__txt">mm</span>
            </p>
          </div>
          <!-- バルブのラインナップ数 -->
          <div class="p-number-achi__lineup">
            <div class="p-number__img">
              <picture>
                <source srcset="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec03-img05.png'); ?>" media="(min-width: 768px)">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec03-img06.png'); ?>" alt="バルブのラインナップ数">
              </picture>
            </div>
            <p class="p-number-achi__lineup--txt">
              <span class="p-number__value is-counter"><?php echo number_format($achi["number_achi_lineup"]); ?></span>
              <span class="p-number__txt">種類以上</span>
            </p>
          </div>
          <!-- 国内市場別売上比率 -->
          <div class="p-number-achi__rate">
            <?php $rate = $achi["number_achi_rate"]; ?>
            <div class="p-number__img">
              <picture>
                <source srcset="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec03-img07.png?v=20221215'); ?>" media="(min-width: 768px)">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec03-img08.png?v=20221215'); ?>" alt="バルブ事業の国内市場別売上高比率">
              </picture>
            </div>
            <p class="p-number-achi__rate--txt p-number__txt p-number__txt--28">
              <?php echo $rate["number_achi_rate_year"]; ?>年度
            </p>
            <div class="p-number-achi__rate--graph">
              <ul class="p-number-achi-graph">
                <?php
                $rate_list = $rate["number_achi_rate_list"];
                if ($rate_list) :
                ?>
                  <?php foreach ($rate_list as $item) : ?>
                    <li class="p-number-achi-graph__item is-<?php echo $item["number_achi_rate_list_percent_id"]; ?>">
                      <span class="p-number-achi-graph__value  p-number__value"><span class="is-counter"><?php echo $item["number_achi_rate_list_percent_integer"]; ?></span>.<span class="is-counter"><?php echo $item["number_achi_rate_list_percent_minority"] ?></span></span><span class="p-number__txt p-number__txt--24">%</span>
                    </li>
                <?php endforeach;
                endif; ?>
              </ul>
            </div>
          </div>
          <!-- 流体使用温度範囲 -->
          <div class="p-number-achi__temperature">
            <div class="p-number__img">
              <picture>
                <source srcset="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec03-img09.png'); ?>" media="(min-width: 768px)">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec03-img10.png'); ?>" alt="流体使用温度範囲">
              </picture>
            </div>
            <p class="p-number-achi__temperature--txt">
              <span class="p-number__value">-</span>
              <span class="p-number__value is-counter"><?php echo number_format($achi["number_achi_temperature_min"]); ?></span>
              <span class="p-number__value">~</span>
              <span class="p-number__value is-counter"><?php echo number_format($achi["number_achi_temperature_max"]); ?></span>
              <span class="p-number__txt">℃</span>
            </p>
          </div>
          <!-- 最高許容圧力 -->
          <div class="p-number-achi__pressure">
            <div class="p-number__img">
              <picture>
                <source srcset="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec03-img11.png'); ?>" media="(min-width: 768px)">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec03-img12.png'); ?>" alt="最高許容圧力">
              </picture>
            </div>
            <p class="p-number-achi__pressure--txt">
              <span class="p-number__value is-counter"><?php echo number_format($achi["number_achi_pressure"]); ?></span>
              <span class="p-number__txt">MPa</span>
            </p>
          </div>
          <!-- 設備投資額 -->
          <div class="p-number-achi__investment">
            <div class="p-number__img">
              <picture>
                <source srcset="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec03-img13.png?v=20221215'); ?>" media="(min-width: 768px)">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec03-img14.png?v=20221215'); ?>" alt="設備投資額（2020年１月～12月）">
              </picture>
            </div>
            <p class="p-number-achi__investment--txt">
              <span class="p-number__value is-counter"><?php echo number_format($achi["number_achi_investment"]); ?></span>
              <span class="p-number__txt">億円</span>
            </p>
          </div>
        </div><!-- /.p-number-achi__content -->
      </div><!-- /.p-number-achi c-inner u-page-px -->
    </section>

    <!-- キッツのグローバル展開 -->
    <section class="p-number__global">
      <?php $global = get_field("number_global"); ?>
      <div class="p-number-global c-inner u-page-px">
        <h2 class="p-number-global__title p-number__title"><span>キッツのグローバル展開</span></h2>
        <div class="p-number-global__content">
          <!-- 販売実績国数 -->
          <div class="p-number-global__country">
            <div class="p-number__img">
              <picture>
                <source srcset="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec04-img01.png'); ?>" media="(min-width: 768px)">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec04-img02.png'); ?>" alt="販売実績国数">
              </picture>
            </div>
            <p class="p-number-global__country--txt">
              <span class="p-number__value is-counter"><?php echo number_format($global["number_global_country"]); ?></span>
              <span class="p-number__txt">ヵ国以上</span>
            </p>
          </div>
          <!-- 海外拠点国数 -->
          <div class="p-number-global__hub">
            <div class="p-number__img">
              <picture>
                <source srcset="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec04-img03.png'); ?>" media="(min-width: 768px)">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec04-img04.png'); ?>" alt="海外拠点国数">
              </picture>
            </div>
            <p class="p-number-global__hub--txt">
              <span class="p-number__value is-counter"><?php echo number_format($global["number_global_hub"]); ?></span>
              <span class="p-number__txt">ヵ国</span>
            </p>
          </div>
          <!-- 海外販売比率 -->
          <div class="p-number-global__rate">
            <div class="p-number__img">
              <picture>
                <source srcset="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec04-img05.png'); ?>" media="(min-width: 768px)">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec04-img06.png'); ?>" alt="海外売上高比率（連結2020年度）">
              </picture>
            </div>
            <p class="p-number-global__rate--txt">
              <span class="p-number__value is-counter"><?php echo number_format($global["number_global_rate"]); ?></span>
              <span class="p-number__txt">%</span>
            </p>
          </div>
          <!-- キッツグループ グローバルネットワーク -->
          <div class="p-number-global__network">
            <picture>
              <source srcset="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec04-img07.png'); ?>" media="(min-width: 768px)">
              <img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec04-img08.png'); ?>" alt="キッツグループ グローバルネットワーク">
            </picture>
          </div>
        </div><!-- /.p-number-global__content -->
      </div><!-- /.p-number-global c-inner u-page-px -->
    </section>

    <!-- フッター -->
    <?php get_template_part("php-recruit/_recruit-footer"); ?>
    <script src="/cms/wp-content/themes/kitz/js/picturefill.min.js"></script>
  </div>

  <?php wp_footer(); ?>
</body>

</html>