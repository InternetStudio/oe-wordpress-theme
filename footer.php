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
            <div class="one-third">
                <a href="#">openengagement@gmail.com</a>
            </div>
            <div class="one-third">
                <ul class="social-media">
                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" /></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" /></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" /></li>
            </div>
            <div class="one-third">
                <p>Newsletter <input type="text"></input></p>
                
            </div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
