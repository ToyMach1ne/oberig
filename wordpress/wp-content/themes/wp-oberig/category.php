<?php get_header(); ?>
<section class="breadcrumbs">
    <div class="container">
      <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
    </div>
</section><!-- breadcrumbs -->
<div class="container">
  <div class="row">
    <div class="col-md-9">
      <article>
        <h1 class="cat-title inner-title"><?php the_category(', '); ?></h1>
        <?php get_template_part('loop'); ?>
        <?php get_template_part('pagination'); ?>
      </article>
    </div><!-- col-md-9 -->
    <div class="col-md-3">
        <aside class="sidebar" role="complementary">
          <?php if ( is_active_sidebar('widgetarea3') ) : ?>
            <?php dynamic_sidebar( 'widgetarea3' ); ?>
          <?php endif; ?>
        </aside><!-- /sidebar -->
    </div>
  </div><!-- row -->
</div><!-- container -->
<?php get_footer(); ?>
