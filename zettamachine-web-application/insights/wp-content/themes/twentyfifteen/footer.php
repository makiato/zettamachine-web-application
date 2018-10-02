<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->
  <script src="https://use.fontawesome.com/ee62852333.js"></script>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<p><a href="mailto:hello@zettamachine.com"><i aria-hidden="true" class="fa fa-envelope"></i> hello@zettamachine.com</a><br/>
		<i aria-hidden="true" class="fa fa-location-arrow"></i> Cremorne, Sydney, Australia <sub><i class="cheeky">(where you're beaten by kangaroos and stung by deadly spiders)</i></sub></p>
		<div class="site-info">
			<?php
				/**
				 * Fires before the Twenty Fifteen footer text for footer customization.
				 *
				 * @since Twenty Fifteen 1.0
				 */
				do_action( 'twentyfifteen_credits' );
			?>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyfifteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyfifteen' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
