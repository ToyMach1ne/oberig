<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $tabs ) ) : ?>

	<div class="woocommerce-tabs wc-tabs-wrapper">
		<ul class="tabs wc-tabs">
			<?php $i = 0; foreach ( $tabs as $key => $tab ) : ?>
				<?php if( $i == 0) {
          $class='current';
          } else {
            $class ='';
        } ?>
        <li class="<?php echo esc_attr( $key ); ?>_tab <?php echo $class; ?>">
					<a href="#tab-<?php echo esc_attr( $key ); ?>"><?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', esc_html( $tab['title'] ), $key ); ?></a>
				</li>
			<?php $i++; endforeach;  ?>
         <li class="delivery_tab">
          <a href="#">Доставка</a>
        </li>
		</ul>
    <div class="product-tabs-wrapp">
          <?php $z = 0; foreach ( $tabs as $key => $tab ) : ?>
          <?php if( $z == 0) {
          $class='intro';
          } else {
            $class ='';
        } ?>
      <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--<?php echo esc_attr( $key ); ?>
      <?php echo $class; ?> panel entry-content wc-tab" id="tab-<?php echo esc_attr( $key ); ?>">
        <?php call_user_func( $tab['callback'], $key, $tab ); ?>
      </div>
    <?php $z++; endforeach; ?>
    <div class="dlivery_block woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="delivery">
          <?php the_field('delivery_tab'); ?>
        </div>
    </div>
	</div>

<?php endif; ?>
