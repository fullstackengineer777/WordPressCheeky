<?php
/**
 * The template for displaying all single posts and attachments
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
        <div class="col-md-9">
          <?php
		// Start the loop.
		while ( have_posts() ) :
			the_post();

			// Include the single post content template.
			get_template_part( 'template-parts/content', 'single' );

					

			// End of the loop.
		endwhile;
		?>  
			
			 <div class="row">
            <?php $prev_post = get_previous_post();
			  $next_post = get_next_post(); ?>
            <div class="col-md-4">
				<div class="previous-btn padding-top-30">
					<a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>">
              <?php previous_post_link('<i class="fa fa-arrow-left"></i> Previous  %link','', false); ?>
              </a>
				</div>				
			  </div>
            <div class="col-md-4 text-center"></div>
            <div class="col-md-4">
				<div class="next-btn padding-top-30">
					<a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>">
              <?php next_post_link('Next  <i class="fa fa-arrow-right"></i> %link','', false); ?>
              </a>
				</div>
				</div>
          </div>
        </div>
		   <div class="col-md-3">
          <div class="sidebar">
         <?php get_sidebar(); ?>
</div>
</div>
			
      </div>
      <div class="row">
        <div class="col-md-12">
         
          <div class="entry-footer">
          
            <?php
			edit_post_link(
				sprintf(
					/* translators: %s: Post title. */
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
