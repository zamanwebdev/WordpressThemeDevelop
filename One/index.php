<?php
	get_header();
		if ( have_posts() ) : 
			while ( have_posts() ) : the_post();    
?>
			<a href="the_permalink();"><h2><?php the_title(); ?></h2></a>
			<!-- <h2><?php //the_content(); ?></h2> -->
			<h2><?php the_post_thumbnail(); ?></h2>
			<h2><?php the_excerpt(); ?></h2>
			
<?php
			 endwhile; 
		endif; 
		
	get_footer();
?>