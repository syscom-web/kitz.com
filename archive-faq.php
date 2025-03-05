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
        <li class="c-breadcrumb__item">Frequently Asked Questions</li>
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
            <dt>Detailed Search</dt>
            <dd>
              <?php
              $faq_dialect = get_terms('faq_dialect');
              if ($faq_dialect) :
              ?>
                <div>
                  <p>Search by Product</p>
                  <ul>
                    <?php foreach ($faq_dialect as $dialect) : ?>
                      <li><a href="<?php echo get_term_link($dialect); ?>?id=cat-ttl"><?php echo esc_html($dialect->name); ?></a></li>
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

        <?php if ($_GET['s']) : ?>
          <?php
          $kw = [];
          $keywords = get_terms('keywords');
          foreach ($keywords as $keyword) {
            $kw[] = $keyword->name;
          }
          $kw = preg_grep('/' . $_GET['s'] . '/', $kw);

          $args = array(
            'post_type' => 'faq',
            'posts_per_page' => -1,
            'order' => 'ASC',
            's' => $s,
            'no_found_rows' => true
          );
          $faq_query = new WP_Query($args);

          if ($faq_query->have_posts()) {
            $exclude_post = [];
            while ($faq_query->have_posts()) {
              $faq_query->the_post();
              $exclude_post[] = $post->ID;
            }
          }

          $args = array(
            'post_type' => 'faq',
            'posts_per_page' => -1,
            'order' => 'ASC',
            'tax_query' => array(
              array(
                'taxonomy' => 'keywords',
                'field' => 'slug',
                'terms' => $kw
              )
            ),
            'post__not_in' => $exclude_post,
            'no_found_rows' => true
          );
          $kw_query = new WP_Query($args);

          if ($faq_query->have_posts() || $kw_query->have_posts()) :
          ?>
            <article>
              <h2 id="cat-ttl">Search for <?php echo '"' . $_GET['s'] . '"'; ?></h2>
              <?php while ($faq_query->have_posts()) : $faq_query->the_post(); ?>
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
              <?php while ($kw_query->have_posts()) : $kw_query->the_post(); ?>
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
            </article>

          <?php else : ?>
            <p class="p-faq__empty">
              <span>There is no search result.</span><br>
              Sorry for the inconvenience, but enter another keyword,<br>
              Please search again by selecting it in the category, etc.<br>
              If you still don’t get a hit, please contact us <a href="<?php echo esc_url(home_url('/')); ?>contact/">here</a>.
            </p>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>

        <?php else : ?>

          <?php
          $paged = get_query_var('paged', 1);
          $args = array(
            'post_type' => 'faq',
            'order' => 'ASC',
            'paged' => $paged
          );
          $faq_query = new WP_Query($args);

          if ($faq_query->have_posts()) :
          ?>
            <?php while ($faq_query->have_posts()) : $faq_query->the_post(); ?>
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

            <?php
            if (function_exists('wp_pagenavi')) {
              wp_pagenavi(array(
                'query' => $faq_query
              ));
            }
            ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div><!-- /.p-faq__inner -->
    </div><!-- /.p-faq -->
    <?php get_footer(); ?>