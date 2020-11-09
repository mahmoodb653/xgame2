<?php
/**
 * The template for displaying content in the single.php template
 */
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                   <?php if ( has_post_thumbnail() ) :
                    echo '<div class="post-thumbnail">' . get_the_post_thumbnail( get_the_ID(), 'large' ) . '</div>';
                    endif; ?>
                    <h1 class="entry-title"><?php the_title(); ?></h1>

					<?php
					if ( 'post' == get_post_type() ) :
						?>
                        <div class="entry-meta">
							<?php xgame_article_posted_on(); ?>
                        </div><!-- /.entry-meta -->
					<?php
					endif;
					?>
                </header><!-- /.entry-header -->

                <div class="entry-content">
					<?php


					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-link"><span>' . __( 'Pages:', 'xgame' ) . '</span>',
						'after'  => '</div>'
					) );
					?>
                </div><!-- /.entry-content -->

				<?php edit_post_link( __( 'Edit', 'xgame' ), '<span class="edit-link">', '</span>' ); ?>

                <footer class="entry-meta">

                    <!-- link page -->
					<?php wp_link_pages( array(
						'before' => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'zanbil' ) . '</span>',
						'after' => '</div>',
						'link_before' => '<span>',
						'link_after' => '</span>'
					) ); ?>
                    <div class="clearfix"></div>


        <!-- Tag -->
		<?php if ( get_the_tag_list() ) { ?>
            <div class="entry-tag single-tag pull-left">
				<?php echo get_the_tag_list( '<span class="custom-font title-tag">برچسب ها: </span>', ' , ', '' ); ?>
            </div>
		<?php } ?>

        </footer><!-- /.entry-meta -->

        </article><!-- /#post-<?php the_ID(); ?> -->
    </div>
    <div class="col-md-2"></div>
</div>
</div>
