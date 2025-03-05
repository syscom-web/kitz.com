<?php

/**
 * Template Name: 社債・格付情報・アナリストカバレッジ
 *
 */
?>

<?php get_header(); ?>

<?php
if (have_posts()) :
  while (have_posts()) :
    the_post(); ?>

    <main class="p-main">
      <section class="p-page-mv">
        <div class="p-page-mv__inner">
          <h1 class="p-page-mv__ttl p-page-mv__ttl--business">Bond / Rating / Analyst Coverage</h1>
        </div>
      </section>
      <!-- /.p-page-mv -->
      <div class="p-page-valve valve-sub">
        <div class="c-breadcrumb">
          <ul class="c-breadcrumb__list">
            <li class="c-breadcrumb__item"><a title="Home" href="<?php echo home_url() ?>/">Home</a></li>
            <li class="c-breadcrumb__item"><a title="IR" href="<?php echo home_url() ?>/investor_ir/">IR</a></li>
            <li class="c-breadcrumb__item"><a title="Shareholder information" href="<?php echo home_url() ?>/investor_ir/stock-information/">Shareholder information</a></li>
            <li class="c-breadcrumb__item">Bond / Rating / Analyst Coverage </li>
          </ul>
        </div>
        <section class="p-page-ir">

          <div class="p-page-ir__debenture p-page-ir__handling-regulations">
            <div class="p-page-ir__handling-regulations__wrap p-page-ir__debenture__wrap">
              <h2>Corporate Bond Information</h2>
              <div class="p-page-ir__table-vertical p-page-ir__debenture__table01">
                <table>
                  <tr class="top">
                    <th class="one">Description</th>
                    <th class="two">Issue Date</th>
                    <th class="three">Issue Amount</th>
                    <th class="four">Maturity Date</th>
                  </tr>
                  <?php if (have_rows('bond')) : ?>
                    <?php while (have_rows('bond')) : the_row(); ?>
                      <tr>
                        <td><?php the_sub_field('brand'); ?></td>
                        <td><?php the_sub_field('issue'); ?></td>
                        <td><?php the_sub_field('money'); ?></td>
                        <td><?php the_sub_field('redemption'); ?></td>
                      </tr>
                    <?php endwhile; ?>
                  <?php endif; ?>
                </table>
                <div class="p-company-report__container__box u-mt30">
                  <p><a href="<?php echo get_template_directory_uri(); ?>/images/sustainability/slb/slb_pdf01.pdf" class="link--pdf__txt link--pdf__txt--mark-none" target="_blank" rel="noopener">KITZ Sustainability Linked Bond Framework [PDF 1.42MB]</a></p>
                  <p class="u-mt10"><a href="<?php echo get_template_directory_uri(); ?>/images/sustainability/slb/slb_pdf02.pdf" class="link--pdf__txt link--pdf__txt--mark-none" target="_blank" rel="noopener">Third-Party Assessment of KITZ Sustainability Linked Bond Framework [PDF 1.58MB]</a></p>
                </div>
              </div>
              <!--<div class="p-page-ir__debenture__pdf">
                        <a href="/cms/wp-content/uploads/2022/12/sustainability_linked_bond_fw.pdf" target="_blank">
                            KITZ Sustainabi lity-Linked Bond Framework
                        </a>
                    </div>-->
              <!--<div class="p-page-ir__debenture__pdf">
                        <a href="/en/cms/wp-content/uploads/2023/04/sustainability_linked_bond_sp_en.pdf" target="_blank">
                            Third-Party Assessment of KITZ Sustainabi lity-Linked Bond Framework
                        </a>
                    </div>-->
            </div>
            <div class="p-page-ir__handling-regulations__wrap p-page-ir__debenture__wrap">
              <h2>Credit Rating Information</h2>
              <div class="p-page-ir__table-vertical p-page-ir__debenture__table02">
                <table>
                  <tr class="top">
                    <th class="one">Rating Agency</th>
                    <th class="two">Credit Rating</th>
                    <th class="three">Rating Type</th>
                    <th class="four">Rating Date</th>
                  </tr>
                  <?php if (have_rows('rating')) : ?>
                    <?php while (have_rows('rating')) : the_row(); ?>
                      <tr>
                        <td><?php the_sub_field('institution'); ?></td>
                        <td><?php the_sub_field('rate'); ?></td>
                        <td><?php the_sub_field('subject'); ?></td>
                        <td><?php the_sub_field('date'); ?></td>
                      </tr>
                    <?php endwhile; ?>
                  <?php endif; ?>
                </table>
              </div>
            </div>
            <div class="p-page-ir__handling-regulations__wrap p-page-ir__debenture__wrap">
              <h2>Analyst Coverage</h2>
              <div class="p-page-ir__table-vertical p-page-ir__debenture__table03">
                <table>
                  <tr class="top">
                    <th>Company</th>
                    <th>Analyst</th>
                  </tr>
                  <?php if (have_rows('analyst')) : ?>
                    <?php while (have_rows('analyst')) : the_row(); ?>
                      <tr>
                        <td><?php the_sub_field('company'); ?></td>
                        <td><?php the_sub_field('name'); ?></td>
                      </tr>
                    <?php endwhile; ?>
                  <?php endif; ?>
                </table>
              </div>
            </div>
            <div class="p-page-ir__handling-regulations__wrap p-page-ir__debenture__wrap">
              <p>Note</p>
              <ul>
                <?php if (have_rows('attend')) : ?>
                  <?php while (have_rows('attend')) : the_row(); ?>
                    <li><?php the_sub_field('text'); ?></li>
                  <?php endwhile; ?>
                <?php endif; ?>
              </ul>
            </div>
          </div>

          <div class="p-page-menu">
            <ul>
              <li class="is-multiline"><a href="<?php echo home_url() ?>/investor_ir/stock-information/meetings/">Meeting of Shareholders</a></li>
              <li class="is-multiline"><a href="<?php echo home_url() ?>/investor_ir/stock-information/handling-regulations/">Articles of Incorporation</a></li>
              <li><a href="<?php echo home_url() ?>/investor_ir/stock-information/status-shares/">Stock Information</a></li>
              <li class="is-multiline"><a href="<?php echo home_url() ?>/investor_ir/stock-information/dividend/">Dividend Policy and Dividends</a></li>
              <li class="is-multiline"><a href="<?php echo home_url() ?>/investor_ir/stock-information/debenture/" class="current">Bond / Rating / Analyst Coverage</a></li>
            </ul>
          </div>

          <div class="l-contact">
            <div class="l-contact__inner">
              <div class="l-contact__inner__product">
                <h2 class="c-ttl--type01">Frequently Asked Questions About IR<br class="is-tab">（FAQ）</h2>
                <div class="l-contact__inner__link"><a href="<?php echo home_url() ?>/investor_ir/faq/" class="c-btn--type01" rel="noopener">FAQ on IR</a></div>
              </div><!-- /.l-contact__inner__product -->
            </div><!-- /.l-contact__inner -->
          </div><!-- /.l-contact -->

        </section>


      <?php endwhile;
  else : ?>
    <?php endif; ?>
    <?php get_footer(); ?>