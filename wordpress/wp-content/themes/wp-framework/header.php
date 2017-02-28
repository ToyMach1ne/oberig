<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--meta info-->
    <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- css + javascript -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!--boxed layout-->
    <div class="wide_layout relative w_xs_auto">
        <header role="banner">
            <!--header bottom part-->
            <section class="h_bot_part type_2 container">
                <div class="clearfix row">
                    <div class="col-lg-4 col-md-5 col-sm-4 t_align_c st_xs_align_c">
                        <p>&nbsp;</p>
                        <p class="f_size_big default_t_color">+7&nbsp;(903)&nbsp;130-24-38</p>
                        <p>&nbsp;</p>
                    </div>
                    <div class="col-lg-8 col-md-7 col-sm-8 clearfix t_xs_align_c">
                        <div class="relative f_left">
                              <a href="<?php echo home_url(); ?>" class="logo m_xs_bottom_10 d_inline_b">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/vidumki_kr+.png" width="350" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>">
                              </a>
                        </div><!-- relative f_left -->
                        <ul id="msMiniCart" class="d_inline_b horizontal_list clearfix t_align_l f_right f_xs_none site_settings">
                            <!--shopping cart-->
                            <li class="m_left_5 relative container3d" id="shopping_button">
                                <a role="button" href="http://vidumki.ru/cart.html" class="button_type_3 color_light bg_scheme_color d_block r_corners tr_delay_hover box_s_none">
                                    <span class="d_inline_middle shop_icon">
    <i class="fa fa-shopping-cart"></i>
   <span class="count tr_delay_hover type_2 circle t_align_c ms2_total_count">0</span>
                                    </span>
                                    <b><span class="ms2_total_cost">0</span>&nbsp;руб.</b>
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
