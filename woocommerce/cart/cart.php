<section class="main container">
    <div class="row justify-content-between">
        <div class="col-lg-8 list-products">
            <?php foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
	            $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
	            $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
	            //var_dump($_product);?>


            <div class="product">
                <div class="d-flex">
                    <img class="product__image" src="<?= get_the_post_thumbnail_url($product_id); ?>" alt="">
                    <div class="product__details">
                        <span class="details__type"><?=$_product->get_name()?></span>
                    </div>
                </div>

                <div class="d-flex justify-content-center align-items-center">
                    <div class="price-container">
                        <span class="price"><?=WC()->cart->get_product_price( $_product )?></span>
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
                    <a href="<?=esc_url( wc_get_cart_remove_url( $cart_item_key ) )?>" data-product_id="<?=esc_attr( $product_id )?>"
                       data-product_sku="<?=esc_attr( $_product->get_sku() )?>" class="icon-trash"></a>
                </div>
            </div>

            <?php }
            ?>

        </div>
        <div class="col-lg-3 shopping_container">
            <div>
	            <?php do_action( 'woocommerce_cart_collaterals' ); ?>
            </div>

	        <?php if ( wc_coupons_enabled() ) { ?>
                <div class="coupon">
                    <label for="coupon_code"><?php esc_html_e( 'Coupon:', 'woocommerce' ); ?></label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" /> <button type="submit" class="button" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?></button>
			        <?php do_action( 'woocommerce_cart_coupon' ); ?>
                </div>
	        <?php } ?>

            <button type="submit" class="button" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button>

	        <?php do_action( 'woocommerce_cart_actions' ); ?>

	        <?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>

            <a href="http://localhost/xgame/checkout/" class="shopping-btn">پرداخت</a>


        </div>
    </div>
</section>
