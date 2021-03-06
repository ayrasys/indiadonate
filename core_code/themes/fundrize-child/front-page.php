<?php
     /* Template Name: Home Page */
?>

<?php get_header(); 
?>

    <div id="content-wrap" class="wprt-container">
        <div id="site-content" class="site-content clearfix">
        	<div id="inner-content" class="inner-content-wrap">
			<?php while ( have_posts() ) : the_post(); ?>
				<article <?php post_class( 'page-content' ); ?>>
					<?php
					the_content();
					
					wp_link_pages( array(
						'before'      
                        => '<p class="page-links">' . esc_html__( 'Pages:', 'fundrize' ),
						'after'       => '</p>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
					) );
					?>
				</article>
			<?php endwhile; ?>
			</div>
        </div><!-- /#site-content -->

        <?php get_sidebar(); ?>
    </div><!-- /#content-wrap -->
<?php get_footer(); ?>
