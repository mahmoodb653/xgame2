<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.1
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;
$alt = $product->get_name();
if ( $product->get_image_id() ) {

	echo '<img class="product-image" src="' . wp_get_attachment_url( $product->get_image_id() ) . '" alt="' . $alt . '" />';

} else {
	echo '<img class="product-image" src="' . wp_get_attachment_url( $product->get_image_id() ) . '" alt="" />';
}

//do_action( 'woocommerce_product_thumbnails' );

if ( get_field( 'aparat_video' ) ) { ?>

    <button class="button-view-video" data-pid="<?= $product->get_id() ?>">
        مشاهده تریلر بازی <i class="icon-youtube"></i>
    </button>

<?php
}
?>
