<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">
				<?php do_action( 'twentyfourteen_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyfourteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyfourteen' ), 'WordPress' ); ?></a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->
<script src="/wp-includes/jquery-1.7.1.min.js"></script>
  <script src="/wp-includes/jquery.isotope.min.js"></script>
  <script>
var $container = $('#container');
// init
$container.isotope({
  // options
  itemSelector: '.item',
  layoutMode: 'fitRows'
});
  </script>
	<?php wp_footer(); ?>
    
    <style>
    /* Start: Recommended Isotope styles */

/**** Isotope Filtering ****/

.isotope-item {
  z-index: 2;
}

.isotope-hidden.isotope-item {
  pointer-events: none;
  z-index: 1;
}

/**** Isotope CSS3 transitions ****/

.isotope,
.isotope .isotope-item {
  -webkit-transition-duration: 0.8s;
     -moz-transition-duration: 0.8s;
      -ms-transition-duration: 0.8s;
       -o-transition-duration: 0.8s;
          transition-duration: 0.8s;
}

.isotope {
  -webkit-transition-property: height, width;
     -moz-transition-property: height, width;
      -ms-transition-property: height, width;
       -o-transition-property: height, width;
          transition-property: height, width;
}

.isotope .isotope-item {
  -webkit-transition-property: -webkit-transform, opacity;
     -moz-transition-property:    -moz-transform, opacity;
      -ms-transition-property:     -ms-transform, opacity;
       -o-transition-property:      -o-transform, opacity;
          transition-property:         transform, opacity;
}

/**** disabling Isotope CSS3 transitions ****/

.isotope.no-transition,
.isotope.no-transition .isotope-item,
.isotope .isotope-item.no-transition {
  -webkit-transition-duration: 0s;
     -moz-transition-duration: 0s;
      -ms-transition-duration: 0s;
       -o-transition-duration: 0s;
          transition-duration: 0s;
}

/* End: Recommended Isotope styles */



/* disable CSS transitions for containers with infinite scrolling*/
.isotope.infinite-scrolling {
  -webkit-transition: none;
     -moz-transition: none;
      -ms-transition: none;
       -o-transition: none;
          transition: none;
}



/**** Isotope styles ****/

/* required for containers to inherit vertical size from window */
html,
body {
  height: 100%;
}

#container {

  padding: 5px;
  margin-bottom: 20px;
}

.item {
  width: 300px;
  height: 300px;
  margin: 5px;
  float: left;
  overflow: hidden;
  position: relative;
  background: #888;
  color: #222;
  -webkit-border-top-right-radius: 1.2em;
      -moz-border-radius-topright: 1.2em;
          border-top-right-radius: 1.2em;
}
    </style>
</body>
</html>