<?php


use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );

function crb_attach_theme_options() {
 Container::make( 'post_meta', 'Header Data' )
    ->where( 'post_id', '=', '19' )
        ->add_fields( array( 
            Field::make( 'text', 'crb_name_club', __( 'Name Club' ) ),
            Field::make( 'textarea', 'crb_description_club', __( 'Description Club' ) ),
            Field::make( 'image', 'image_logo', ( 'Image' ) )
            ->set_value_type( 'url' )

         ) );

 Container::make( 'post_meta', 'Partiner Data' )
    ->where( 'post_id', '=', '19' )
        ->add_fields( array(
            Field::make( 'complex', 'crb_logos','logo partiner' )
                ->set_layout('tabbed-horizontal')
              ->add_fields( array(
                Field::make( 'image', 'image', __( 'Image' ) )
                ->set_value_type( 'url' )

            )),
          ) );
  Container::make( 'post_meta', 'Events Data' )
          ->where( 'post_id', '=', '19' )
              ->add_fields( array(
                  Field::make( 'complex', 'crb_events','logo Events' )
                      ->set_layout('tabbed-horizontal')
                    ->add_fields( array(
                      Field::make( 'image', 'image', __( 'Image Event' ) )
                      ->set_value_type( 'url' ),
                      Field::make( 'text', 'crb_event', __( 'Name Event' ) ),

      
                  )),
                ) );

 Container::make( 'post_meta', 'Our business data' )
            ->where( 'post_id', '=', '19' )
                 ->add_fields( array(
                    Field::make( 'complex', 'crb_business','card business' )
                            ->set_layout('tabbed-horizontal')
                          ->add_fields( array(
                            Field::make( 'image', 'image', __( 'Image business' ) )
                            ->set_value_type( 'url' ),
                            Field::make( 'text', 'crb_business', __( 'title business' ) ),
                            Field::make( 'textarea', 'crb_description_business', __( 'description business' ) ),      
            
                        )),
                      ) );
  Container::make( 'post_meta', 'says data' )
                      ->where( 'post_id', '=', '19' )
                           ->add_fields( array(
                              Field::make( 'complex', 'crb_says','they said about us ' )
                                      ->set_layout('tabbed-horizontal')
                                    ->add_fields( array(
                                      Field::make( 'image', 'image', __( 'picture of the saying' ) )
                                      ->set_value_type( 'url' ),
                                      Field::make( 'text', 'crb_name', __( 'Name ' ) ),
                                      Field::make( 'text', 'crb_job', __( 'Name job' ) ),
                                      Field::make( 'textarea', 'crb_say', __( 'text say' ) ),      
                      
                                  )),
                                ) );

  Container::make( 'post_meta', 'FAQ Data ' )
                     ->where( 'post_id', '=', '19' )
                                ->add_fields( array(
                                    Field::make( 'complex', 'crb_faq','FAQ' )
                                    ->set_layout('tabbed-horizontal')
                                    ->add_fields( array( 
                                        Field::make( 'text', 'crb_question', __( 'Question' ) ),
                                        Field::make( 'textarea', 'crb_answer', __( 'answer' ) ),
                                      )),
                                     ) );
        
  Container::make( 'post_meta', 'team data' )
                      ->where( 'post_id', '=', '45' )
                           ->add_fields( array(
                              Field::make( 'complex', 'crb_team','our Member ' )
                                      ->set_layout('tabbed-horizontal')
                                    ->add_fields( array(
                                      Field::make( 'image', 'image', __( 'picture of Member' ) )
                                      ->set_value_type( 'url' ),
                                      Field::make( 'text', 'crb_name', __( 'Name ' ) ),
                                      Field::make( 'text', 'crb_job', __( 'Name job' ) ),
                                      Field::make( 'text', 'crb_facebook', __( 'facebook' ) ),      
                                      Field::make( 'text', 'crb_instagram', __( 'instagram' ) ),      
                                      Field::make( 'text', 'crb_linkden', __( 'linkden' ) ),      
                      
                                  )),
                                ) );          

}


function enqueue_style (){
    wp_enqueue_style( "bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css");
    
    wp_enqueue_style( "font-awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css");

    wp_enqueue_style( "aos", "https://unpkg.com/aos@2.3.1/dist/aos.css");

    wp_enqueue_style( "main-css", get_template_directory_uri()."/css/main.css");

}

add_action( 'wp_enqueue_scripts', 'enqueue_style' );

function enqueue_script() {
    //<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    
    wp_enqueue_script( "jquery", "https://code.jquery.com/jquery-2.1.0.js", array(),false ,true );
    wp_enqueue_script( "bootstrapjs4.1.3", "https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js", array(),false ,true );
    wp_enqueue_script( "bootstrapjs", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js", array(),false ,true );
    wp_enqueue_script( "aos", "https://unpkg.com/aos@next/dist/aos.js", array(),false ,true );
    wp_enqueue_script( "custemjs", get_template_directory_uri()."/js/custem.js", array(),false ,true );

}

add_action( 'wp_enqueue_scripts', 'enqueue_script' );

add_theme_support( 'post-thumbnails', array( 'post' ) ); 
         
function setuptheme () {
  register_nav_menu('menu','primary menu');
}

function wp_change_menu_class_li( $classes, $item, $args ) {
 
  if ( 'menu' === $args->theme_location ) {
      $classes[] = "nav-item";
  }

  return $classes;
}

add_filter( 'nav_menu_css_class' , 'wp_change_menu_class_li' , 10, 3 );

function add_specific_menu_location_atts( $atts, $item, $args ) {
  // check if the item is in the primary menu
  if( $args->theme_location == 'menu' ) {
    // add the desired attributes:
    $atts['class'] = 'nav-link';
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3 );

add_action( 'after_setup_theme', 'setuptheme' );
