<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package oewebsite
 */
?>

	</section><!-- #content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="row">
            <a class="footer-contact" href="#">openengagement@gmail.com</a>
            <p class="footer-newsletter">Newsletter <input type="text"></input></p>
            <ul class="social-media">
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" /></li>
            </ul>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
