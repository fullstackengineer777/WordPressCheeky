<?php /* Template Name: Home Page */ get_header(); ?>
<!-- banner-section Start -->
<div class="banner-section">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
          <div class="banner-text text-center">
            <h1><?php the_field('banner_title'); ?></h1>
            <h3><?php the_field('banner_sub_title'); ?></h3>
			  <div class="mobile-tree">
				  <div class="mobile-tree-left">
				  <h4>
					  Easy <br> Secure <br> Transparent
					  </h4>
				  </div>
				  <div class="mobile-tree-right">
				 <?php if( get_field('mobile_logo') ): ?>
    <img src="<?php the_field('mobile_logo'); ?>" />
<?php endif; ?>
				  </div>
				  <div class="clear"></div>
			  </div>
          </div>
        </div>                
    </div>
  </div>
  <div class="large-logo"><?php if( get_field('logo') ): ?>
    <img src="<?php the_field('logo'); ?>" />
<?php endif; ?></div>
</div>
<!-- banner-section End -->

<main>
  <!-- project-section Start -->
<div class="project-section">
  <div class="container">
    <div class="row">        

        	<?php
$args = array( 'post_type' => 'partner', 'post__not_in' => array( 856 ), 'posts_per_page' => 2, 'orderby' => 'rand' );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();?> 
							 
      <!-- Your HTML CODE --> 		
		<div class="col-md-6">
          <div class="project-box">
			  <div class="project-mobile-title"><h2><?php the_title(); ?></h2></div> 
            <div class="project-img">
				<a href="<?php the_permalink(); ?>"><img alt="" src="<?php the_post_thumbnail_url(); ?>"></a>
            </div>
            <div class="project-text">
              
              <h2><?php the_title(); ?></h2>
				<p><?php echo the_field('short_description',$post->ID); ?></p>            
              <a href="<?php the_permalink(); ?>" class="btn-outline btn-small-line">Details</a>
              <a href="javascript:showDonatePopup('<?php echo get_field('charityid') ?>', '<?php the_title(); ?>');" class="btn-green-gradient btn-small">Donate</a>
             
            </div>
            <div class="clear"></div>
          </div>
        </div> 
      <!-- banner text end -->
<?php endwhile;   ?>
	<?php wp_reset_query(); ?>

         <div class="col-md-12">
           <div class="text-center padding-top-30"><a href="<?php the_field('project_button_url'); ?>" class="btn-green btn-large"><?php the_field('project_button'); ?><i class="fa fa-chevron-right"></i></a></div>
         </div>             
    </div>
  </div>
</div>
<!-- project-section End -->
 <!-- why-choose-section Start -->
<div class="why-choose-section">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
          <div class="why-choose-header text-center">
            <h2><?php the_field('why_choose_title'); ?></h2>
          </div>
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
</main>
<?php get_footer(); ?>