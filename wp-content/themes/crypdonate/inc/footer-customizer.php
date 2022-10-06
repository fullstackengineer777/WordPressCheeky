<?php
// Logo Text Image
function footer_box_register( $wp_customize ) {

$wp_customize->add_section('footer-box-section', array(
"title" => 'Footer Section'
));

//email Img
//$wp_customize->add_setting('footer-email-img-setting'); // Add setting for logo uploader
//$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer-email-img-control', array(
//'label' => 'Email Image',
//'section' => 'footer-box-section',
//'settings' => 'footer-email-img-setting',
//'description' => 'This is a custom url input.',
//'type' => 'url'
//))
//);




//facebook URL
$wp_customize->add_setting('footer-facebook-url-setting', array(
'default' => 'www.facebook.com',
)); // Add setting for logo uploader

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer-facebook-url-control', array(
'label' => 'facebook',
'section' => 'footer-box-section',
'settings' => 'footer-facebook-url-setting',
//'description' => 'This is a custom url input.',
'type' => 'url'
))
);

//twitter URL
$wp_customize->add_setting('footer-twitter-url-setting', array(
'default' => 'www.twitter.com',
)); // Add setting for logo uploader

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer-twitter-url-control', array(
'label' => 'twitter URL',
'section' => 'footer-box-section',
'settings' => 'footer-twitter-url-setting',
//'description' => 'This is a custom url input.',
'type' => 'url'
))
);


//linkedin URL
$wp_customize->add_setting('footer-linkedin-url-setting', array(
'default' => 'www.linkedin.com',
)); // Add setting for logo uploader

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer-linkedin-url-control', array(
'label' => 'linkedin URL',
'section' => 'footer-box-section',
'settings' => 'footer-linkedin-url-setting',
//'description' => 'This is a custom url input.',
'type' => 'url'
))
);

//instagram URL
$wp_customize->add_setting('footer-instagram-url-setting', array(
'default' => 'www.instagram.com',
)); // Add setting for logo uploader

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer-instagram-url-control', array(
'label' => 'instagram URL',
'section' => 'footer-box-section',
'settings' => 'footer-instagram-url-setting',
//'description' => 'This is a custom url input.',
'type' => 'url'
))
);
	
//youtube URL
$wp_customize->add_setting('footer-youtube-url-setting', array(
'default' => 'www.youtube.com',
)); // Add setting for logo uploader

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer-youtube-url-control', array(
'label' => 'youtube URL',
'section' => 'footer-box-section',
'settings' => 'footer-youtube-url-setting',
//'description' => 'This is a custom url input.',
'type' => 'url'
))
);	




}
add_action( 'customize_register', 'footer_box_register' );
