<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.

	return;
}
?>
<?php
if ( get_field( 'single_product_banner' ) ) {
	echo '<div style="height:350px"></div>';
}
?>
<section id="product-<?php the_ID(); ?>" <?php wc_product_class( 'main container', $product ); ?>>
	<?php
	/**
	 * Hook: woocommerce_before_single_product.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 */
	do_action( 'woocommerce_before_single_product' );
	?>
    <div class="row">
        <div class="product-container col-lg-12">
            <nav class="col-lg-12" aria-label="breadcrumb">
	            <?php woocommerce_breadcrumb(); ?>
            </nav>
            <div class="row product">
                <div class="col-lg-2">
	                <?php
	                /**
	                 * Hook: woocommerce_before_single_product_summary.
	                 *
	                 * @hooked woocommerce_show_product_sale_flash - 10
	                 * @hooked woocommerce_show_product_images - 20
	                 */
	                do_action( 'woocommerce_before_single_product_summary' );
	                ?>
                </div>
                <div class="col-lg-6">
                    <?php wc_get_template( 'single-product/title.php' ); ?>
                    <?php wc_get_template( 'single-product/product-thumbnails.php' ); ?>
                </div>
                <div class="col-lg-4">
                    <div class="shopping_container">
	                    <?php
	                    /**
	                     * Hook: woocommerce_single_product_summary.
	                     *
	                     * @hooked woocommerce_template_single_title - 5 - removed
	                     * @hooked woocommerce_template_single_rating - 10
	                     * @hooked woocommerce_template_single_price - 10
	                     * @hooked woocommerce_template_single_excerpt - 20 - removed
	                     * @hooked woocommerce_template_single_add_to_cart - 30
	                     * @hooked woocommerce_template_single_meta - 40
	                     * @hooked woocommerce_template_single_sharing - 50
	                     * @hooked WC_Structured_Data::generate_product_data() - 60
	                     */
	                    do_action( 'woocommerce_single_product_summary' );
	                    ?>

                    </div>
                </div>
            </div>
        </div>

        <div class="product-container col-lg-12">
            <div class="headline justify-content-center mt-4">
            <div class="headline-title">
                <span class="headline-title__text">توضیحات دسته بندی</span>
            </div>
            </div>
		    <?php $terms = get_the_terms ( $product->get_id(), 'product_cat' );
		   echo   $terms[0]->description;
		  ?>

        </div>

        <div class="product-container col-lg-12">
            <div class="headline justify-content-center mt-4">
                <div class="headline-title">
                    <span class="headline-title__text">توضیحات محصول</span>
                </div>
            </div>
	        <?php the_content(); ?>
        </div>

        <div class="product-container col-lg-12 p-0">
	        <?php

	        $args = array(
		        'posts_per_page' => 12,
		        'columns'        => 4,
		        'orderby'        => 'rand', // @codingStandardsIgnoreLine.
	        );
	        woocommerce_related_products( $args );
	        ?>
        </div>

	    <?php
	    echo comments_template();
	    ?>
    </div>
</section>
