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

        <?php
            $page = get_page_by_path('footer');
            echo apply_filters('the_content', $page->post_content);
        ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
