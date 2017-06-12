<?php get_header(); ?>
  <article>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
  <h1 class="search-title inner-title"><?php echo sprintf( __( '%s Search Results for ', 'wpeasy' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
        <?php get_template_part('loop'); ?>
        <?php get_template_part('pagination'); ?>
      </div>
    </div>
  </div>


  </article>
<?php get_footer(); ?>
