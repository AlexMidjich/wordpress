<?php

/*
Template Name: Page No Title
*/

 get_header(); ?>

	<?php 


	if(have_posts() ): 

		while(have_posts() ): the_post(); ?>

			<h1>Contact information</h1>
			<div class="thumbnail-img"><?php the_post_thumbnail('thumbnail'); ?></div>
			<small>Posted on: <?php the_time('F j, Y'); ?></small>

			<p><?php the_content(); ?></p>
			
			
			<hr>	

		<?php endwhile;

	endif;

	?>




<?php get_footer(); ?>