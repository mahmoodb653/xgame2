<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
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
					<header style="display: flex;" class="navbar navbar-expand-xl navbar-dark">
						<div class="search-container">
							<i class="icon-close"></i>
							<input type="text" class="serach-input" />
							<i class="icon-search"></i>
						</div>
						<div class="col-lg-2 col-sm-2 col-6 header__logo-Container">
							<a href="./index.html">
								<img src="./dist/images/logo.svg" alt="" />
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
							<nav class="col-lg-9 header__nav-Container">
								<ul>
									<li class="active-header-menu"><a href="./index.html">صفحه اصلی</a></li>
									<li><a href="./category.html ">دسته بندی محصولات</a></li>
									<li><a href="#whatisgiftcard">گیفت کارت چیست؟</a></li>
									<li><a href="#blog">وبلاگ</a></li>
									<li><a href="#about">درباره ما</a></li>
									<li><a href="#contact">تماس با ما</a></li>
								</ul>
							</nav>
							<div class="col-lg-3 header__options">
								<div id="search" class="options__iconInner"><i class="icon-search"></i></div>
								<a href="./login.html"
								><div class="options__iconInner"><i class="icon-profile"></i></div
									></a>
								<a href="./cart.html"
								><div class="options__iconInner"><i class="icon-bag"></i></div
									></a>
							</div>
						</div>
					</header>

					<div class="header-slider-container">
						<div class="swiper-wrapper">
							<!-- Slides -->
							<div
								class="swiper-slide header-slide"
								image="./dist/images/headerSlide/slide-one.png"
							>
								<div>
									<span class="titleXgames line line-red">لذت بازی با سی دی کی اورجینال</span>
									<h1>شیطان مقیم <span class="red">2</span></h1>
									<p>
										برای خیلی از طرفداران این Resident Evil 2 خبر ساخته شدن بازسازی مجموعه، چیزی
										شبیه به یک رویا بود؛ چرا که اگر فلش‌بکی به تاریخچه این را نقطه اوج Resident
										Evil 2 مجموعه بزنیم، بی هیچ اغراقی می‌توانیم یک 2 نسخه‌های کلاسیک سری معرفی
										کنیم؛ به دلیل آنکه رزیدنت ایول پیشرفت فوق‌العاده در مقایسه با نسخه اولی بود که
										خودش، یکی از بهترین و جریان‌سازترین بازی‌های سبک ترس و بقا محسوب می‌شد.
									</p>
									<div class="detail-container">
										<a href="#"><button class="button button-larg button-red">اطلاعات بیشتر</button></a>
										<span class="platform platform-larg">
                        <i class="icon-playstation"></i>
                      </span>
										<span class="platform platform-larg">
                        <i class="icon-windows"></i>
                      </span>
									</div>
								</div>
							</div>
							<div class="swiper-slide header-slide" image="./dist/images/headerSlide/pubg.jpg">
								<h1>Hello</h1>
							</div>
							<div class="swiper-slide header-slide" image="./dist/images/headerSlide/pubg.jpg">
								<h1>Hello</h1>
							</div>
							<div
								class="swiper-slide header-slide"
								image="./dist/images/baner/the-last-of-us.png"
							>
								<h1>Hello</h1>
							</div>
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


<?php
get_footer();
