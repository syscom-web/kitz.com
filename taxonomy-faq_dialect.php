<?php get_header(); ?>
<main class="p-main">
  <section class="p-page-mv">
    <div class="p-page-mv__inner">
      <h1 class="p-page-mv__ttl p-page-mv__ttl--faq">Frequently Asked Questions</h1>
    </div>
  </section><!-- /.p-page-mv -->
  <div class="p-page-valve">
    <div class="c-breadcrumb">
      <ul class="c-breadcrumb__list">
      <li class="c-breadcrumb__item"><a title="Home" href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
        <li class="c-breadcrumb__item"><a title="Frequently Asked Questions" href="<?php echo esc_url(home_url('/')); ?>faq/">Frequently Asked Questions</a></li>
        <li class="c-breadcrumb__item"><?php single_term_title(); ?></li>
      </ul>
    </div>
    <div class="p-faq__other">
      <p class="p-company-inquiry__txt">
        We have summarized the questions that you often inquire about.Please refer to it before you inquire.<br>
        See “<a href="<?php echo esc_url(home_url('/')); ?>troubleshooting/">Trouble Shooting</a>” for information on problems.
      </p>
    </div>
    <div class="p-faq">
      <div class="p-faq__inner">
        <div class="p-faq__cat">
          <dl>
            <dt class="is-open">Detailed Search</dt>
            <dd>
              <?php
              $faq_dialect = get_terms('faq_dialect');
              if ($faq_dialect) :
              ?>
                <div>
                  <p>Search by Product</p>
                  <ul>
                    <?php foreach ($faq_dialect as $dialect) : ?>
                      <?php if ($term === $dialect->slug) : ?>
                        <li class="is-current"><a href="<?php echo get_term_link($dialect); ?>?id=cat-ttl"><?php echo esc_html($dialect->name); ?></a></li>
                      <?php else : ?>
                        <li><a href="<?php echo get_term_link($dialect); ?>?id=cat-ttl"><?php echo esc_html($dialect->name); ?></a></li>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  </ul>
                </div>
              <?php endif; ?>
              <?php
              $faq_cat = get_terms('faq_cat');
              if ($faq_cat) :
              ?>
                <div>
                  <p>Search by Category</p>
                  <ul>
                    <?php foreach ($faq_cat as $category) : ?>
                      <li><a href="<?php echo get_term_link($category); ?>?id=cat-ttl"><?php echo esc_html($category->name); ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              <?php endif; ?>

              <div class="c-search">
                <div class="c-search__inner">
                  <p>Search by Keyword</p>
                  <form action="<?php echo esc_url(home_url('/')); ?>faq/" method="get">
                    <div>
                      <input type="search" name="s" placeholder="Please enter a keyword" value="<?php echo $_GET['s']; ?>">
                      <small>※If there are two or more search keywords, separate them with single-byte spaces. (Search results are AND searches.)</small>
                      <small>※If you enter one letter in the alphabet or a product symbol, you may not be able to achieve your desired content.</small>
                      <input type="hidden" name="id" value="cat-ttl">
                    </div>
                    <button>Search</button>
                  </form>
                </div>
              </div>
            </dd>
          </dl>
        </div><!-- /.p-faq__cat -->

        <?php if (have_posts()) : ?>
          <article>
            <h2 id="cat-ttl"><?php single_term_title(); ?> Questions</h2>
            <section>
              <?php if ($faq_cat) : ?>
                <?php foreach ($faq_cat as $category) : ?>
                  <?php
                  $args = array(
                    'post_type' => 'faq',
                    'posts_per_page' => -1,
                    'order' => 'ASC',
                    'no_found_rows' => true,
                    'tax_query' => array(
                      'relation' => 'AND',
                      array(
                        'taxonomy' => 'faq_dialect',
                        'field' => 'slug',
                        'terms' => $term
                      ),
                      array(
                        'taxonomy' => 'faq_cat',
                        'field' => 'id',
                        'terms' => $category->term_id
                      )
                    )
                  );
                  $faq_query = new WP_Query($args);

                  if ($faq_query->have_posts()) :
                  ?>
                    <h3><?php echo esc_html($category->name); ?></h3>
                    <?php while ($faq_query->have_posts()) : $faq_query->the_post(); ?>
                      <div id="faq-<?php echo sprintf('%02d', get_field('number')); ?>"></div>
                      <dl class="p-faq__list">
                        <dt><?php the_title(); ?><span></span></dt>
                        <dd>
                          <div>
                            <div>
                              <?php the_content(); ?>

                              <?php if (have_rows('attached')) : ?>
                                <?php
                                while (have_rows('attached')) : the_row();
                                  $image = get_sub_field('image');
                                ?>
                                  <p><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="aligncenter"></p>
                                <?php endwhile; ?>
                              <?php endif; ?>

                              <?php if (have_rows('external')) : ?>
                                <p>
                                  <?php while (have_rows('external')) : the_row(); ?>
                                    <a href="<?php the_sub_field('href'); ?>" target="_blank" rel="noopener"><?php the_sub_field('text'); ?></a><br>
                                  <?php endwhile; ?>
                                </p>
                              <?php endif; ?>
                            </div>
                          </div>
                        </dd>
                      </dl>
                    <?php endwhile; ?>
                  <?php endif; ?>
                <?php endforeach; ?>
              <?php endif; ?>
            </section>
          <?php endif; ?>
          </article>
      </div><!-- /.p-faq__inner -->
    </div><!-- /.p-faq -->
    <?php get_footer(); ?>