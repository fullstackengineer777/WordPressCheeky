<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
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
            <h1><?php the_title(); ?></h1>           

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
		<?php
		// Start the loop.
		while ( have_posts() ) :
			the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>
		</div>
</div>


</div>
</div>
</div>
<?php get_footer(); ?>
