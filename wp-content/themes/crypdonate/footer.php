<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<footer>
  <!-- footer-section Start -->
<div class="footer-section">
  <div class="container">
    <?php if( !is_singular('partner') ): ?>
      <div class="row">
          <div class="col-md-10 col-md-push-1 text-center">
            <div class="footer-form">
            <a href="/contact-us" class="btn-green btn-large">Contact Us <i class="fa fa-chevron-right"></i></a>      
            </div>
          </div>
      </div>
    <?php else : ?>
      <br/><br/><br/>
    <?php endif; ?>
    <div class="row">
        <div class="col-md-12">
          <div class="footer-bottom padding-60 text-center">
            <div class="footer-menu">
              <?php
wp_nav_menu( array(
  'theme_location' => 'secondary',
  'menu_id'     => '',  
	'menu_class'     => 'menu',
'container' => '' //Remove the Menu Container DIV

) );
?>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="footer-btn-box">
                  <h3>Support the CrypDonate Association</h3>
                  <a  href="/partner/crypdonate-association" class="btn-white">Details</a>
                </div>
              </div>  
              <div class="col-md-4">
                <div class="footer-btn-box">
                  <h3>Share</h3>
                  <div class="footer-social">
                    <ul>
<!--                       <li><a href="<?php echo get_theme_mod( 'footer-facebook-url-setting' ) ?>" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
              <li><a href="<?php echo get_theme_mod( 'footer-twitter-url-setting' ) ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>  -->
						<?php global $wp;
$link = add_query_arg( $wp->query_string, '', home_url( $wp->request ) );
 ?>
						      <li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?=$link ?>" class="fb-xfbml-parse-ignore"><i class="fa fa-facebook-f"></i></a></li>
              <li><a target="_blank" class="twitter-share-button"
  href="https://twitter.com/intent/tweet?url=<?=$link ?>&text=<?= get_the_title(); ?>"
  data-size="large"><i class="fa fa-twitter"></i>
</a></li>   
              <li><a href="https://pinterest.com/pin/create/button/?url=<?=$link ?>&media=&description=<?= get_the_title(); ?>" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li> 
						<li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?=$link ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li> 
						<li><a href="mailto:?&subject=Donate Cryptocurrencies to Charity Organizations&body=<?=$link ?>+<?= get_the_title(); ?>" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
						<li class="mobile-show"><a href="javascript:" class="share-button"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li> 						
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="footer-btn-box">
                  <h3>Follow</h3>
                  <a href="<?php echo get_theme_mod( 'footer-twitter-url-setting' ) ?>" class="btn-white" target="_blank"><i class="fa fa-twitter"></i></a>
                </div>
              </div>  
          </div>
         
          </div>
        </div>    
    </div>
  </div>
</div>
<!-- footer-section End -->
</footer>

<a href="javascript:void();" class="back-to-top " style="display: inline;"><i class="fa fa-chevron-up"></i></a>
      <script>
         jQuery(document).ready(function() {
         var offset = 220;
         var duration = 500;
         jQuery(window).scroll(function() {
         if (jQuery(this).scrollTop() > offset) {
         jQuery('.back-to-top').fadeIn(duration);
         } else {
         jQuery('.back-to-top').fadeOut(duration);
         }
         });
         
         jQuery('.back-to-top').click(function(event) {
         event.preventDefault();
         jQuery('html, body').animate({scrollTop: 0}, duration);
         return false;
         })
         });
      </script>

	<script type="text/javascript">
	$('p').each(function() {
    var $this = $(this);
    if($this.html().replace(/\s|&nbsp;/g, '').length == 0)
        $this.remove();
});
</script>
<script type="text/javascript">
// Get all Accordion and Panel
let accHeading = document.querySelectorAll(".accordion");
let accPanel = document.querySelectorAll(".panel-text");

for (let i = 0; i < accHeading.length; i++) {
    // Execute whenever an accordion is clicked 
    accHeading[i].onclick = function() {
        if (this.nextElementSibling.style.maxHeight) {
           hidePanels();     // Hide All open Panels 
        } else {
           showPanel(this);  // Show the panel
        } 
    };
}

// Function to Show a Panel
function showPanel(elem) {
  hidePanels();
  elem.classList.add("active");
  elem.nextElementSibling.style.maxHeight = elem.nextElementSibling.scrollHeight + "px";
}

// Function to Hide all shown Panels
function hidePanels() {
  for (let i = 0; i < accPanel.length; i++) {
      accPanel[i].style.maxHeight = null;
      accHeading[i].classList.remove("active");
  }
}
</script>
<!-- sticky Start --> 
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
<script>
	function showDonatePopup(id, title)
	{
    console.log(title);
    console.log(encodeURIComponent(title));
		popupCenter({url: "https://securesand.crypdonate.charity/donate.php?id="+id+"&title="+encodeURIComponent(title), title: 'Donate ' + title, w: 900, h: 500}); 
	}
	const popupCenter = ({url, title, w, h}) => {
		// Fixes dual-screen position                            Most browsers       Firefox
		const dualScreenLeft = window.screenLeft !== undefined ? window.screenLeft : window.screenX;
		const dualScreenTop = window.screenTop !== undefined   ? window.screenTop  : window.screenY;

		const width = screen.width;
		const height = screen.height;

		const systemZoom = 1;//width / window.screen.availWidth;
		const left = (width - w) / 2 / systemZoom + dualScreenLeft
		const top = (height - h) / 2 / systemZoom + dualScreenTop
		const newWindow = window.open(url, title, 
		  `
		  scrollbars=yes,
		  width=${w / systemZoom}, 
		  height=${h / systemZoom}, 
		  top=${top}, 
		  left=${left}
		  `
		)

		if (window.focus) newWindow.focus();
	}
	  const shareButton = document.querySelector('.share-button');
const shareDialog = document.querySelector('.share-dialog');
const closeButton = document.querySelector('.close-button');

shareButton.addEventListener('click', event => {
  if (navigator.share) { 
   navigator.share({
      title: '<?= get_the_title(); ?>',
      url: '<?= $link; ?>'
    }).then(() => {
      console.log('Thanks for sharing!');
    })
    .catch(console.error);
    } else {
        shareDialog.classList.add('is-open');
    }
});

closeButton.addEventListener('click', event => {
  shareDialog.classList.remove('is-open');
});

</script>
<!-- sticky End -->
<?php wp_footer(); ?>
</body>
</html>
