<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
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
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>
<section class="breadcrumbs">
    <?php
    /**
     * woocommerce_before_main_content hook.
     *
     * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
     * @hooked woocommerce_breadcrumb - 20
     */
    do_action( 'woocommerce_before_main_content' );
  ?>
</section>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

<!-- RELATED PRODUCTS -->
<div class="container">
    <h2 class="related_title"><?php _e( 'ПОПУЛЯРНЫЕ ТОВАРЫ', 'woocommerce' ); ?></h2>
  <?php $posts = get_field('popular_products', 30); ?>
  <?php if( $posts ): ?>
  <div class="related products">
    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
        <div class="product_item isotope-item col-md-3">
          <figure class="r_corners photoframe shadow relative animate_ftb t_align_c long animate_vertical_finished">
            <a href="<?php the_permalink(); ?>" class="woocommerce-LoopProduct-link">
              <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $p->ID, "medium" ) ); ?>" class="attachment-shop_catalog size-shop_catalog wp-post-image">
                  <h2 class="woocommerce-loop-product__title"><?php the_title(); ?></h2>
                <span class="woocommerce-Price-amount amount">
                  <?php if ( $price_html = $product->get_price_html() ) : ?>
                     <span class="price"><?php echo $price_html; ?></span>
                  <?php endif; ?>
                </span>
            </a>
              <?php echo apply_filters( 'woocommerce_loop_add_to_cart_link',
              sprintf( '<a rel="nofollow" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="%s">%s</a>',
                esc_url( $product->add_to_cart_url() ),
                esc_attr( isset( $quantity ) ? $quantity : 1 ),
                esc_attr( $product->id ),
                esc_attr( $product->get_sku() ),
                esc_attr( isset( $class ) ? $class : 'button' ),
                esc_html( $product->add_to_cart_text() )
              ),
            $product ); ?>
          </figure>
        </div><!-- product_item -->
        <?php endforeach; ?>
    </div><!-- related products -->
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    <?php endif; ?>
    <!-- Возврат в категорию -->
    <?php echo $product->get_categories( ', ', '<span class="posted_in"><i class="fa fa-reply m_left_5 m_right_10 f_size_large"></i>' . _n( 'В категорию', 'В категорию', $cat_count, 'woocommerce' ) . ' ', '</span>' ); ?>
    <!-- Возврат в категорию -->
</div><!-- container -->
<!-- RELATED PRODUCTS -->

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

<?php get_footer( 'shop' ); ?>
