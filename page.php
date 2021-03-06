<?php
/**
 * Template Name: Page (Default)
 * Description: Page template with Sidebar on the left side
 *
 */

	get_header();
?>

	<div class="row">

		<div class="main container">
			<?php the_post(); ?>

			<div id="post-<?php the_ID(); ?>" <?php post_class( 'content' ); ?>>
				<h1 class="entry-title"><?php the_title(); ?></h1>

				<?php
					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'xgame' ),
						'after'  => '</div>',
					) );
					edit_post_link( __( 'Edit', 'xgame' ), '<span class="edit-link">', '</span>' );
				?>
			</div><!-- /#post-<?php the_ID(); ?> -->

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		</div><!-- /.col -->

		<?php //get_sidebar(); ?>

	</div><!-- /.row -->

<?php get_footer(); ?>
