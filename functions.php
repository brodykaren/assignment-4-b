<?php

/*====================================
Add stylesheets and javascripts files
====================================*/

function custom_theme_scripts() {

// boostrap CSS
wp_enqueue_style('bootstrap', get_stylesheet_directory_uri () . '/css/boostrap.min.css');

// Main CSS\
wp_enqueue_style ('main-styles' get_stylesheet_uri());

wp_enqueue_script ('jquery');

//Javascript Files
wp_enqueue_script('bootstrap-js',get_stylesheet_directory_uri() . '/js/bootstrap.min.js');
wp_enqueue_script('custom-js', get_stylesheet_directory_uri(). '/js/scripts.js');
}

add_action('wp_enqueue_scripts','custom_theme_scripts');

/*===================================
custom header image
===================================*/


$custom_image_header = array(
      'width' => 520;
      'height'=> 150;
      'uploads' => true


);

add_theme_support('custom-header', $custom_image_header);

add_theme_support('post-thumbnails');

?>






















add_theme_support('custom-header', $custom_image_header);



add_theme_support('post-thumbnails');

function post_data () {
  $archieve_year = get_the_time ('Y');
  $archieve_month =get_the_time('m');
  $archieve_day =get_the_time ('d');
?>


   <p>written by:  <a href= "<?php echo get_author_posts_url(get_the_author_meta ('ID')); ?>"> <?php
   echo get_the_author(); ?></a>| Published on: < a href= " <?php echo get_the_day_link ($archieve_year,$archieve_month,$archieve_day); ?> "<?php echo "$archieve_month/$archieve_day/$archieve_year"; ?> </a></p>
   

<?php

}

?>