<?php if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>
    <!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php wp_head(); ?>
    </head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
    <div class="back-image">
        <div class="back-drop">
            <div id="main" class="container">
                <section id="header">
					<?= get_template_part( 'template/front-page-header' ) ?>

                    <div class="header-slider-container">
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <!--  -->

							<?php
							if ( have_rows( 'xcontent', 'option' ) ):

								// Loop through rows.
								while ( have_rows( 'xcontent', 'option' ) ) : the_row();
									if ( have_rows( 'main_slider' ) ):
										while ( have_rows( 'main_slider' ) ) : the_row(); ?>
                                            <div class="swiper-slide header-slide swiper-slide-active"
                                                 image="<?= get_sub_field( 'main_slider_image' ) ?>">
                                                <div>
                                                    <span class="titleXgames line line-red"><?= get_sub_field( 'main_slider_slogan' ) ?></span>
                                                    <h1><?= get_sub_field( 'main_slider_title' ) ?><span
                                                                class="red"><?= get_sub_field( 'main_slider_version' ) ?></span>
                                                    </h1>
                                                    <p>
														<?= get_sub_field( 'main_slider_desc' ) ?>
                                                    </p>
													<?php
													$platforms = get_sub_field( 'main_slider_platform' );
													?>
                                                    <div class="detail-container">
                                                        <a href="<?= get_sub_field( 'main_slider_link' ) ?>">
                                                            <button class="button button-larg button-red">اطلاعات
                                                                بیشتر
                                                            </button>
                                                        </a>
														<?= ( $platforms && in_array( 'playstation', $platforms ) ) ? ' <span class="platform platform-larg">
                        <i class="icon-playstation"></i>
                      </span>' : '' ?>
														<?= ( $platforms && in_array( 'windows', $platforms ) ) ? '<span class="platform platform-larg">
                        <i class="icon-windows"></i>
                      </span>' : '' ?>
                                                    </div>
                                                </div>
                                            </div>
										<?php

										endwhile;
									endif;
									// End loop.
								endwhile;

							endif; ?>

                            <!--  -->
                        </div>

                        <div class="pagination-container">
                            <div class="header-button-prev">
                                <i class="icon-arrow-right"></i>
                            </div>
                            <div class="header-pagination"></div>
                            <div class="header-button-next">
                                <i class="icon-arrow-left"></i>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="pattern__header"></div>
    <section id="main" class="container">
        <section id="feature-innerbox" class="row">
            <div class="pattern__feature"></div>

            <div class="col-md-2 feature-innerbox__feature-col">
                <div class="feature-col__item secure-payment">
                    <div class="feature-item__icon icon-bg-secure-payment">
                        <i class="icon-secure-payment"></i>
                    </div>
                    <span class="feature-item__title">پرداخت ایمن</span>
                    <span class="feature-item__sub-title sub-title-color-secure-payment">
              سایت ما می تواند این اطمینان را به شما بدهد که صفر تا صد پرداخت از طریق سایت ایمن است.
            </span>
                </div>
            </div>
            <div class="col-md-2 feature-innerbox__feature-col">
                <div class="feature-col__item">
                    <div class="feature-item__icon icon-bg-price-guarantee">
                        <i class="icon-price-guarantee"></i>
                    </div>
                    <span class="feature-item__title">تضمین قیمت</span>
                    <span class="feature-item__sub-title">
              تمام قیمت هایی که در سایت بر روی محصولات درج شده اند قیمت های تضمین شده بازار است.
            </span>
                </div>
            </div>
            <div class="col-md-2 feature-innerbox__feature-col">
                <div class="feature-col__item">
                    <div class="feature-item__icon icon-bg-fast-delivery">
                        <i class="icon-fast-delivery"></i>
                    </div>
                    <span class="feature-item__title">تحویل سریع</span>
                    <span class="feature-item__sub-title">
              محصول شما پس از پرداخت قیمت در سریعترین زمان ممکن برای شما ارسال خواهد شد.
            </span>
                </div>
            </div>
            <div class="col-md-2 feature-innerbox__feature-col">
                <div class="feature-col__item">
                    <div class="feature-item__icon icon-bg-online-support">
                        <i class="icon-online-support"></i>
                    </div>
                    <span class="feature-item__title">پشتیبانی آنلاین</span>
                    <span class="feature-item__sub-title">
              ساعته پاسخگوی سوالات 24 سایت ما شما کاربران عزیز سایت است و شما عزیزان می توانید سوال.
              های خود را از ما بپرسید
            </span>
                </div>
            </div>
            <div class="col-md-2 feature-innerbox__feature-col">
                <div class="feature-col__item">
                    <div class="feature-item__icon icon-bg-refund">
                        <i class="icon-refund"></i>
                    </div>
                    <span class="feature-item__title">بازگشت وجه</span>
                    <span class="feature-item__sub-title">
              سایت ما تضمین می کند در صورت رضایت نداشتن از محصول وجه شما را باز پرداخت کند.
            </span>
                </div>
            </div>
        </section>

        <!-- banners start -->

        <section id="baners" class="col-md-0">

			<?php
			if ( have_rows( 'xcontent', 'option' ) ):

				// Loop through rows.
				while ( have_rows( 'xcontent', 'option' ) ) : the_row();
					if ( have_rows( 'main_banners' ) ):
						$i = 1;
						while ( have_rows( 'main_banners' ) ) : the_row();
							?>

							<?= $i % 2 != 0 ? '<div class="row">' : ''; ?>

                            <div class="col-lg-<?= get_sub_field( 'main_banners_width' ) ?>">
                                <a href="<?= get_sub_field( 'main_banners_link' ) ?>">
                                    <div class="baner justify-content-center"
                                         style="background-image: url(<?= get_sub_field( 'main_banners_image' ) ?>);">
                                        <span class="titleXgames line line-red"><?= get_sub_field( 'main_banners_slogan' ) ?></span>
                                        <h1><?= get_sub_field( 'main_banners_title' ) ?> <span
                                                    class="red"><?= get_sub_field( 'main_banners_version' ) ?></span>
                                        </h1>
                                        <div class="detail-container">
                                            <button class="button button-small button-red">اطلاعات بیشتر</button>
											<?php
											$platformsb = get_sub_field( 'main_banners_platform' );
											?>
											<?= ( $platformsb && in_array( 'playstation', $platformsb ) ) ? ' <span class="platform platform-larg">
                        <i class="icon-playstation"></i>
                      </span>' : '' ?>
											<?= ( $platformsb && in_array( 'windows', $platformsb ) ) ? '<span class="platform platform-larg">
                        <i class="icon-windows"></i>
                      </span>' : '' ?>
                                        </div>
                                    </div>
                                </a>
                            </div>

							<?= $i % 2 == 0 ? ' </div>' : ''; ?>

							<?php
							$i ++;
						endwhile;
					endif;
					// End loop.
				endwhile;

			endif; ?>

        </section>

        <!-- banners end -->

        <!-- product start -->

        <section id="products">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row sliders-container">

						<?php
						foreach ( get_field( 'xcontent', 'option' )['product_slider'] as $option ) {

							//var_dump( $option );

							if ( is_front_page() ) {
								$paged = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1;
							} else {
								$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
							}
							$meta_query = WC()->query->get_meta_query();
							$wc_attr    = array(
								'post_type'      => 'product',
								'product_cat'    => $option['product_slider_category'] != '' ? $option['product_slider_category'] : '',
								'posts_per_page' => 15,
								'paged'          => $paged,
								'orderby'        => $option['product_slider_orderby'],
								'order'          => $option['product_slider_order'],
							);
							switch ( $option['product_slider_type'] ) {
								case 'featured':
									$meta_query[]         = array(
										array(
											'taxonomy' => 'product_visibility',
											'field'    => 'name',
											'terms'    => 'featured',
											'operator' => 'IN'
										),
									);
									$wc_attr['tax_query'] = $meta_query;
									break;
								case 'onsale':
									$product_ids_on_sale = wc_get_product_ids_on_sale();
									$wc_attr['post__in'] = $product_ids_on_sale;
									break;
								case 'best-selling':
									$wc_attr['meta_key'] = 'total_sales';
									$wc_attr['orderby']  = 'meta_value_num';
									break;
								case 'latest':
									$wc_attr['orderby'] = 'date';
									break;
								case 'toprate':
									$wc_attr['orderby']  = 'meta_value_num';
									$wc_attr['meta_key'] = '_wc_average_rating';
									$wc_attr['order']    = 'DESC';
									break;
								case 'deal':
									$product_ids_on_sale   = wc_get_product_ids_on_sale();
									$wc_attr['post__in']   = $product_ids_on_sale;
									$wc_attr['meta_query'] = array(
										'relation' => 'AND',
										array(
											'key'     => '_sale_price_dates_to',
											'value'   => time(),
											'compare' => '>'
										)
									);
									break;
								default:
									break;
							}
							$product_query = new WP_Query( $wc_attr );

							?>

                            <div class="col-lg-12">
                                <div class="headline">
                                    <div class="headline-title">
                                        <i class="<?= $option['product_slider_icon'] ?> headline-title__icon"></i>
                                        <span class="headline-title__text"><?= $option['product_slider_title'] ?></span>
                                    </div>
                                    <a class="see-more" href="<?= $option['product_slider_link'] ?>">مشاهده همه <i
                                                class="icon-chevron-left"></i></a>
                                </div>

                                <div class="latest-products-innerBox">
                                    <div class="latest-products-slider swiper-wrapper">
										<?php

										while ( $product_query->have_posts() ) : $product_query->the_post(); ?>
                                        <div <?php wc_product_class( 'swiper-slide product-container' ); ?>>
											<?php
                                            get_template_part('woocommerce/content-product');
                                            ?>
                                            </div>
                                        <?php
                                        endwhile;
										?>

                                    </div>

                                    <div class="pagination-container">
                                        <div class="product-button-prev">
                                            <i class="icon-chevron-right"></i>
                                        </div>
                                        <div class="product-pagination"></div>
                                        <div class="product-button-next">
                                            <i class="icon-chevron-left"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

							<?php
						}
						?>


                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="row aside">

                        <div
                                class="col-lg-12 aside__baner"

                                style="background-image: url(<?= get_field( 'xcontent', 'option' )['aside_banner']['aside_banner_image'] ?>);"
                        >
                            <span class="titleXgames">اشتراک آنلاین بازی</span>
                            <span class="title-bottom-baner">GEARS <span class="red">5</span></span>
                            <a class="button button-small button-red"
                               href="<?= get_field( 'xcontent', 'option' )['aside_banner']['aside_banner_link'] ?>">اطلاعات
                                بیشتر</a>
                        </div>

                        <div class="col-lg-12 aside__best-sellers">
                            <span class="aside-title">محصولات پرفروش</span>
							<?php
							if ( is_front_page() ) {
								$paged = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1;
							} else {
								$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
							}
							$best_attr  = array(
								'post_type'      => 'product',
								'product_cat'    => '',
								'posts_per_page' => 10,
								'paged'          => $paged,
								'orderby'        => 'meta_value_num',
								'order'          => 'DESC',
								'meta_key'       => 'total_sales',
							);
							$best_query = new WP_Query( $best_attr );
							$c          = 1;
							while ( $best_query->have_posts() ) : $best_query->the_post(); ?>


                                <div class="best-sellers__best-product">
                                    <span class="best-product__number"><?= $c; ?></span>
                                    <img
                                            class="product-image"
                                            src="<?php the_post_thumbnail_url(); ?>"
                                            alt=""
                                    />
                                    <div>
                                        <span class="best-product__product-title"><?= get_the_title() ?></span>
                                        <span class="best-product__product-name">(فیفا 20)</span>
                                        <span class="best-product__product-tag">2استیم، سی دی کی</span>
                                    </div>
                                </div>

								<?php $c ++; endwhile; ?>
                        </div>

						<?php

						$terms = get_terms( [
							'taxonomy'   => 'manufacture',
							'hide_empty' => false,
						] );
						?>

                        <div class="col-lg-12 aside__popular-brands">
                            <span class="aside-title">برندهای محبوب</span>
                            <div class="popular-brands__brands-container">
								<?php foreach ( $terms as $term ) { ?>
                                    <img src="<?= get_field( 'manufacture_image', $term ); ?>" alt=""/>
								<?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product end -->

        <!-- blog -->


        <section>
            <div class="row">
                <div class="col-lg-6 blog position-relative">
                    <div class="headline">
                        <div class="headline-title">
                            <i class="icon-blog headline-title__icon"></i>
                            <span class="headline-title__text">آخرین مطالب وبلاگ</span>
                        </div>
                        <a class="see-more" href="">مشاهده همه <i class="icon-chevron-left"></i></a>
                    </div>
                    <div class="slider-blog overflow-hidden">
                        <div class="swiper-wrapper">
                            <?php $post_attr = array(
	                            'post_type'      => 'post',
	                            'posts_per_page' => 15,
                            );
                            $post_query = new WP_Query( $post_attr );
                            $p          = 0;
                            while ( $post_query->have_posts() ) : $post_query->the_post(); ?>

                            <?= $p % 3 == 0 ? '<div class="posts-container swiper-slide">' : '' ; ?>

                                <div class="panel-post">
                                    <div
                                            class="post-image"
                                            style="background-image: url(<?php the_post_thumbnail_url(); ?>);"
                                    ></div>
                                    <div class="panel-body">
                                        <span class="post-title"><?= get_the_title() ?></span>
                                        <span class="post-summary"><?= get_the_excerpt() ?></span
                                        >
                                        <div class="detail-container">
                                            <div class="platform-container">
                                                <div class="platform platform-small">
                                                    <i class="icon-playstation"></i>
                                                </div>
                                                <div class="platform platform-small">
                                                    <i class="icon-windows"></i>
                                                </div>
                                            </div>
                                            <a href=" <?php the_permalink() ?>" class="button button-small button-blue">ادامه مطلب</a>
                                        </div>
                                    </div>
                                </div>
                            <?php $p++; ?>
                            <?= $p %3 == 0 || $p == wp_count_posts()->publish ? '</div>' : ''; ?>

                            <?php  endwhile; ?>

                        </div>

                        <div class="pagination-container">
                            <div class="blog-button-prev">
                                <i class="icon-chevron-right"></i>
                            </div>
                            <div class="blog-pagination"></div>
                            <div class="blog-button-next">
                                <i class="icon-chevron-left"></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 comment">
                    <div class="headline">
                        <div class="headline-title">
                            <i class="icon-comment headline-title__icon"></i>
                            <span class="headline-title__text">آخرین بازخورد های کاربران</span>
                        </div>
                    </div>
                    <div class="comments-container">

	                    <?php  $commnet_attr = array(
		                    'orderby'        => 'date',
		                    'order'          => 'DESC',

	                    );
	                    $comment_query = get_comments($commnet_attr);
	                    if ( $comment_query ) {
		                    // var_dump($comment_query);
		                    foreach ( $comment_query as $comment ) {

		                            ?>

                        <div class="panel-comment" user-level="customer">
                            <div class="user-avatar">
                                <i class="icon-profile-fill"></i>
                            </div>
                            <div class="panel-body">
                                <div class="d-flex justify-content-between">
                                    <span class="comment-username"><?=$comment->comment_author?></span>
                                    <div class="comment-time gray">
                                        <span>22:30</span>
                                        <span class="mr-1"><?=$comment->comment_date?></span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span class="comment-user-level">کاربر مشتری</span>
                                    <div class="rate">
                                        <span class="star checked"></span>
                                        <span class="star checked"></span>
                                        <span class="star checked"></span>
                                        <span class="star checked"></span>
                                        <span class="star"></span>
                                    </div>
                                </div>
                                <span class="post-summary"><?=$comment->comment_content?></span>
                            </div>
                        </div>

                       <?php }
	                    }?>

                    </div>
                </div>
            </div>
        </section>


        <!-- blog -->


    </section>
<?php
get_footer();
