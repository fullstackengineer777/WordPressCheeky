
<?php /* Template Name: About Page */ get_header(); ?>
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
<!-- why-choose-section Start -->
<div class="why-choose-section">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
          <div style="height: 15px;">&nbsp;</div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
          <div class="why-choose-box">
            <div class="why-choose-img">
              <?php if( get_field('why_choose_box_one_icon') ): ?>
					<img src="<?php the_field('why_choose_box_one_icon'); ?>" />
			 <?php endif; ?>
            </div>
            <div class="why-choose-text">
              <h3><?php the_field('why_choose_box_one_title'); ?></h3>
              <p><?php the_field('why_choose_box_one_text'); ?></p>              
            </div>
            <div class="clear"></div>
          </div>
        </div> 

        <div class="col-md-6">
          <div class="why-choose-box">
            <div class="why-choose-img">
              <?php if( get_field('why_choose_box_two_icon') ): ?>
					<img src="<?php the_field('why_choose_box_two_icon'); ?>" />
			 <?php endif; ?>
            </div>
            <div class="why-choose-text">
              <h3><?php the_field('why_choose_box_two_title'); ?></h3>
              <p><?php the_field('why_choose_box_two_text'); ?></p>              
            </div>
            <div class="clear"></div>
          </div>
        </div> 

        <div class="col-md-6">
          <div class="why-choose-box">
            <div class="why-choose-img">
              <?php if( get_field('why_choose_box_three_icon') ): ?>
					<img src="<?php the_field('why_choose_box_three_icon'); ?>" />
			 <?php endif; ?>
            </div>
            <div class="why-choose-text">
              <h3><?php the_field('why_choose_box_three_title'); ?></h3>
              <p><?php the_field('why_choose_box_three_text'); ?></p>              
            </div>
            <div class="clear"></div>
          </div>
        </div> 

        <div class="col-md-6">
          <div class="why-choose-box">
            <div class="why-choose-img">
              <?php if( get_field('why_choose_box_four_icon') ): ?>
					<img src="<?php the_field('why_choose_box_four_icon'); ?>" />
			 <?php endif; ?>
            </div>
            <div class="why-choose-text">
              <h3><?php the_field('why_choose_box_four_title'); ?></h3>
              <p><?php the_field('why_choose_box_four_text'); ?></p>              
            </div>
            <div class="clear"></div>
          </div>
        </div>   
    </div>
  </div>
</div>
<!-- why-choose-section End -->
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

