<?php get_header(); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lity/2.3.1/lity.css">

<style>
  @media screen and (min-width: 1px) and (max-width: 425px) {
    .p-who__kitz-valve figure {
      width: 100%;
      top: 0;
    }
  }
</style>

<section class="p-page-mv">
  <div class="p-page-mv__inner">
    <h1 class="p-page-mv__ttl p-page-mv__ttl--who">キッツとは</h1>
  </div>
</section>
<!-- /.p-page-mv -->
<div class="p-page-valve valve-sub">

  <!-- breadcrumb -->
  <div class="c-breadcrumb">
    <ul class="c-breadcrumb__list">
      <li class="c-breadcrumb__item">
        <a title="ホーム" href="/">ホーム</a>
      </li>
      <li class="c-breadcrumb__item">
        <a title="ホーム" href="/company/">キッツについて</a>
      </li>
      <li class="c-breadcrumb__item">キッツとは</li>
    </ul>
  </div>

  <div id="module_layout" <?php echo kitz_module_layout_class(); ?>>
    <?php custom_layout(array(), array('main_visual')); ?>

    <section class="p-who">

      <div class="l-inner">
        <?php custom_layout(array('main_visual')); ?>
      </div>

      <!-- /.p-who__movie -->
    </section>
  </div>
  <!-- /.p-who -->

  <?php get_footer(); ?>