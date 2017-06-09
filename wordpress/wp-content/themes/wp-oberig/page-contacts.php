<?php /* Template Name: Контакты */ get_header(); ?>
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
            <section class="col-lg-9 col-md-9 col-sm-9">
                <!--blog post-->
                <article class="m_bottom_15">
                    <div class="row clearfix m_bottom_15">
                        <div class="col-lg-9 col-md-9 col-sm-8">
                            <h2 class="tt_uppercase color_dark m_bottom_25"><?php the_title(); ?></h2>
                        </div>
                    </div>
                    <h1>Адрес:</h1>
                    <br>
                    <ul class="c_info_list">
                        <li class="m_bottom_10">
                            <div class="clearfix m_bottom_15">
                                <i class="fa fa-map-marker f_left"></i>
                                <p class="contact_e"><?php the_field('adress'); ?></p>
                            </div>
                        </li>
                        <li class="m_bottom_10">
                            <div class="clearfix m_bottom_10">
                                <i class="fa fa-phone f_left"></i>
                                <p class="contact_e"><?php the_field('phone'); ?></p>
                            </div>
                        </li>
                        <li class="m_bottom_10">
                            <div class="clearfix m_bottom_10">
                                <i class="fa fa-envelope f_left"></i>
                                <a class="contact_e default_t_color" href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
                                <a class="contact_e default_t_color" href="mailto:mail@oberig.vn.ua"><?php the_field('second_email'); ?></a>
                            </div>
                        </li>
                    </ul>
                    <br><?php the_field('question_block'); ?>
                    <br>
                    <br>
                    <br> &nbsp;
                </article><!-- m_bottom_15 -->
            </section>
            <!--right column-->
            <?php get_sidebar('right'); ?>
        </div><!-- row -->
    </div><!-- container -->
</div><!-- page_content_offset -->
                    <div class="map-container">
                      <?php the_field('map'); ?>
                    </div>
<?php get_footer(); ?>
