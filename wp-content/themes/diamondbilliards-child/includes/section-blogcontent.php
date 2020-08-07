<?php if(have_posts()): while(have_posts()) : the_post();?>


<p><?php echo get_the_date('d/m/Y'); ?></p>
	<?php the_content();?>
	<?php the_author();?>
 <?php// the_tags( $before, $sep, $after ); ?> 
 <?php// the_category( $before, $sep, $after ); ?> 


 <?php //comments_template(); ?>

<?php endwhile; else:endif;?> 