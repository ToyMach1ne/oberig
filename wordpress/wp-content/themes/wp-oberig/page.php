<?php /* Template Name: О нас */ get_header(); ?>
   <?php get_template_part('slider-main'); ?>
<section class="breadcrumbs">
    <div class="container">
      <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
    </div>
</section><!-- breadcrumbs -->
<div class="page_content_offset">
    <div class="container">
        <div class="row clearfix">
            <!--left content column-->
            <section class="col-lg-12 col-md-12 col-sm-12">
                <!--blog post-->
                <article class="m_bottom_15">
                            <h1 class="tt_uppercase color_dark m_bottom_25"><?php the_title(); ?></h1>
                            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                             <?php endwhile; endif; ?>
                </article>
            </section>
            <!--right column-->
        </div><!-- row -->
    </div><!-- container -->
</div><!-- page_content_offset -->
<?php get_footer(); ?>
