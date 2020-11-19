<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    	<div class="project">
        	<h2 class="project__title">
                <a href="<?php the_permalink(); ?>">
                	<?php the_title(); ?>
                </a>
            </h2>
         	<?php the_content(); ?>
    	</div>
    <?php endwhile; endif; ?>