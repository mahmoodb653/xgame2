<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.8.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_cart' ); ?>

<section class="main container">
    <div class="row justify-content-between">
        <div class="col-lg-8 list-products">
            <form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
				<?php foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
					$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
					$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
					//var_dump($_product);?>


                    <div class="product">
                        <div class="d-flex">
                            <img class="product__image" src="<?= get_the_post_thumbnail_url( $product_id ); ?>" alt="">
                            <div class="product__details">
                                <a href="<?= get_permalink( $_product->get_id() ) ?>"><span
                                            class="details__type"><?= $_product->get_name() ?></span></a>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center align-items-center">
                            <div class="price-container">
                                <span class="price"><?= WC()->cart->get_product_price( $_product ) ?></span>
                                <span>تومان</span>
                            </div>
                            <div class="counter d-flex justify-content-center my-4">

								<?php
								if ( $_product->is_sold_individually() ) {
									$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
								} else {
									$product_quantity = woocommerce_quantity_input(
										array(
											'input_name'   => "cart[{$cart_item_key}][qty]",
											'input_value'  => $cart_item['quantity'],
											'max_value'    => $_product->get_max_purchase_quantity(),
											'min_value'    => '0',
											'product_name' => $_product->get_name(),
										),
										$_product,
										false
									);
								}

								echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
								// ?>

                            </div>
                            <a href="<?= esc_url( wc_get_cart_remove_url( $cart_item_key ) ) ?>"
                               data-product_id="<?= esc_attr( $product_id ) ?>"
                               data-product_sku="<?= esc_attr( $_product->get_sku() ) ?>" class="icon-trash"></a>
                        </div>
                    </div>

				<?php }
				?>


				<?php do_action( 'woocommerce_cart_actions' ); ?>

				<?php if ( wc_coupons_enabled() ) { ?>
                    <div class="coupon">
                        <label for="coupon_code"><?php esc_html_e( 'Coupon:', 'woocommerce' ); ?></label> <input
                                type="text" name="coupon_code" class="input-text" id="coupon_code" value=""
                                placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>"/>
                        <button type="submit" class="button" name="apply_coupon"
                                value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?></button>
						<?php do_action( 'woocommerce_cart_coupon' ); ?>
                    </div>
				<?php } ?>

				<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
            </form>

        </div>

        <div class="col-lg-3 shopping_container cart-collaterals">
            <div class="cart_totals">
                <div class="shop_table shop_table_responsive">
                    <ul>
                        <li class="title-list-cart-shopping">مبلغ کل</li>
                        <li class="value-list-cart-shopping"> <?= WC()->cart->get_subtotal(); ?> تومان</li>
                    </ul>
                    <ul>
                        <li class="title-list-cart-shopping">تعداد کل</li>
                        <li class="value-list-cart-shopping"><?= WC()->cart->get_cart_contents_count(); ?> عدد</li>
                    </ul>
					<?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
                        <ul class="cart-discount coupon-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
                            <li><?php wc_cart_totals_coupon_label( $coupon ); ?></li>
                            <li data-title="<?php echo esc_attr( wc_cart_totals_coupon_label( $coupon, false ) ); ?>"><?php wc_cart_totals_coupon_html( $coupon ); ?></li>
                        </ul>
					<?php endforeach; ?>
                    <ul>
                        <li class="title-list-cart-shopping">مبلغ قابل پرداخت</li>
                        <li class="value-list-cart-shopping"><?= WC()->cart->get_cart_contents_total(); ?> تومان</li>
                    </ul>
                </div>
            </div>

            <a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="shopping-btn">پرداخت</a>

			<?php //do_action( 'woocommerce_cart_collaterals' ); ?>
        </div>
    </div>
</section>

<div class="cart-tips">
	<?php the_field( 'cart_tips', 'option' ); ?>
</div>

<?php do_action( 'woocommerce_after_cart' ); ?>
