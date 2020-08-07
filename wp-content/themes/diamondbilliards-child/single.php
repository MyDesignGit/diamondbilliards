<?php get_header();?>

<?php
// Must be inside a loop.
 
if ( has_post_thumbnail() ) {
    
?> <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title();?>" class
="img-fluid md-3 img-thumbnail">
 <?php   
}
else {
    echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) 
        . '/images/thumbnail-default.jpg" />';
}
?>
	<h3><?php the_title();?></h3>
	<?php get_template_part('includes/section','blogcontent');?>
<?php wp_link_pages(); ?>

</div>

</section>
+

<?php get_footer();?>