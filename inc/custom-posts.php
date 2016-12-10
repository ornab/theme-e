
 <?php      

function Theme_E_custom_posts(){
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
    }

add_action( 'init', 'Theme_E_custom_posts' );
