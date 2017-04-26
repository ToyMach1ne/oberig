<?php /* Template Name: Home */ get_header(); ?>
<div class="comment-page-wrapper">
<section class="breadcrumbs">
    <div class="container">
      <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
    </div>
</section><!-- breadcrumbs -->
  <div class="container">
    <div class="row">
      <div class="col-md-9 commets_blocks_wrapp">
        <div class="row">
            <?php query_posts(array( 'post_type' => 'comment','showposts' => 10, 'orderby' => 'title', 'order' => 'ASC' ) ); ?>
             <?php while (have_posts()) : the_post(); ?>
          <div class="col-md-6">
            <div class="comment_outer">
                <?php if ( has_post_thumbnail()) :?>
                   <a href="<?php the_permalink() ?>" class="thumbnail_wrapper">
                     <?php the_post_thumbnail('thumbnail'); ?>
                   </a>
                <?php endif; ?><!-- /post thumbnail -->
              <a href="<?php the_permalink() ?>" class="title_wrapper">
                <h3 class="comment_title">
                  <?php the_title(); ?>
                </h3>
              </a>
              <span class="comment_date"><?php echo get_the_date(); ?></span>
              <div class="comment_content_wrapp">
                <p><?php the_content(); ?></p>
              </div>
            </div>
          </div><!-- col-md-6 -->
          <?php endwhile;?>
        </div>
      </div><!-- commets_blocks_wrapp -->
      <div class="col-md-3">
        <aside class="sidebar" role="complementary">
          <?php if ( is_active_sidebar('widgetarea3') ) : ?>
            <?php dynamic_sidebar( 'widgetarea3' ); ?>
          <?php endif; ?>
        </aside><!-- /sidebar -->
      </div>
    </div><!-- row -->
  </div><!-- container -->
</div><!-- comment-page-wrapper -->
<?php get_footer(); ?>
