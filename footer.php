<footer>
    <div class="container">
        <div class="row footer-row">
            <div class="col-lg-4 footer__about">
                <?php if ( is_active_sidebar( 'primary_widget_area' ) ) : ?>

	            <?php dynamic_sidebar( 'primary_widget_area' ); ?>

                <?php endif; ?>

            </div>
            <div class="col-lg-4 footer__tags">
	            <?php if ( is_active_sidebar( 'secondary_widget_area' ) ) : ?>

		            <?php dynamic_sidebar( 'secondary_widget_area' ); ?>

	            <?php endif; ?>

            </div>
            <div class="col-lg-4 footer__external-link">

	            <?php if ( is_active_sidebar( 'third_widget_area' ) ) : ?>

		            <?php dynamic_sidebar( 'third_widget_area' ); ?>

	            <?php endif; ?>

            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
