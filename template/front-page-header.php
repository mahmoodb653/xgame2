<header style="display: flex;" class="navbar navbar-expand-xl navbar-dark">
    <div class="search-container">
        <i class="icon-close"></i>
		<?php echo get_product_search_form(); ?>
    </div>
    <div class="col-lg-2 col-sm-2 col-6 header__logo-Container">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="https://xgamesstore.net/wp-content/uploads/2020/09/Logo.Default.6-300x93.png"
                 alt="<?php bloginfo( 'name' ); ?>" style="width: 225px;"/>
        </a>
    </div>
    <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
    >
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse row" id="navbarSupportedContent">
		<?php
		wp_nav_menu( $args = array(
			'container'       => "nav",
			// (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
			'container_class' => "col-lg-9 header__nav-Container",
			'theme_location'  => "primary_menu",
			// (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
		) );

		global $woocommerce;
		?>
        <div class="col-lg-3 header__options">
            <div id="search" class="options__iconInner"><i class="icon-search"></i></div>
            <a href="<?php echo get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ); ?>"
            >
                <div class="options__iconInner"><i class="icon-profile"></i></div
                >
            </a>
            <div class="header-cart-icon"
                 href="<?php echo get_permalink( get_option( 'woocommerce_cart_page_id' ) ); ?>">
                <div class="options__iconInner"><i class="icon-bag"></i><span
                            class="minicart-number"><?= $woocommerce->cart->cart_contents_count ?></span></div>
                <div class="header-minicart">
					<?php woocommerce_mini_cart(); ?>
                </div>
            </div>
        </div>

    </div>
</header>
