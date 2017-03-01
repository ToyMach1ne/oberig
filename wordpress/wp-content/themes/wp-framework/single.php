<?php get_header(); ?>
<section class="breadcrumbs">
    <div class="container">
        <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
    </div>
</section>
<div class="page_content_offset">
    <div class="container">
        <div class="clearfix m_bottom_30 t_xs_align_c">
            <div class="photoframe type_2 shadow r_corners f_left f_sm_none d_xs_inline_b product_single_preview relative m_right_30 m_bottom_5 m_sm_bottom_20 m_xs_right_0 w_mxs_full">
                <!--span class="hot_stripe"><img src="/assets/template/images/sale_product.png" alt=""></span-->
                <div class="relative d_inline_b m_bottom_10 qv_preview d_xs_block">
                    <?php if ( has_post_thumbnail()) : the_post_thumbnail('medium'); else: ?>
                  <img itemprop="image" src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                <?php endif; ?>
                    </a>
                </div>
                <!--carousel-->
                <div class="relative qv_carousel_wrap">
                    <button class="button_type_11 bg_light_color_1 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_single_prev">
                        <i class="fa fa-angle-left "></i>
                    </button>
                    <ul class="qv_carousel_single d_inline_middle owl-carousel owl-theme" style="display: block; opacity: 1;">
                        <div class="owl-wrapper-outer autoHeight" style="height: 110px;">
                            <div class="owl-wrapper" style="width: 246px; left: 0px; display: block;">
                                <div class="owl-item" style="width: 123px;">
                                      <?php if ( has_post_thumbnail()) : the_post_thumbnail('small'); else: ?>
                                        <img itemprop="image" src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                                      <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="owl-controls clickable" style="display: none;">
                            <div class="owl-pagination">
                                <div class="owl-page"><span class=""></span></div>
                            </div>
                        </div>
                    </ul>
                    <button class="button_type_11 bg_light_color_1 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_single_next">
                        <i class="fa fa-angle-right "></i>
                    </button>
                </div>
            </div>
            <div class="p_top_10 t_xs_align_l">
                <!--description-->
                <h2 class="color_dark fw_medium m_bottom_10"><?php the_title(); ?></h2>
                <hr class="m_bottom_10 divider_type_3">
                <table class="description_table m_bottom_10">
                    <tbody>
                        <tr>
                            <td>Артикул:</td>
                            <td><?php the_field('article'); ?></td>
                        </tr>
                    </tbody>
                </table>
                <hr class="divider_type_3 m_bottom_15">
                <p class="m_bottom_10"><strong><?php wpeExcerpt('10') ?></strong></p>
                <p class="m_bottom_10"></p>
                <hr class="divider_type_3 m_bottom_15">
                <div class="m_bottom_15">
                    <span class="v_align_b f_size_big m_left_5 scheme_color fw_medium"><?php the_field('price'); ?>&nbsp;руб.</span>
                </div>
                <form class="form-horizontal ms2_form" method="post">
                    <input type="hidden" name="id" value="319">
                    <table class="description_table type_2 m_bottom_15">
                        <tbody>
                            <tr>
                                <td class="v_align_m">
                                </td>
                                <td class="v_align_m">
                                </td>
                            </tr>
                            <tr>
                                <td class="v_align_m">Количество:</td>
                                <td class="v_align_m">
                                    <div class="clearfix quantity r_corners d_inline_middle f_size_medium color_dark">
                                        <button class="bg_tr d_block f_left" data-direction="down" type="button">-</button>
                                        <input type="text" name="count" readonly="" value="1" class="f_left">
                                        <button class="bg_tr d_block f_left" data-direction="up" type="button">+</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="d_ib_offset_0 m_bottom_20">
                        <button type="submit" class="button_type_12 r_corners bg_scheme_color color_light tr_delay_hover d_inline_b f_size_large" name="ms2_action" value="cart/add">Добавить в корзину</button>
                    </div>
                </form>
            </div>
        </div>
        <!--tabs-->
        <div class="tabs m_bottom_45 ui-tabs ui-widget ui-widget-content ui-corner-all">
            <!--tabs navigation-->
            <nav>
                <ul class="tabs_nav horizontal_list clearfix ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
                  <li class="f_xs_none ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="tab-1" aria-labelledby="ui-id-1" aria-selected="true"><a href="#" role="presentation" tabindex="-1" id="ui-id-1">Описание</a></li>
                </ul>
            </nav>
            <section class="tabs_content shadow r_corners">
                <div id="tab-1" aria-labelledby="ui-id-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="true" aria-hidden="false">
                    <p class="m_bottom_10"></p>
                    <?php if( have_rows('description') ): while ( have_rows('description') ) : the_row(); ?>
                      <p><?php the_sub_field('desc_item'); ?></p>
                     <?php endwhile; endif; ?>
                </div>
            </section>
        </div>
        <div class="clearfix">
            <h2 class="color_dark tt_uppercase f_left m_bottom_15 f_mxs_none">Похожие продукты</h2>
        </div>
        <div class="related_projects product_full_width m_bottom_15 owl-carousel owl-theme" style="display: block; opacity: 1;">
            <div class="owl-wrapper-outer autoHeight" style="height: 380px;">
                <div class="owl-wrapper" style="width: 4560px; left: 0px; display: block;">
               <?php query_posts("showposts=4"); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="owl-item" style="width: 285px;">
                        <figure class="r_corners photoframe shadow relative d_inline_b d_md_block d_xs_inline_b tr_all_hover">
                            <!--product preview-->
                            <a href="<?php the_permalink(); ?>" class="d_block relative pp_wrap">
                                <!--hot or sale product-->
                                <?php if ( has_post_thumbnail()) :?>
                                  <?php the_post_thumbnail('thumbnail'); ?>
                                <?php endif; ?><!-- /post thumbnail -->
                                <span data-href="127" data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Просмотр</span>
                            </a>
                            <!--description and price of product-->
                            <figcaption class="t_xs_align_l">
                                <h5 class="m_bottom_10">
                                  <a href="<?php the_permalink(); ?>" class="color_dark ellipsis" style="display: block; width: 235px; white-space: nowrap;"><?php the_title(); ?></a>
                                </h5>
                                <div class="clearfix">
                                    <p class="scheme_color f_left fw_medium f_size_ex_large m_bottom_15">2 050 руб.</p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <?php endwhile; endif; ?>
                    <?php wp_reset_query(); ?>
                    <div class="owl-item" style="width: 285px;">
                        <figure class="r_corners photoframe shadow relative d_inline_b d_md_block d_xs_inline_b tr_all_hover">
                            <!--product preview-->
                            <a href="buketyi/bouquets-gerberi/gerberyi-2.html" class="d_block relative pp_wrap">
                                <!--hot or sale product-->
                                <img src="<?php echo get_template_directory_uri(); ?>/img/5-bouquet-jpeg.jpg" class="tr_all_hover" alt="">
                                <span data-href="128" data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Просмотр</span>
                            </a>
                            <!--description and price of product-->
                            <figcaption class="t_xs_align_l">
                                <h5 class="m_bottom_10"><a href="buketyi/bouquets-gerberi/gerberyi-2.html" class="color_dark ellipsis" style="display: block; width: 235px; white-space: nowrap;">Букет из гербер «Свет планет»</a></h5>
                                <div class="clearfix">
                                    <p class="scheme_color f_left fw_medium f_size_ex_large m_bottom_15">2 500 руб.</p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="owl-item" style="width: 285px;">
                        <figure class="r_corners photoframe shadow relative d_inline_b d_md_block d_xs_inline_b tr_all_hover">
                            <!--product preview-->
                            <a href="buketyi/bouquets-gerberi/gereberyi-3.html" class="d_block relative pp_wrap">
                                <!--hot or sale product-->
                                <img src="<?php echo get_template_directory_uri(); ?>/img/6-4f16a3118b96e-jpg.jpg" class="tr_all_hover" alt="">
                                <span data-href="129" data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Просмотр</span>
                            </a>
                            <!--description and price of product-->
                            <figcaption class="t_xs_align_l">
                                <h5 class="m_bottom_10"><a href="buketyi/bouquets-gerberi/gereberyi-3.html" class="color_dark ellipsis" style="display: block; width: 235px; white-space: nowrap;">Букет с герберами «Джуманджи»</a></h5>
                                <div class="clearfix">
                                    <p class="scheme_color f_left fw_medium f_size_ex_large m_bottom_15">2 200 руб.</p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="owl-item" style="width: 285px;">
                        <figure class="r_corners photoframe shadow relative d_inline_b d_md_block d_xs_inline_b tr_all_hover">
                            <!--product preview-->
                            <a href="buketyi/bouquets-gerberi/gerberyi-4.html" class="d_block relative pp_wrap">
                                <!--hot or sale product-->
                                <img src="<?php echo get_template_directory_uri(); ?>/img/6-jpg.jpg" class="tr_all_hover" alt="">
                                <span data-href="130" data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Просмотр</span>
                            </a>
                            <!--description and price of product-->
                            <figcaption class="t_xs_align_l">
                                <h5 class="m_bottom_10"><a href="buketyi/bouquets-gerberi/gerberyi-4.html" class="color_dark ellipsis" style="display: block; width: 235px; white-space: nowrap;">Букет с герберой «Берег Дона»</a></h5>
                                <div class="clearfix">
                                    <p class="scheme_color f_left fw_medium f_size_ex_large m_bottom_15">2 250 руб.</p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="owl-item" style="width: 285px;">
                        <figure class="r_corners photoframe shadow relative d_inline_b d_md_block d_xs_inline_b tr_all_hover filter_class_hit">
                            <!--product preview-->
                            <a href="buketyi/bouquets-gerberi/gerberyi-5.html" class="d_block relative pp_wrap">
                                <!--hot or sale product-->
                                <span class="hot_stripe type_2">
                                  <img src="<?php echo get_template_directory_uri(); ?>/img/hot_product_type_2.png" alt="">
                                </span>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/07-01-11-jpg.jpg" class="tr_all_hover" alt="">
                                <span data-href="131" data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Просмотр</span>
                            </a>
                            <!--description and price of product-->
                            <figcaption class="t_xs_align_l">
                                <h5 class="m_bottom_10"><a href="buketyi/bouquets-gerberi/gerberyi-5.html" class="color_dark ellipsis" style="display: block; width: 235px; white-space: nowrap;">Букет из гербер<br>«Фидель»</a></h5>
                                <div class="clearfix">
                                    <p class="scheme_color f_left fw_medium f_size_ex_large m_bottom_15">2 150 руб.</p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="owl-item" style="width: 285px;">
                        <figure class="r_corners photoframe shadow relative d_inline_b d_md_block d_xs_inline_b tr_all_hover">
                            <!--product preview-->
                            <a href="buketyi/bouquets-gerberi/gerberyi-9.html" class="d_block relative pp_wrap">
                                <!--hot or sale product-->
                                <img src="<?php echo get_template_directory_uri(); ?>/img/buket-15-jpg.jpg" class="tr_all_hover" alt="">
                                <span data-href="135" data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Просмотр</span>
                            </a>
                            <!--description and price of product-->
                            <figcaption class="t_xs_align_l">
                                <h5 class="m_bottom_10"><a href="buketyi/bouquets-gerberi/gerberyi-9.html" class="color_dark ellipsis" style="display: block; width: 235px; white-space: nowrap;">Букет гербер «Цвета осени»</a></h5>
                                <div class="clearfix">
                                    <p class="scheme_color f_left fw_medium f_size_ex_large m_bottom_15">1 500 руб.</p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="owl-item" style="width: 285px;">
                        <figure class="r_corners photoframe shadow relative d_inline_b d_md_block d_xs_inline_b tr_all_hover">
                            <!--product preview-->
                            <a href="buketyi/bouquets-gerberi/gerberyi-10.html" class="d_block relative pp_wrap">
                                <!--hot or sale product-->
                                <img src="<?php echo get_template_directory_uri(); ?>/img/buket-53-1-jpg.jpg" class="tr_all_hover" alt="">
                                <span data-href="136" data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Просмотр</span>
                            </a>
                            <!--description and price of product-->
                            <figcaption class="t_xs_align_l">
                                <h5 class="m_bottom_10"><a href="buketyi/bouquets-gerberi/gerberyi-10.html" class="color_dark ellipsis" style="display: block; width: 235px; white-space: nowrap;">Букет из гербер «Хайп»</a></h5>
                                <div class="clearfix">
                                    <p class="scheme_color f_left fw_medium f_size_ex_large m_bottom_15">3 350 руб.</p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="owl-item" style="width: 285px;">
                        <figure class="r_corners photoframe shadow relative d_inline_b d_md_block d_xs_inline_b tr_all_hover filter_class_hit">
                            <!--product preview-->
                            <a href="buketyi/bouquets-gerberi/gerberyi-15.html" class="d_block relative pp_wrap">
                                <!--hot or sale product-->
                                <span class="hot_stripe type_2"><img src="<?php echo get_template_directory_uri(); ?>/img/hot_product_type_2.png" alt=""></span>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/d-pink-gerbera-bouquet-web-jpg.jpg" class="tr_all_hover" alt="">
                                <span data-href="141" data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Просмотр</span>
                            </a>
                            <!--description and price of product-->
                            <figcaption class="t_xs_align_l">
                                <h5 class="m_bottom_10"><a href="buketyi/bouquets-gerberi/gerberyi-15.html" class="color_dark ellipsis" style="display: block; width: 235px; white-space: nowrap;">Букет с герберой<br>«Долорес»</a></h5>
                                <div class="clearfix">
                                    <p class="scheme_color f_left fw_medium f_size_ex_large m_bottom_15">1 850 руб.</p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="owl-controls clickable">
                <div class="owl-pagination">
                    <div class="owl-page active"><span class=""></span></div>
                    <div class="owl-page"><span class=""></span></div>
                </div>
            </div>
        </div>
        <hr class="divider_type_3 m_bottom_15">
        <a href="buketyi/bouquets-gerberi/" role="button" class="d_inline_b bg_light_color_2 color_dark tr_all_hover button_type_4 r_corners"><i class="fa fa-reply m_left_5 m_right_10 f_size_large"></i>Обратно в Букет из гербер</a>
    </div>
</div>

<?php get_footer(); ?>
