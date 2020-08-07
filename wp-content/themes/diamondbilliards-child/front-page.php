<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package diamondbilliards
 */

get_header();
?>
<?php
echo do_shortcode('[smartslider3 slider="1"]');
?>
<section class=" container qoutes">
	
	<h1 class="big-titles text-center">To manufacture and sell the <span class="textdec">highest quality</span> pool tables and equipment, produced by employees whose <span class="textdec">pride and attention</span> to detail exceed the ongoing <span class="textdec">expectations</span> of our customer</h1>
</section>

<section class="container-fluid">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs- parallax_scroll padright">
			<img class="img-fluid" src="/wp-content/uploads/2020/07/Rosewood-Pro-Am.jpeg">
			<div class="sec-content">
			<h4 class="sectionheading">Carftsmanship and Philosophy</h4>
			<p>We encompasses each element of any single game of billiards, 
including the lighting, the balls, the cloth and even how comfortably 
the players sit between runs on the table.</p>
<a class="clinks" href="#">About Diamond Billiards</a>
</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 padleft">
			<img class="img-fluid" src="/wp-content/uploads/2020/07/Maple-Cherry-Professional.jpeg">
		</div>
	</div>



	</div>
	
</section>

<section class="rdsection">
	
<h1 class="big-titles text-center">What Professionals are saying " Don't change a thing, this table is as close to perfect as it can get"</h1>

</section>


<section class="contianer-fluid hasseen">


<div class="row">
	<div class="col-lg-12 text-center">
		<h4 class="sectionheading">As seen in</h4>
		
	</div>
	<div class="col-lg-3">
		<img src="/wp-content/uploads/2020/07/elle_decor.jpeg">
	</div>
	<div class="col-lg-3">
		<img src="/wp-content/uploads/2020/07/Evening_Standard_logo.png">
	</div>
	<div class="col-lg-3">
		<img src="/wp-content/uploads/2020/07/schoenerwohnen.png">
	</div>
	<div class="col-lg-3">
		<img src="/wp-content/uploads/2020/07/the-times-logo.png">
	</div>




</div>

</section>

<section class="container-fluid">
	<div class="row products">
	 	<div class="col-md-4">
	 		<h4 class="sectionheading mt-0">Take your pick</h4>
	 		<p>Cureted  styles inall Made Our Coutom</br>
	 		mage Diamond Billards</p>
	 		
	 	</div>
	 	<div class="col-md-2">
	 		<img src="/wp-content/uploads/2020/07/Maple-Cherry-Professional.jpeg">
       <h5 class="">PRO-AM</h5>
       <p>Buy Now</p>	 		
	 	</div>
	 	<div class="col-md-2">
	 		<img src="/wp-content/uploads/2020/07/Maple-Cherry-Professional.jpeg">
	 		 <h5 class="">PROFESSIONAL</h5>	
	 		 <p>Buy Now</p>	
	 	</div>
	 	<div class="col-md-2">
	 		<img src="/wp-content/uploads/2020/07/Maple-Cherry-Professional.jpeg">
	 		 <h5 class="">SMART TABLE</h5>	
	 		 <p>Buy Now</p>	
	 	</div>
	 	<div class="col-md-2">
	 		<img src="/wp-content/uploads/2020/07/Maple-Cherry-Professional.jpeg">
	 		 <h5 class="">SMART TABLE</h5>	
	 		 <p>Buy Now</p>	
	 	</div>
	 
	</div>
	

</section>


<section class="container-fluid">
	<div class="main-carousel">
  <div class="carousel-cell"><img class="img-fluid " src="wp-content/uploads/2020/07/Depositphotos_12289865_kleiner.jpg">
<h3>WHY YOU SHOULD BE GRATEFUL </br> TO YOUR OPPONENT</h3>
<a href="#">Read More</a>

  </div>
  <div class="carousel-cell"><img class="img-fluid"src="/wp-content/uploads/2020/07/meditation.jpg">
<h3>HOW TO SHOOT POOL: THREE IMPORTANT </br>TIPS FOR A BETTER TECHNIQUE</h3>
<a href="#">Read More</a>
  </div>
  <div class="carousel-cell" ><img class="img-fluid" src="/wp-content/uploads/2020/07/people-2588555_1920.jpg">
<h3>WHY YOU SHOULD BE GRATEFUL </br>TO YOUR OPPONENT</h3>
<a href="#">Read More</a>
  </div>
  
</div>
</section>

<section class="container pad200">
	<div class="row">
		<div class="col-lg-3 text-center">
			<i class="fa fa-bookmark wehave" style="font-size:36px"></i>
			<h4>Soft and gentle</h4>
		</div>
		<div class="col-lg-3 text-center">
			<i class="fa fa-bookmark wehave" style="font-size:36px"></i>
			<h4>Made from eucalyptus</h4>
		</div>
		<div class="col-lg-3 text-center">
			<i class="fa fa-bookmark wehave" style="font-size:36px"></i>
			<h4>Made from eucalyptus</h4>
		</div>
		<div class="col-lg-3 text-center">
			<i class="fa fa-bookmark wehave" style="font-size:36px"></i>
			<h4>Made in test</h4>
		</div>
	</div>
	
</section>


	<!-- <main id="primary" class="site-main">

		<?php
		//if ( have_posts() ) :

		//	if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php// single_post_title(); ?></h1>
				</header>
				<?php
		//	endif;

			/* Start the Loop */
			//while ( have_posts() ) :
			//	the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
			//	get_template_part( 'template-parts/content', get_post_type() );

			//endwhile;

			//the_posts_navigation();

		//else :

		//	get_template_part( 'template-parts/content', 'none' );

	//	endif;
		?>

	</main><!-- #main --> 



<?php

get_footer();
