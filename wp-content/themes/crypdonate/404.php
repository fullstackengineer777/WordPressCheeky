<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<!-- banner-section Start -->
<div class="inner-banner-section">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
          <div class="banner-text text-center">
            <h1>404</h1>         

          </div>
        </div>                
    </div>
  </div> 
</div>
<!-- banner-section End -->


<div class="inner-data-wrapper">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
        	<div class="inner-data">
		   <section class="error-404 not-found text-center">
					<h1>404 </h1>	
					<h3 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentysixteen' ); ?></h3>	
			</section><!-- .error-404 -->
		</div>
</div>
</div>
</div>
</div>
<?php get_footer(); ?>
