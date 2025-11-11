<?php

/**
 * Template Name: 数字でわかるキッツ
 *
 */
?>
<?php get_header(); ?>
<link rel="stylesheet" href="/en/cms/wp-content/themes/kitz/css/recruit.css?v=20230831">
<main class="p-main">

    <section class="p-page-mv">
        <div class="p-page-mv__inner">
            <h1 class="p-page-mv__ttl p-page-mv__ttl--who">KITZ by the Numbers</h1>
        </div>
    </section>
    <div class="c-breadcrumb">
        <ul class="c-breadcrumb__list">
            <li class="c-breadcrumb__item"><a title="Home" href="/en/">Home</a></li>
            <li class="c-breadcrumb__item"><a href="/en/who/">What is KITZ?</a></li>
            <li class="c-breadcrumb__item">KITZ by the Numbers</li>
        </ul>
    </div>
    <style>
        body {
            padding-top: 0 !important
        }

        .p-number-achi__sale--txt {
            top: 60%;
            left: inherit !important;
            right: 10px
        }

        .p-number__value {
            font-size: 70px
        }

        .p-number-achi__sale--txt .p-number__value,
        .p-number-achi__rate--graph .p-number__value {
            font-size: 48px
        }

        .p-number-achi__size--txt {
            line-height: 1.3
        }

        @media (max-width:1279px) {

            .p-number-achi__sale--txt .p-number__value,
            .p-number-achi__rate--graph .p-number__value {
                font-size: 3.5vw
            }

            .p-number__value {
                font-size: 5vw
            }

            .p-number__txt {
                font-size: 2vw
            }
        }

        @media (max-width:992px) {
            .p-number-achi__sale--txt .p-number__value {
                font-size: 3vw
            }
        }

        @media (max-width:767px) {
            .p-number-achi__sale--txt .p-number__value {
                font-size: 30px
            }

            .p-number__value {
                font-size: 45px
            }

            .p-number__txt {
                font-size: 14px
            }

            .p-number-achi__rate--graph .p-number__value {
                font-size: 20px
            }

            .p-number-achi__rate--graph .p-number-achi-graph__item {
                margin-top: 5px
            }

            .p-number-achi__rate--graph li:nth-child(4) {
                margin-top: 20px;
                margin-left: -10px
            }

            .p-number-achi__rate--graph li:nth-child(5),
            .p-number-achi__rate--graph li:nth-child(7) {
                margin-top: 10px
            }
        }
    </style>
    <div>


        <!-- Achievement -->
        <section class="p-number__achi">
            <?php $achi = get_field("number_achi", 1361); ?>
            <div class="p-number-achi c-inner u-page-px">
                <h2 class="p-number-achi__title p-number__title"><span>Achievement</span></h2>
                <div class="p-number-achi__content">
                    <!-- Valve Unit Sales -->
                    <div class="p-number-achi__sale">
                        <div class="p-number__img">
                            <picture>
                                <source srcset="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec03-img01.jpg'); ?>" media="(min-width: 768px)">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec03-img02.jpg'); ?>" alt="Valve Unit Sales">
                            </picture>
                        </div>
                        <p class="p-number-achi__sale--txt">
                            <span class="p-number__value is-counter"><?php echo number_format($achi["number_achi_sale"]); ?></span>
                            <span class="p-number__txt">units</span>
                        </p>
                    </div>
                    <!-- Bore sizing for valve -->
                    <div class="p-number-achi__size">
                        <div class="p-number__img">
                            <picture>
                                <source srcset="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec03-img03.png'); ?>" media="(min-width: 768px)">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec03-img04.png'); ?>" alt="Bore sizing for valve">
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
                    <!-- Number of line up -->
                    <div class="p-number-achi__lineup">
                        <div class="p-number__img">
                            <picture>
                                <source srcset="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec03-img05.png?v=20240308'); ?>" media="(min-width: 768px)">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec03-img06.png?v=20240308'); ?>" alt="Number of line up">
                            </picture>
                        </div>
                        <p class="p-number-achi__lineup--txt">
                            <span class="p-number__txt">More than</span><span class="p-number__value is-counter"><?php echo number_format($achi["number_achi_lineup"]); ?></span>
                            <span class="p-number__txt">types</span>
                        </p>
                    </div>
                    <!-- Valve Manufacturing Business Sales Ratio by Market -->
                    <div class="p-number-achi__rate">
                        <?php $rate = $achi["number_achi_rate"]; ?>
                        <div class="p-number__img">
                            <picture>
                                <source srcset="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec03-img07.jpg'); ?>" media="(min-width: 768px)">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec03-img08.jpg'); ?>" alt="Valve Manufacturing Business Sales Ratio by Market">
                            </picture>
                        </div>
                        <p class="p-number-achi__rate--txt p-number__txt p-number__txt--28">
                            <?php echo $rate["number_achi_rate_year"]; ?>year
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
                    <!-- Fluid operating temperature -->
                    <div class="p-number-achi__temperature">
                        <div class="p-number__img">
                            <picture>
                                <source srcset="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec03-img09.png?v=20240308'); ?>" media="(min-width: 768px)">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec03-img10.png?v=20240308'); ?>" alt="Fluid operating temperature">
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
                    <!-- Maximum allowable pressure -->
                    <div class="p-number-achi__pressure">
                        <div class="p-number__img">
                            <picture>
                                <source srcset="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec03-img11.png'); ?>" media="(min-width: 768px)">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec03-img12.png'); ?>" alt="Maximum allowable pressure">
                            </picture>
                        </div>
                        <p class="p-number-achi__pressure--txt">
                            <span class="p-number__value is-counter"><?php echo number_format($achi["number_achi_pressure"]); ?></span>
                            <span class="p-number__txt">MPa</span>
                        </p>
                    </div>
                    <!-- Capital expenditures -->
                    <div class="p-number-achi__investment">
                        <div class="p-number__img">
                            <picture>
                                <source srcset="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec03-img13.jpg'); ?>" media="(min-width: 768px)">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec03-img14.jpg'); ?>" alt="Capital expenditures">
                            </picture>
                        </div>
                        <p class="p-number-achi__investment--txt">
                            <span class="p-number__value is-counter"><?php echo number_format($achi["number_achi_investment"]); ?></span>
                            <span class="p-number__txt">billion yen</span>
                        </p>
                    </div>
                </div><!-- /.p-number-achi__content -->
            </div><!-- /.p-number-achi c-inner u-page-px -->
        </section>

        <!-- Global expansion -->
        <section class="p-number__global">
            <?php $global = get_field("number_global", 1361); ?>
            <div class="p-number-global c-inner u-page-px">
                <h2 class="p-number-global__title p-number__title"><span>Global expansion</span></h2>
                <div class="p-number-global__content">
                    <!-- Number of Countries with Sales Results -->
                    <div class="p-number-global__country">
                        <div class="p-number__img">
                            <picture>
                                <source srcset="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec04-img01.png'); ?>" media="(min-width: 768px)">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec04-img02.png'); ?>" alt="Number of Countries with Sales Results">
                            </picture>
                        </div>
                        <p class="p-number-global__country--txt">
                            <span class="p-number__txt">More than</span><span class="p-number__value is-counter"><?php echo number_format($global["number_global_country"]); ?></span>
                            <span class="p-number__txt">countries</span>
                        </p>
                    </div>
                    <!-- Number of overseas bases -->
                    <div class="p-number-global__hub">
                        <div class="p-number__img">
                            <picture>
                                <source srcset="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec04-img03.jpg'); ?>" media="(min-width: 768px)">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec04-img04.jpg'); ?>" alt="Number of overseas bases">
                            </picture>
                        </div>
                        <p class="p-number-global__hub--txt">
                            <span class="p-number__value is-counter"><?php echo number_format($global["number_global_hub"]); ?></span>
                            <span class="p-number__txt">countries</span>
                        </p>
                    </div>
                    <!-- Overseas Sales Ratio -->
                    <div class="p-number-global__rate">
                        <div class="p-number__img">
                            <picture>
                                <source srcset="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec04-img05.jpg'); ?>" media="(min-width: 768px)">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec04-img06.jpg'); ?>" alt="Overseas Sales Ratio">
                            </picture>
                        </div>
                        <p class="p-number-global__rate--txt">
                            <span class="p-number__value is-counter"><?php echo number_format($global["number_global_rate"], 1); ?></span>
                            <span class="p-number__txt">%</span>
                        </p>
                    </div>
                    <!-- KITZ Group global network -->
                    <div class="p-number-global__network">
                        <picture>
                            <source srcset="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec04-img07.jpg'); ?>" media="(min-width: 768px)">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/number/number-sec04-img08.jpg'); ?>" alt="KITZ Group global network">
                        </picture>
                    </div>
                </div><!-- /.p-number-global__content -->
            </div><!-- /.p-number-global c-inner u-page-px -->
        </section>
        <script src="/cms/wp-content/themes/kitz/js/picturefill.min.js"></script>
        <?php get_footer(); ?>
