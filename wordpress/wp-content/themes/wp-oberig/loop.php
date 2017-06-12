<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class('looper product_item isotope-item col-md-3'); ?>>
    <figure class="r_corners photoframe shadow relative animate_ftb t_align_c long animate_vertical_finished">
      <a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <?php if ( has_post_thumbnail()) :
          the_post_thumbnail('medium');
        else: ?>
          <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
        <?php endif; ?>


      <h2 class="inner-title">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
      </h2><!-- /post title -->
        <span class="price">
          <?php $_product = wc_get_product(); ?>
          <?php echo $_product->get_price(); ?> грн
        </span>
      </a><!-- /post thumbnail -->
      <?php global $product;
        echo apply_filters( 'woocommerce_loop_add_to_cart_link',
            sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="button %s product_type_%s">%s</a>',
                esc_url( $product->add_to_cart_url() ),
                esc_attr( $product->id ),
                esc_attr( $product->get_sku() ),
                $product->is_purchasable() ? 'add_to_cart_button' : '',
                esc_attr( $product->product_type ),
                esc_html( $product->add_to_cart_text() )
            ),
        $product ); ?>
    </figure>

  </div><!-- /looper -->
  <?php endwhile; else: ?>
  <div>

    <h2 class="title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>

  </div><!-- /article -->
<?php endif; ?>
