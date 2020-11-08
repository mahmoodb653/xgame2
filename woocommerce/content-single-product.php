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
if(get_field('single_product_banner')){
?>
<img  class="single-banner" src="<?=get_field('single_product_banner')?>">
<?php } else{ ?>
<div class="single-banner" src="" style="display: block;height: 100px;"></div>
<?php } ?>
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
	        <?php the_content(); ?>
        </div>

        <div class="product-container col-lg-12 p-0">
	        <?php

	        $args = array(
		        'posts_per_page' => 12,
		        'columns'        => 4,
		        'orderby'        => 'rand', // @codingStandardsIgnoreLine.
	        );
	        woocommerce_related_products($args);
            ?>
        </div>

        <div class="product-container col-lg-12">
            <span><span>42</span> دیدگاه برای سی دی کی اورجینال بازی mortal kombat 11</span>

            <div class="comments-container">
                <div class="panel-comment" user-level="golden">
                    <div class="user-avatar">
                        <i class="icon-profile-fill"></i>
                    </div>
                    <div class="panel-body">
                        <div class="d-flex justify-content-between">
                            <span class="comment-username">امیرحسین بیگی</span>
                            <div class="rate">
                                <span class="star checked"></span>
                                <span class="star checked"></span>
                                <span class="star checked"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="comment-user-level">کاربر طلایی</span>
                        </div>
                        <span class="post-summary">
                  بهترین سایت حال حاضر ایران محولاتش همیشه به روز هست و قیمتش بسیار منصفانه من از
                  خریدم خیلی راضیم از پشتیبانی خوب .سایتتون هم متشکرم</span
                        >
                        <div class="details-comment">
                            <span id="time">6 ساعت پیش</span>
                            <button>پاسخ <i class="icon-reply"></i></button>
                        </div>
                    </div>
                </div>

                <div class="panel-comment reply" user-level="admin">
                    <div class="user-avatar">
                        <i class="icon-profile-fill"></i>
                    </div>
                    <div class="panel-body">
                        <div class="d-flex justify-content-between">
                            <span class="comment-username">امیرحسین بیگی</span>
                            <div class="rate">
                                <span class="star checked"></span>
                                <span class="star checked"></span>
                                <span class="star checked"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="comment-user-level">مدیریت وبسایت</span>
                        </div>
                        <span class="post-summary">
                  بهترین سایت حال حاضر ایران محولاتش همیشه به روز هست و قیمتش بسیار منصفانه من از
                  خریدم خیلی راضیم از پشتیبانی خوب .سایتتون هم متشکرم</span
                        >
                        <div class="details-comment">
                            <span id="time">6 ساعت پیش</span>
                            <button>پاسخ <i class="icon-reply"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="comments-container">
                <div class="panel-comment" user-level="golden">
                    <div class="user-avatar">
                        <i class="icon-profile-fill"></i>
                    </div>
                    <div class="panel-body">
                        <div class="d-flex justify-content-between">
                            <span class="comment-username">امیرحسین بیگی</span>
                            <div class="rate">
                                <span class="star checked"></span>
                                <span class="star checked"></span>
                                <span class="star checked"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="comment-user-level">کاربر طلایی</span>
                        </div>
                        <span class="post-summary">
                  بهترین سایت حال حاضر ایران محولاتش همیشه به روز هست و قیمتش بسیار منصفانه من از
                  خریدم خیلی راضیم از پشتیبانی خوب .سایتتون هم متشکرم</span
                        >
                        <div class="details-comment">
                            <span id="time">6 ساعت پیش</span>
                            <button>پاسخ <i class="icon-reply"></i></button>
                        </div>
                    </div>
                </div>

                <div class="panel-comment reply" user-level="admin">
                    <div class="user-avatar">
                        <i class="icon-profile-fill"></i>
                    </div>
                    <div class="panel-body">
                        <div class="d-flex justify-content-between">
                            <span class="comment-username">امیرحسین بیگی</span>
                            <div class="rate">
                                <span class="star checked"></span>
                                <span class="star checked"></span>
                                <span class="star checked"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="comment-user-level">مدیریت وبسایت</span>
                        </div>
                        <span class="post-summary">
                  بهترین سایت حال حاضر ایران محولاتش همیشه به روز هست و قیمتش بسیار منصفانه من از
                  خریدم خیلی راضیم از پشتیبانی خوب .سایتتون هم متشکرم</span
                        >
                        <div class="details-comment">
                            <span id="time">6 ساعت پیش</span>
                            <button>پاسخ <i class="icon-reply"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="send-comment">
                <span class="send-comment-title">دیدگاه خود را بنویسید</span>
                <span class="send-comment-hint">ایمیل شما محفوظ می ماند و منتشر نخواهد شد</span>
                <div class="d-flex mb-4">
                    <span class="ml-3">امتیاز شما</span>
                    <div class="rate">
                        <span class="star checked"></span>
                        <span class="star checked"></span>
                        <span class="star checked"></span>
                        <span class="star"></span>
                        <span class="star"></span>
                    </div>
                </div>
                <div class="comment-container">
                    <div class="comment-information">
                        <div class="input position-relative">
                            <input type="text" />
                            <label>نام شما</label>
                        </div>
                        <div class="input position-relative">
                            <input type="text" />
                            <label>ایمیل شما</label>
                        </div>
                    </div>
                    <div class="input position-relative">
                        <textarea></textarea>
                        <label class="label-text-comment">نظر شما</label>
                    </div>
                </div>
                <input class="send-comment-btn" type="submit" value="ثبت نظر" />
            </div>
        </div>
    </div>
</section>
