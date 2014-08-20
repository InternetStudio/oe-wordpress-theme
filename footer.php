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
            <span class="footer-contact">
                <h3>Contact</h3>
                <a href="#">openengagement@gmail.com</a>
            </span>
            <p class="footer-newsletter"><?php mailchimpSF_signup_form(); ?></p>
            <ul class="social-media">
                <li><a href="https://www.facebook.com/openengagementconference"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" /></a></li>
                <li><a href="http://instagram.com/openengagement"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" /></a></li>
                <li><a href="https://twitter.com/OPENENGAGEMENT"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" /></a></li>
            </ul>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
