<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Allison
 */

?>


	<footer id="colophon" class="site-footer">
		<div class="grid-container full">
			<div class="grid-x">
				<div class="cell large-12 text-center">
					<h3>© allison gauduin | webeefans</h3>
				</div>
				<div class="grid-container">
					<div class="grid-x">
						<div class="cell large-12 align-center">
							<nav id="social_menu_footer">
								<?php
			          echo '<ul class="menu">';
			            if ( of_get_option('behance_link') ) {
			              echo '<li><a href="http://'.of_get_option('behance_link').'"><i class="fab fa-behance"></i></a></li>';
			            }
			            if ( of_get_option('twitter_link') ) {
			              echo '<li><a href="http://'.of_get_option('twitter_link').'"><i class="fab fa-twitter"></i></a></li>';
			            }
			            if ( of_get_option('googleplus_link') ) {
			              echo '<li><a href="http://'.of_get_option('googleplus_link').'"><i class="fab fa-google-plus-g"></i></a></li>';
			            }
			          echo '</ul>';
			          ?>
			        </nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>
</html>
