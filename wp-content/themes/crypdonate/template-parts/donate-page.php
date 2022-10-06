<?php /* Template Name: Donate Page */ get_header(); ?>
<!-- banner-section Start -->
<div class="inner-banner-section">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
          <div class="banner-text text-center">
            <h1>Preview Test Version</h1>
          <p style="font-size:18px;">Follow us on Twitter for latest updates and when donation-function goes live.</p>
    <a href="javascript:showDonatePopup('8fAllOne56a5', 'All at Once');" class="btn-green-gradient btn-small">Donate at all <i class="fa fa-chevron-right"></i></a>
          </div>
        </div>                
    </div>
  </div> 
</div>
<!-- banner-section End -->
<div class="inner-data-wrapper-notop">
  <div class="container">
	  <div class="row"> 
		  <div class="donate-field">
			  <div class="row">
				   <div class="col-xs-3">
		   <div class="search-box">        
		
		<form role="search" action="" method="get" id="searchform">
                   <div class="search-left"><input type="text" name="search" placeholder="Search..." value="<?php if(isset($_GET['search'])){ echo $_GET['search'];} ?>"/>
    <!-- // hidden 'names' value --> </div>
			<div class="search-right">
              <button type="submit" class="btn-search"><i class="fa fa-search" aria-hidden="true"></i></button>
          </div>
                      <div class="clear"></div>
                    </form>
       
    </div>
		  </div>
		  
		  <div class="col-xs-3">
		  <div class="dropdown-box">
    <select id="sel1">
        <option val=cat>All Categories</option>
        <option value='Humanity'>Humanity</option>
        <option value='Nature'>Nature</option>
        <option value='Animals'>Animals</option>
      </select>
  </div>
		  </div>
				  <div class="col-xs-6"></div>
				  
			  </div>
		  </div>
	  </div>
	  
	 	  
    <div class="row">

		<?php
		if(isset($_GET['search'])){
			$args = array( 'post_type' => 'partner','s'=>$_GET['search'], 'posts_per_page' => -1, 'orderby' => 'rand' );
			
		}
		   else{
			   
		$args = array( 'post_type' => 'partner', 'posts_per_page' => -1, 'orderby' => 'rand' );	   
		   }

$loop = new WP_Query( $args );

if ($loop->have_posts()) {
  $top = array( $loop->posts[0]->ID, $loop->posts[1]->ID, $loop->posts[2]->ID, $loop->posts[3]->ID );
	//echo "check shuffle: ".implode(",", $top);
  $iShuffle = 0;
  while( $iShuffle < 5 && in_array( '856', $top ) ) {
    $iShuffle++;
    //echo "reshuffle..";
    shuffle($loop->posts);
    if ($iShuffle <3)
      $top = array( $loop->posts[0]->ID, $loop->posts[1]->ID, $loop->posts[2]->ID, $loop->posts[3]->ID );
    else
      $top = array( $loop->posts[0]->ID, $loop->posts[1]->ID );
  }
}

while ( $loop->have_posts() ) : $loop->the_post();?> 
							 
      <!-- Your HTML CODE --> 		
		<div class="col-md-6 <?php echo the_field('category',$post->ID); ?> to-hide">
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
</div>
</div>
</div>
<script>
$(document).ready(function(){
  $("#sel1").change(function(){
	  if($("#sel1").val() == 'All Categories'){
		  $('.to-hide').show(); 
	  }
	  else{
	  $('.to-hide').hide();
	  data= $("#sel1").val()
   $('.'+data).show();
	  }
  });
});
</script>

<?php get_footer(); ?>
