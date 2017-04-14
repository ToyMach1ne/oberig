<footer id="footer">
  <div class="footer_top_part p_vr_0">

    <div class="container">
      <div class="row clearfix">
        <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_20 m_xs_bottom_10">
          <ul class="clearfix horizontal_list social_icons">
            <li class="facebook m_bottom_5 relative">
              <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Facebook</span>
              <a href="#" class="r_corners t_align_c tr_delay_hover f_size_ex_large"><i class="fa fa-facebook"></i></a>
            </li>
            <li class="vk m_bottom_5 relative">
              <span class="tooltip tr_all_hover r_corners color_dark f_size_small">В контакте</span>
              <a href="#" class="r_corners t_align_c tr_delay_hover f_size_ex_large"><i class="fa fa-vk"></i></a>
            </li>
            <li class="envelope m_left_5 m_bottom_5 relative">
              <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Контакты</span>
              <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover"><i class="fa fa-envelope-o"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <hr class="divider_type_4 m_bottom_50">

    <div class="container">
      <div class="row clearfix">

        <div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30 m_bottom_30">
          <aside class="col-lg-3 col-md-3 col-sm-3 sidebar-right">
            <?php if ( is_active_sidebar('widgetarea2') ) : ?>
              <?php dynamic_sidebar( 'widgetarea2' ); ?>
            <?php endif; ?>
          </aside>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30 m_bottom_30">
          <h3 class="color_light_2 m_bottom_20">Распродажа</h3>
          <?php $args = array(
                'post_type'      => 'product',
                'posts_per_page' => 3,
                'meta_query'     => array(
                  'relation' => 'OR',
                  array( // Simple products type
                    'key'           => '_sale_price',
                    'value'         => 0,
                    'compare'       => '>',
                    'type'          => 'numeric'
                  ),
                  array( // Variable products type
                    'key'           => '_min_variation_sale_price',
                    'value'         => 0,
                    'compare'       => '>',
                    'type'          => 'numeric'
                  )
                )
              );

          $loop = new WP_Query( $args );

          if ( $loop->have_posts() ) { while ( $loop->have_posts() ) : $loop->the_post();
            woocommerce_get_template_part( 'content', 'product' );
          endwhile;
          } else {
            echo __( 'No products found' );
          }
            wp_reset_postdata(); ?>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30 m_bottom_30">
                            <h3 class="color_light_2 m_bottom_20">Новые букеты</h3>
                            <!-- NEW PRODUCTS -->
                      <?php $args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 3, 'orderby' =>'date','order' => 'DESC' ); $loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                                 <div class="product_item">
                                  <figure>
                                     <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                      <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="65px" height="115px" />'; ?>
                                      <h3><?php the_title(); ?></h3>
                                      <span class="price"><?php echo $product->get_price_html(); ?></span>
                                    </a>
                                    <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
                                  </figure>
                                </div><!-- product_item -->
                          <?php endwhile; ?>
                          <?php wp_reset_query(); ?>
                          <!--END of NEW PRODUCTS -->
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30 m_bottom_30">
                            <h3 class="color_light_2 m_bottom_20">Контакты</h3>
                            <ul class="c_info_list">
                                <li class="m_bottom_10">
                                    <div class="clearfix m_bottom_15">
                                        <i class="fa fa-map-marker f_left"></i>
                                        <p class="contact_e"><?php the_field('adress', 36); ?></p>
                                    </div>
                                </li>
                                <li class="m_bottom_10">
                                    <div class="clearfix m_bottom_10">
                                        <i class="fa fa-phone f_left"></i>
                                        <p class="contact_e"><?php the_field('phone', 36); ?></p>
                                    </div>
                                </li>
                                <li class="m_bottom_10">
                                    <div class="clearfix m_bottom_10">
                                        <i class="fa fa-envelope f_left"></i>
                                        <a class="contact_e color_light" href="mailto:flowers@vidumki.ru"><?php the_field('email', 36); ?></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--copyright part-->
            <div class="footer_bottom_part">
                <div class="container clearfix t_mxs_align_c">
                    <p class="f_left f_mxs_none m_mxs_bottom_10">
                        © 2015 <span class="color_light">Интернет-магазин цветов и подарков Обериг.</span>
                    </p>
                </div>
            </div>
        </footer>
    </div>
    <ul class="social_widgets d_xs_none">
      <li class="relative">
        <button class="sw_button t_align_c vk"><i class="fa fa-vk"></i></button>
        <div class="sw_content"></div>
      </li>
      <!--facebook-->
      <li class="relative">
        <button class="sw_button t_align_c facebook"><i class="fa fa-facebook"></i></button>
        <div class="sw_content">
          <h3 class="color_dark m_bottom_20">Мы на Facebook</h3>
        </div>
      </li>
      <!--contact info-->
      <li class="relative">
        <button class="sw_button t_align_c googlemap"><i class="fa fa-map-marker"></i></button>
        <div class="sw_content">
          <h3 class="color_dark m_bottom_20">Адрес магазина</h3>
          <ul class="c_info_list">
            <li class="m_bottom_10">
              <div class="clearfix m_bottom_15">
                <i class="fa fa-map-marker f_left"></i>
                <p class="contact_e"><?php the_field('adress', 36); ?></p>
              </div>
            </li>
            <li class="m_bottom_10">
              <div class="clearfix m_bottom_10">
                <i class="fa fa-phone f_left"></i>
                <p class="contact_e"><?php the_field('phone', 36); ?></p>
              </div>
            </li>
            <li class="m_bottom_10">
              <div class="clearfix m_bottom_10">
                <i class="fa fa-envelope f_left"></i>
                <a class="contact_e default_t_color" href="mailto:flowers@vidumki.ru"><?php the_field('email', 36); ?></a>
              </div>
            </li>
          </ul>
        </div>
      </li>
    </ul>
    <!--custom popup-->
    <div class="popup_wrap d_none" id="quick_view_product">
      <section class="popup r_corners shadow"></section>
    </div>
    <button class="t_align_c r_corners type_2 tr_all_hover animate_ftl" id="go_to_top"><i class="fa fa-angle-up"></i></button>

    <!--scripts include-->
    <?php wp_footer(); ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/retina.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.themepunch.plugins.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.1.3.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/waypoints.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.isotope.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.custom-scrollbar.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.jgrowl.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
    <div class="scrollwidth"></div>
</body>
</html>
