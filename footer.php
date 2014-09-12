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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46797315-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
