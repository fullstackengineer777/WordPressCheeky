<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

 <div class="menu-sidebar">
               <?php
wp_nav_menu( array(
  'theme_location' => 'primary',
  'menu_class'     => '',
'container' => '' //Remove the Menu Container DIV
) );
?>
            </div>

       

<div class="testimonial-sidebar-scroll">
             <?php
$args = array( 'post_type' => 'testimonial', 'posts_per_page' => -1 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();?>             
      <!-- Your HTML CODE -->      
      <div class="testimonial-sidebar">
                    <div class="testimonial"><p><?php the_content(); ?></p></div>
                    <div class="testimonial-info clearfix">                       
                     <div class="name"><?php the_title(); ?></div>  
                    </div>
                </div>
      <!-- banner text end -->
<?php endwhile;   ?>
<?php wp_reset_query(); ?>  
</div>
