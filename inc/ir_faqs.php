<?php
$permalink = $_SERVER['REQUEST_URI'];

$args = array(
  'post_type' => 'ir_faqs'
);
$ir_faqs_query = new WP_Query($args);

$ir_cat = get_terms('ir_cat');
?>

<?php if ($ir_faqs_query->have_posts()) : ?>
  <?php
  // よくある質問
  if ($permalink === '/en/investor_ir/faq/') :
  ?>
    <?php if ($ir_cat) : ?>
      <?php foreach ($ir_cat as $category) : ?>
        <h3><?php echo esc_html($category->name); ?></h3>
        <?php
        $args = array(
          'post_type' => 'ir_faqs',
          'posts_per_page' => -1,
          'order' => 'ASC',
          'no_found_rows' => true,
          'tax_query' => array(
            'relation' => 'AND',
            array(
              'taxonomy' => 'ir_type',
              'field' => 'slug',
              'terms' => 'faq'
            ),
            array(
              'taxonomy' => 'ir_cat',
              'field' => 'id',
              'terms' => $category->term_id
            )
          )
        );
        $ir_faq_query = new WP_Query($args);
        ?>
        <?php if ($ir_faq_query->have_posts()) : ?>
          <?php while ($ir_faq_query->have_posts()) : $ir_faq_query->the_post(); ?>
            <dl class="p-faq__list">
              <dt>
                <?php the_title(); ?><span></span>
              </dt>
              <dd>
                <div>
                  <div>
                    <?php the_content(); ?>
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
    <?php wp_reset_postdata(); ?>

  <?php
  // 株券電子化について
  elseif ($permalink === '/en/investor_ir/stock-information/electronic/') :
  ?>
    <?php
    $args = array(
      'post_type' => 'ir_faqs',
      'posts_per_page' => -1,
      'order' => 'ASC',
      'no_found_rows' => true,
      'tax_query' => array(
        array(
          'taxonomy' => 'ir_type',
          'field' => 'slug',
          'terms' => 'electronic'
        )
      )
    );
    $ir_electronic_query = new WP_Query($args);
    ?>
    <?php if ($ir_electronic_query->have_posts()) : ?>
      <?php while ($ir_electronic_query->have_posts()) : $ir_electronic_query->the_post(); ?>
        <dl class="p-faq__list">
          <dt>
            <?php the_title(); ?><span></span>
          </dt>
          <dd>
            <div>
              <div>
                <?php the_content(); ?>
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
    <?php wp_reset_postdata(); ?>
  <?php endif; ?>
<?php endif; ?>
