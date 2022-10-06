<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<div class="col-md-4">
          <div class="blog-box">  
          <div class="blog-img">           
            <div class="entry-item">
                <div class="entry-thumb">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                </div>
            </div>
            </div>
            <div class="blog-body"> 
              <a href="<?php the_permalink(); ?>">           
              <h3><?php the_title(); ?></h3>
              <span class="date"><?php echo get_the_date(); ?></span>
              <p><?php the_excerpt(); ?></p>
            </a>
            </div>
          </div>
        </div>

<!-- #post-<?php the_ID(); ?> -->
