<?php
get_header();

foreach ( $posts as $post ) : setup_postdata( $post ); ?>        
<article>            
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<div><?php the_content(); ?></div>
</article>   
 <?php endforeach;     wp_reset_postdata();?>
?>

<?php
get_footer();
?>