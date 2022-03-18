<?php get_header(); ?>


<div style="margin:5rem 2rem;">
	<?php 
		if(have_posts()){
			while(have_posts()){
				the_post();
				?>
			<div>	
				<h1><?php the_title(); ?></h1>
				<p><?php the_content(); ?></p>
			</div>
				
	<?php 			
			}
		}

	?>
</div>
	


<?php get_footer(); ?>