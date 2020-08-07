<?php if(have_posts()): while(have_posts()) : the_post();?>



<div class="card mb-4">
<div class="card-body d-flex justify-content-center align-items-center">	
	<?php
// Must be inside a loop.
 
if ( has_post_thumbnail('small') ) {
    
?> <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title();?>" class
="img-fluid md-3 img-thumbnail">
 <?php   
}
else {
    echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) 
        . '/images/thumbnail-default.jpg" />';
}

?>
<div class="blog-content">
<h3><?php the_title();?></h3>
	<?php the_excerpt();?>
	<a class="btn btn-success" href="<?php the_permalink();?>">Read more</a>
</div>
</div>
	</div> 



<?php endwhile; else:endif;?> 