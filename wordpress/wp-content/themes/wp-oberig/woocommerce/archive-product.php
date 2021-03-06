<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>
  <!-- Слайдер на главной -->
   <?php get_template_part('slider-main'); ?>
   <!-- owl-demo -->
  <!-- Слайдер на главной -->
	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>
		<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
			<h1 class="page-title"><?php woocommerce_page_title(); ?></h1>
		<?php endif; ?>

		<?php
			/**
			 * woocommerce_archive_description hook.
			 *
			 * @hooked woocommerce_taxonomy_archive_description - 10
			 * @hooked woocommerce_product_archive_description - 10
			 */
			do_action( 'woocommerce_archive_description' );
		?>
          <!-- ТАБЫ ДЛЯ ИЗОТОПА -->
                <ul class="horizontal_list clearfix tt_uppercase isotope_menu f_size_ex_large">
                    <li class="active m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr animate_horizontal_finished">
                        <button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none" data-filter="*">Все</button>
                    </li>
                    <li class="m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr animate_horizontal_finished">
                        <button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none" data-filter=".new">Новинки</button>
                    </li>
                    <li class="m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr animate_horizontal_finished">
                        <button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none" data-filter=".specials">Скидки</button>
                    </li>
                    <li class="m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr animate_horizontal_finished">
                        <button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none" data-filter=".hit">Хит продаж</button>
                    </li>
                </ul>
           <!-- ТАБЫ ДЛЯ ИЗОТОПА -->

           <!-- ТОВАРЫ МАГАЗИНА -->
          <div class="archive-wrapper">
            <section class="products_container clearfix m_bottom_25 m_sm_bottom_15 isotope col-lg-9 col-md-9 col-sm-9">
              <?php if ( have_posts() ) : ?>
                <?php
                  /**
                   * woocommerce_before_shop_loop hook.
                   *
                   * @hooked woocommerce_result_count - 20
                   * @hooked woocommerce_catalog_ordering - 30
                   */
                  do_action( 'woocommerce_before_shop_loop' );
                ?>

                <?php woocommerce_product_loop_start(); ?>

                  <?php woocommerce_product_subcategories(); ?>

                  <?php while ( have_posts() ) : the_post(); ?>

                    <?php wc_get_template_part( 'content', 'product' ); ?>

                  <?php endwhile; // end of the loop. ?>

                <?php woocommerce_product_loop_end(); ?>

                <?php
                  /**
                   * woocommerce_after_shop_loop hook.
                   *
                   * @hooked woocommerce_pagination - 10
                   */
                  do_action( 'woocommerce_after_shop_loop' );
                ?>

              <?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>
                <?php wc_get_template( 'loop/no-products-found.php' ); ?>
              <?php endif; ?>

            </section>
          </div><!-- archive-wrapper -->
          <!-- ТОВАРЫ МАГАЗИНА -->

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

<?php get_footer( 'shop' ); ?>
