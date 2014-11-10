<?php
/*
 * Template Name: HomePage
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


get_header(); ?>
<h1>HELLO</h1>
	<div id="primary" class="site-content">
		<div id="content" role="main">
<div id="container">
	 <?php
// The Query
query_posts( $args );

// The Loop
while ( have_posts() ) : the_post();
echo'<div class="item" style="background:url(';
the_field('background_image');
echo' ">';
    echo '<li>';
    the_title();
    echo '</li>';
	echo'<li>';
	echo'<img src="';
	the_field('background_image');
	echo'" />';
	    echo '</li>';
	 echo '<li>';
    the_content();
    echo '</li>';
	echo '</div>';
endwhile;

// Reset Query
wp_reset_query();
?> 
			
            
</div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>