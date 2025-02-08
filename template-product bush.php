<?php

/*
Template Name: product 2
*/

?>


<?php get_header(); ?>     
		<main id="content" role="main" class="site-main">
            <div id="js-page-cover" class="site-main__cover">
                <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs></defs><path id="js-wave" d=""></path></svg>
            </div>
            <div id="js-page-loader" class="site-main__loader">
                <div id="js-logo-cover" class="site-main__loader-cover">
                    
                </div>
                <img id="js-logo" class="site-main__loader-logo" src="<?php bloginfo('template_url'); ?>/LOGO/BushBottlesLogo  Gold-02.png" alt="Bush Buttle">
            </div>
			<div data-router-wrapper="">
					<div class="page-container" data-router-view="default">
		<div class="page post-type-page" id="post-357">
		<?php	
    if ( have_posts() ) :
            while ( have_posts() ) : the_post();
               the_content(); // Aquí es donde se muestra el contenido de la página.
            endwhile;
         endif;
         ?>
  
  
  
  

		</div>
	</div>
			</div><!-- /content-wrapper -->
					</main>

  
  
     
  
                    <?php get_footer(); ?>