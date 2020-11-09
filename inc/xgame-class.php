<?php
class XGame{
	private static $instance = null;
	public function __construct() {
		$this->single_product_hook();
		$this->archive_product_hook();

		add_action( 'after_setup_theme', array($this , 'xgame_theme_init'), 0 );
	}

	public function xgame_theme_init() {
		register_nav_menus( array(
			'primary_menu' => 'منو اصلی'
		) );
	}

	public function archive_product_hook() {
		add_action('woocommerce_before_shop_loop' , array($this , 'render_product_category') , 5);

		add_action('wp_ajax_xgame_archive_category', array($this , 'xgame_render_subcategories'), 1);
		add_action('wp_ajax_nopriv_xgame_archive_category', array($this , 'xgame_render_subcategories'), 1);

		add_action('wp_ajax_xgame_archive_render_product_by_cat', array($this , 'xgame_render_product'), 1);
		add_action('wp_ajax_nopriv_xgame_archive_render_product_by_cat', array($this , 'xgame_render_product'), 1);
	}

	public function xgame_render_subcategories() {

		$this->woocommerce_subcats_from_parentcat_by_ID($_GET['cid']);
		wp_die();
	}

	public function xgame_render_product() {


		$args = array(
			'post_type'             => 'product',
			'post_status'           => 'publish',
			'ignore_sticky_posts'   => 1,
			'posts_per_page'        => '12',
			'tax_query'             => array(
				array(
					'taxonomy'      => 'product_cat',
					'field' => 'term_id', //This is optional, as it defaults to 'term_id'
					'terms'         => $_GET['cid'],
					'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
				),
				array(
					'taxonomy'      => 'product_visibility',
					'field'         => 'slug',
					'terms'         => 'exclude-from-catalog', // Possibly 'exclude-from-search' too
					'operator'      => 'NOT IN'
				)
			)
		);
		$products = new WP_Query($args);

		while ( $products->have_posts() ) {
			$products->the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}

		wp_die();
	}

	public function woocommerce_subcats_from_parentcat_by_ID($parent_cat_ID) {

		$args = array(
			'hierarchical' => 1,
			'show_option_none' => '',
			'hide_empty' => 0,
			'parent' => $parent_cat_ID,
			'taxonomy' => 'product_cat'
		);

		$subcats = get_categories($args);

		foreach ($subcats as $sc) {
			$link = get_term_link( $sc->slug, $sc->taxonomy );
			echo '<li data-scid="'.$sc->term_id.'" class="tab"><a href="'. $link .'">'.$sc->name.'</a></li>';
		}
	}

	public function render_product_category() {
		wc_get_template('archive-categories.php');
	}

	public function single_product_hook() {

		remove_action('woocommerce_before_main_content' , 'woocommerce_breadcrumb' , 20);

		add_action('wp_ajax_xgame_aparat_video', array($this , 'xgame_aparat_video_process'), 1);
		add_action('wp_ajax_nopriv_xgame_aparat_video', array($this , 'xgame_aparat_video_process'), 1);

		remove_action('woocommerce_single_product_summary' , 'woocommerce_template_single_title' , 5);
		remove_action('woocommerce_single_product_summary' , 'woocommerce_template_single_excerpt' , 20);

		remove_action('woocommerce_sidebar' , 'woocommerce_get_sidebar' , 10);
	}

	public function xgame_aparat_video_process()
	{
		$embed_code = get_field( 'aparat_video' , $_GET['pid']);
		echo '<div class="video-modal-content">'.$embed_code.'</div>';
		wp_die();
	}

	public static function getInstance() {
		if (self::$instance == null)  {
			self::$instance = new XGame();
		}
		return self::$instance;
	}
}
XGame::getInstance();
