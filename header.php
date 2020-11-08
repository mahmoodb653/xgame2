<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div class="background"
        style="background: url(./dist/images/products/background/background-mortal-kombat.png);"
></div>

<header style="display: flex;" class="navbar navbar-expand-xl navbar-dark">
    <div class="search-container">
        <i class="icon-close"></i>
        <?php echo get_product_search_form(); ?>
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
                <li><a href="<?=get_template_directory_uri()?>">صفحه اصلی</a></li>
                <li><a href="<?=get_template_directory_uri().'/shop'?> ">دسته بندی محصولات</a></li>
                <li><a href="#<?=get_template_directory_uri()?>">گیفت کارت چیست؟</a></li>
                <li><a href="<?=get_template_directory_uri()?>">وبلاگ</a></li>
                <li><a href="<?=get_template_directory_uri()?>">درباره ما</a></li>
                <li><a href="<?=get_template_directory_uri()?>">تماس با ما</a></li>

            </ul>
        </nav>
        <div class="col-lg-3 header__options">
            <div id="search" class="options__iconInner"><i class="icon-search"></i></div>
            <a href="<?=get_template_directory_uri().'/my-account'?>"
            ><div class="options__iconInner"><i class="icon-profile"></i></div
                ></a>
            <a href="<?=get_template_directory_uri().'/cart'?>"
            ><div class="options__iconInner"><i class="icon-bag"></i></div
                ></a>
        </div>
    </div>
</header>
