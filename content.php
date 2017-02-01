<article id="post-<?php the_ID(); ?>" class="<?php post_class(); ?>">

	<header class="entry-header">
		<?php the_title( sprintf('<h1 class="entry-title><a href="%s">', esc_url( get_permalink() )	),'</a></h1>' ); ?> 
		
	</header>

	<div class="row">

		<?php if( has_post_thumbnail() ): ?>

			<div class="col-xs-12 col-sm-4">
				<div class="thumbnail"><?php the_post_thumbnail('full'); ?></div>
			</div>
 			<div class="col-xs-12 col-sm-8">
				<?php the_content(); ?>
			</div>

		<?php else: ?>
		
			<div class="col-xs-12">
				<?php the_content(); ?>
				<small>Inlagt: <?php the_time('F j, Y'); ?></small>
			</div>
		
		<?php endif; ?>	
	</div>
			
			
<hr>	