
 <?php      

function theme_e_custom_posts(){
        register_post_type( 'featured work',
            array(
                'labels' => array(
                    'name' => __( 'Featured Work' ),
                    'singular_name' => __( 'Featured Work' )
                ),
                'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes', 'excerpt'),
                'public' => true
            )
        );
    
          register_post_type( 'slide',
            array(
                'label'=> 'Slides',
                'labels' => array(
                    'name' => __( 'Slides' ),
                    'singular_name' => __( 'Slide' )
                ),
                'menu_icon'=>'dashicons-images-alt',
                'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes', 'excerpt'),
                'public' => true
            )
        );
       
    }

add_action( 'init', 'theme_e_custom_posts' );
