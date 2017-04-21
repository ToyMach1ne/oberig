<?php get_header(); ?>
<section class="breadcrumbs">
    <div class="container">
      <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
    </div>
</section><!-- breadcrumbs -->
<div class="page_content_offset">
    <div class="container">
      <div class="row clearfix">
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h1 class="single-title inner-title"><?php the_title(); ?></h1>
            <?php the_content(); ?>
          </article>
      <?php endwhile; else: ?>
        <article>
          <h2 class="page-title inner-title"><?php _e( 'Записи нет', 'wpeasy' ); ?></h2>
        </article>
      </div>
            <?php endif; ?>
    </div><!-- container -->
  </div><!-- page_content_offset -->
<?php get_footer(); ?>
