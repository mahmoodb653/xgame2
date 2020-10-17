<?php
class XGame{
	private static $instance = null;
	public function __construct() {
		$this->single_product_hook();
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
