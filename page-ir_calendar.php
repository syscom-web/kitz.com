<?php
/**
 * Template Name: IRカレンダー
 *
 */
?>

<?php get_header(); ?>

<?php
if(have_posts()) :
while(have_posts()) :
the_post(); ?>

<main class="p-main">
<section class="p-page-mv">
        <div class="p-page-mv__inner">
            <h1 class="p-page-mv__ttl p-page-mv__ttl--business">IR Calendar</h1>
        </div>
    </section>
    <!-- /.p-page-mv -->
    <div class="p-page-valve valve-sub">
        <div class="c-breadcrumb">
            <ul class="c-breadcrumb__list">
                <li class="c-breadcrumb__item"><a title="HOME" href="/">HOME</a></li>
                <li class="c-breadcrumb__item"><a title="IR data" href="<?php echo home_url() ?>/investor_ir/">IR data</a></li>
                <li class="c-breadcrumb__item">IR Calendar</li>
            </ul>
        </div>
        <section class="p-page-ir">
            
            <div class="p-page-ir__calender">
                <div class="p-page-ir__calender__inner">
                    <section class="p-page-ir__calender__wrap">
                        <img src="<?php the_field('calendar'); ?>" alt="Calendar">
                    </section>
                    <section class="p-page-ir__calender__wrap">
                        <?php if(have_rows('cal-box')): ?>
                        <?php while(have_rows('cal-box')): the_row(); ?>
                        <div class="p-page-ir__calender__list">
                            <h3>
                            <?php the_sub_field('year'); ?>
                            </h3>
                            <table>
                            <?php if(have_rows('contents')): ?>
                            <?php while(have_rows('contents')): the_row(); ?>
                                <tr>
                                    <th><?php the_sub_field('date'); ?></th>
                                    <td><?php the_sub_field('text'); ?></td>
                                </tr>
                                <?php endwhile; ?>
                        <?php endif; ?>
                            </table>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>

                    </section>
                </div>
            </div>

            <div class="p-page-menu">
                <ul>
                    <li><a href="<?php echo home_url() ?>/investor_ir/ir_news/">IR NEWS</a></li>
                    <li><a href="<?php echo home_url() ?>/investor_ir/individual-investors/">To Our Individual Investors</a>
                    </li>
                    <li><a href="<?php echo home_url() ?>/investor_ir/calendar/" class="current">IR Calendar</a></li>
                    <li><a href="<?php echo home_url() ?>/investor_ir/management-policy/">Management Policy and Strategy</a></li>
                    <li class="is-multiline"><a href="<?php echo home_url() ?>/investor_ir/financial-highlights/">Business activities and financial highlights</a>
                    </li>
                    <li><a href="<?php echo home_url() ?>/investor_ir/library/">IR library</a></li>
                    <li><a href="<?php echo home_url() ?>/investor_ir/stock-information/">Shareholder information</a></li>
                </ul>
            </div>


            <div class="l-contact">
                <div class="l-contact__inner">
                    <div class="l-contact__inner__product">
                        <h2 class="c-ttl--type01">Frequently Asked Questions About IR<br class="is-tab">（FAQ）</h2>
                        <div class="l-contact__inner__link"><a href="<?php echo home_url() ?>/investor_ir/faq/" class="c-btn--type01" rel="noopener">FAQ on IR</a></div>
                    </div><!-- /.l-contact__inner__product -->
                    <div class="l-contact__inner__company">
                        <h2 class="c-ttl--type01">IR inquiries</h2>
                        <div class="l-contact__inner__link"><a href="<?php echo home_url() ?>/company/inquiry/?content=2" class="c-btn--type01">Contact Us</a>
                        </div>
                    </div><!-- /.l-contact__inner__company -->
                </div><!-- /.l-contact__inner -->
            </div><!-- /.l-contact -->

        </section>


        <?php endwhile; else: ?>
        <?php endif; ?>
        <?php get_footer(); ?>