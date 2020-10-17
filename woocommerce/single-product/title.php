<?php
/**
 * Single Product title
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/title.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @package    WooCommerce/Templates
 * @version    1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
global $post;

the_title( '<h1 class="product-name">', '</h1>' );

if ( $post->post_excerpt ) {
	echo '<p class="product-description">' . $post->post_excerpt . '</p>';
}
?>

<?php if ( get_field( 'product_key' ) ): ?>
    <ul class="details">

		<?php while ( the_repeater_field( 'product_key' ) ): ?>
            <li>
                <span><?php the_sub_field( 'title' ); ?></span>
                <span class="blue"><?php the_sub_field( 'value' ); ?></span>
            </li>
		<?php endwhile; ?>

    </ul>
<?php endif;
