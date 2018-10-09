<?php

// Our custom post type function
function create_posttype() {
 
    register_post_type( 'films',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Films' ),
                'singular_name' => __( 'Film' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'films'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

/*
$args = array(
  'post_type'   => 'films',
  'post_status' => 'publish',
 );
 
$films = new WP_Query( $args );
if( $films->have_posts() ) :
?>
  <ul>
    <?php
      while( $films->have_posts() ) :
        $films->the_post();
        ?>
          <li><?php printf( '%1$s - %2$s', get_the_title(), get_the_content() );  ?></li>
        <?php
      endwhile;
      wp_reset_postdata();
    ?>
  </ul>
<?php
else :
  esc_html_e( 'No published films saved yet', 'text-domain' );
endif;
*/
?>
