<?php
/**
 * The template for displaying all single charity partner
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
          <?php
		// Start the loop.
		while ( have_posts() ) :
			the_post();

			// Include the single post content template.
			get_template_part( 'template-parts/content', 'single' );

					

			// End of the loop.
		endwhile;
		?>  
			
		
        </div>
		
			
      </div>
     
    </div>
  </div>
<div class="text-center padding-bottom-30">
	<a href="javascript:showDonatePopup('<?php echo get_field('charityid') ?>', '<?php the_title(); ?>');" class="btn-green"><strong>Donate to <?php the_title(); ?></strong></a>
</div>
<!-- project-section Start -->
<div class="project-section">
  <div class="container">
    <div class="row">        
<?php $id_post = get_the_id(); ?>
        	<?php
$args = array( 'post_type' => 'partner', 'post__not_in' => array( $id_post, 856 ), 'posts_per_page' => 3, 'orderby' => 'rand' );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();?> 
							 
      <!-- Your HTML CODE --> 		
		<div class="col-md-4">
          <div class="related-project-box">			 
            <div class="related-project-img">
				<a href="<?php the_permalink(); ?>"><img alt="" src="<?php the_post_thumbnail_url(); ?>">
				<h2><?php the_title(); ?></h2>
					</a>
            </div>
          </div>
        </div> 
      <!-- banner text end -->
<?php endwhile;   ?>
	<?php wp_reset_query(); ?>
                  
    </div>
  </div>
</div>
<!-- project-section End -->
<div class="text-center padding-bottom-30"><a href="/donate/" class="btn-green"><strong>Back to all Charities</strong></a></div>
<?php get_footer(); ?>
