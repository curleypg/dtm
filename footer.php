<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'twentytwelve_credits' ); ?>
				<!--<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentytwelve' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentytwelve' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentytwelve' ), 'WordPress' ); ?></a>-->
			<div style="float:left;width:40%;margin-bottom:20px;">
				DTM Foundation is a 501(c)3 nonprofit organization.
				<br />
				Copyright © <?=date('Y')?> DTM Foundation
			</div>
			<?php
			if (is_front_page() || is_page('24')) :
			echo '<div style="float:right; text-align:right; width:40%; margin-bottom: 20px;">
				A special thanks to <a href="mailto:curleypg@gmail.com">Philip Curley</a> & Scott M. Peters Photography for their hard work in the creation of this website.
			</div>';
			endif;
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
