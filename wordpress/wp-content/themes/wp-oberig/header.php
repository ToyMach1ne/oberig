<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <link href="http://www.google-analytics.com/" rel="dns-prefetch">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="wide_layout relative w_xs_auto">
    <header role="banner">
      <!--header bottom part-->
      <section class="h_bot_part type_2 container">
          <div class="clearfix row">
              <div class="col-lg-4 col-md-5 col-sm-4 t_align_c st_xs_align_c">
                  <p>&nbsp;</p>
                  <a href="tel:<?php the_field('header_phone', 30); ?>" class="f_size_big default_t_color"><?php the_field('header_phone', 30); ?></a>
                  <p>&nbsp;</p>
              </div>
              <div class="col-lg-8 col-md-7 col-sm-8 clearfix t_xs_align_c">
                  <div class="relative f_left">
                    <a href="<?php echo home_url(); ?>" class="logo m_xs_bottom_10 d_inline_b">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/logo_true.png" width="350" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>">
                    </a>
                  </div><!-- relative f_left -->
                  <ul id="msMiniCart" class="d_inline_b horizontal_list clearfix t_align_l f_right f_xs_none site_settings">
                    <li class="m_left_5 relative container3d" id="shopping_button">
                        <?php global $woocommerce; ?>
                        <a class="your-class-name" href="/cart.htm" title="<?php _e('Корзина', 'woothemes'); ?>">
                          <i class="fa fa-shopping-cart">
                            <span class="items-count">
                              <?php echo sprintf(_n('%d item', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?>
                            </span>
                          </i>
                          <?php echo $woocommerce->cart->get_cart_total(); ?>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </section>
              <!--main menu container-->

              <section class="menu_wrap type_3 relative">
                <div class="container clearfix t_align_c">
                  <!--button for responsive menu-->
                  <button id="menu_button" class="r_corners centered_db d_none tr_all_hover d_xs_block m_bottom_10 color_blue">
                    <span class="centered_db r_corners"></span>
                    <span class="centered_db r_corners"></span>
                    <span class="centered_db r_corners"></span>
                  </button>
                  <!--main menu-->
                  <nav role="navigation" class="d_xs_none d_inline_b t_align_l">
                    <?php wpeHeadNav(); ?>
                  </nav>
                </div>
              </section>
            </header>
