<?php
/**
 * Checkout shipping information form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-shipping.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
<div class="woocommerce-shipping-fields">
	<?php if ( true === WC()->cart->needs_shipping_address() ) : ?>

		<h3 id="ship-to-different-address">
			<label for="ship-to-different-address-checkbox" class="checkbox"><?php _e( 'Ship to a different address?', 'woocommerce' ); ?></label>
			<input id="ship-to-different-address-checkbox" class="input-checkbox" <?php checked( apply_filters( 'woocommerce_ship_to_different_address_checked', 'shipping' === get_option( 'woocommerce_ship_to_destination' ) ? 1 : 0 ), 1 ); ?> type="checkbox" name="ship_to_different_address" value="1" />
		</h3>

		<div class="shipping_address">

			<?php do_action( 'woocommerce_before_checkout_shipping_form', $checkout ); ?>

			<?php foreach ( $checkout->checkout_fields['shipping'] as $key => $field ) : ?>

				<?php woocommerce_form_field( $key, $field, $checkout->get_value( $key ) ); ?>

			<?php endforeach; ?>

			<?php do_action( 'woocommerce_after_checkout_shipping_form', $checkout ); ?>

		</div>

	<?php endif; ?>

	<?php do_action( 'woocommerce_before_order_notes', $checkout ); ?>

	<?php if ( apply_filters( 'woocommerce_enable_order_notes_field', get_option( 'woocommerce_enable_order_comments', 'yes' ) === 'yes' ) ) : ?>

		<?php if ( ! WC()->cart->needs_shipping() || wc_ship_to_billing_address_only() ) : ?>

			<h3><?php _e( 'Дополнительная информация', 'woocommerce' ); ?></h3>

		<?php endif; ?>

		<?php foreach ( $checkout->checkout_fields['order'] as $key => $field ) : ?>

			<?php woocommerce_form_field( $key, $field, $checkout->get_value( $key ) ); ?>

		<?php endforeach; ?>

	<?php endif; ?>

	<?php do_action( 'woocommerce_after_order_notes', $checkout ); ?>
  <p><b>Условия выполнения заказа:</b>
    Заказы принимаются в письменном виде по форме бланка, расположенного в конце Каталог-Прайса с обязательным указанием всех реквизитов бланка и высылаются электронной или УКР почтой . Предварительная оплата производится только после согласования заказа в мае м-це. Минимальная сумма заказа 300грн.<br/>
    <b>Почтовые расходы составляют:</b><br/> УКРПОЧТОЙ : при заказе от200 до 300 грн — 30грн, от 300 до700грн — 10% от суммы заказа, свыше 700грн -70грн
     НОВАЯ ПОЧТА,ДЕЛИВЕРИ , ИНТАЙМ (только при наличии   личного мобильного телефона): упаковка материала от 10 до 20 грн в зависимости от объема заказа, оплата почтовых услуг производится заказчиком при получении посылки. В случае возникших изменений данных , обязательно информируйте «ОБЕРІГ»<br/>
     <b>Реализация заказов в сентябре</b><br/>
     Адрес  для  корреспонденций: Пастух Вера Леонидовна,   Ул.Марценюка,31,   С.Гуменное    Винницкий р-н ,Винницкая обл. 23203
  </p>
</div>
