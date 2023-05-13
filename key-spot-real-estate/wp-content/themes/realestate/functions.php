<?php 

//1. Override admin-bar style start
function override_admin_bar_css() { 

   if ( is_admin_bar_showing() ) { ?>


      <style type="text/css">
      	@media screen and (max-width: 600px) {
      		  #wpadminbar {
    			position: fixed;
      		}
      
}
      </style>

   <?php }

}

// on backend area
add_action( 'admin_head', 'override_admin_bar_css' );

// on frontend area
add_action( 'wp_head', 'override_admin_bar_css' );

//Override admin-bar style end 

//2. Register main menu
register_nav_menu('primary-menu', 'Primary Menu');

//3. Custom logo
add_theme_support('custom-logo');

//4. Feautured image
add_theme_support( 'post-thumbnails' );

//5. Add custom post types

//Блог
function blog_post_type() {

   //options for this custom post type 
   $args = array(
      'labels' => array(

                  'name' => 'Блог',
                  'singular_name' => 'Блог статия',

      ),
      'public' => true,
      'menu_icon' => 'dashicons-welcome-write-blog',
      'has_archive' => true,
      'supports' => array('title', 'editor', 'thumbnail','comments'),  //what the user can edit
   );
   register_post_type('blog', $args);
}

add_action('init','blog_post_type');

//Имоти
function properties_post_type() {

   //options for this custom post type 
   $args = array(
      'labels' => array(

                  'name' => 'Имоти',
                  'singular_name' => 'Имот',

      ),
      'public' => true,
      'menu_icon' => 'dashicons-admin-home',
      'has_archive' => true,
      'supports' => array('title', 'editor', 'thumbnail','comments'),  //what the user can edit
   );
   register_post_type('properties', $args);
}

add_action('init','properties_post_type');



//6.Add taxonomy for custom post type

//Категории за блога
function blog_post_type_taxonomy() {
   $args = array(
      
      'labels' => array(
         'name' => 'Категории за блогa',
      ),
      'public' => true,
      'hierarchical' => true, //acts as a category
   );

   register_taxonomy('categories', array('blog'), $args);
}

add_action('init', 'blog_post_type_taxonomy');

//Тип имот
function properties_post_type_taxonomy() {
   $args = array(
      
      'labels' => array(
         'name' => 'Тип имот',
      ),
      'public' => true,
      'hierarchical' => true, //acts as a category
   );

   register_taxonomy('type', array('properties'), $args);
}

add_action('init', 'properties_post_type_taxonomy');

//7. Функция за брой снимки в галерия 

function get_gallery_images_count($postId) {

   $counter = 0;
   foreach ( get_gallery($postId) as $attachment ) {
      $counter++;
   }

   return $counter;
}

//8. widgets

register_sidebar(array(
   'name' => __( 'Properties filter left sidebar' ),
   'id' => 'filter-sidebar',
   'description' => __( 'Widgets in this area will be shown on the left sidebar on Properties page.' ),
   'before_widget' => '<div class="advance-card"><div class="row gx-2">',
   'after_widget'  => '</div></div>',
   'before_title'  => '<h6 class = "filter-heading">',
   'after_title'   => '</h6>'
));

//9. custom excerpt length

function mytheme_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );

