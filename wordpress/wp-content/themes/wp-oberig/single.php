<?php get_header(); ?>
<section class="breadcrumbs">
    <div class="container">
      <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
    </div>
</section><!-- breadcrumbs -->
<div class="page_content_offset">
    <div class="container">
      <div class="row clearfix">
          <?php if (have_posts()): while (have_posts()) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h1 class="single-title inner-title"><?php the_title(); ?></h1>
            <?php the_content(); ?>
          </article>
          <?php endwhile; else: ?>
          <article>
            <h2 class="page-title inner-title"><?php _e( 'Записи нет', 'wpeasy' ); ?></h2>
          </article>
      </div><!-- row -->
       <?php endif; ?>

       <!-- Популярные товары -->
       <?php $posts = get_field('popular_products', 30); ?>
       <?php if( $posts ): ?>
       <h2><?php _e( 'ПОПУЛЯРНЫЕ ТОВАРЫ', 'woocommerce' ); ?></h2>
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
    </div><!-- container -->
  </div><!-- page_content_offset -->
<?php get_footer(); ?>
