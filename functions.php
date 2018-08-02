<?php


//Register CSS and Scripts

function landing_script_enqueue(){

 //CSS
   /* wp_enqueue_style('landing', get_template_directory_uri() . '/css/master.css', array (), '1.0.0', 'all');
    wp_enqueue_style('bootsnav', get_template_directory_uri() . '/css/bootsnav.css', array (), '1.0.0', 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array (), '1.0.0', 'all');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array (), '1.0.0', 'all');
    wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', array (), '1.0.0', 'all');
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array (), '1.0.0', 'all');
    wp_enqueue_style( 'aOS', get_template_directory_uri().'/css/aos.css', array(),'1.0.0', 'all' );*/

 //JS
   /*wp_enqueue_script( 'aosJs', get_template_directory_uri(). '/js/aos.js',array(), '1.0.0', true );
   wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() .'/js/bootstrap.min.js', array(), '3.0.0', true);
    wp_enqueue_script('bootsnavjs', get_template_directory_uri() .'/js/bootsnav.js', array(), '3.0.0', true);
    wp_enqueue_script('masterjs', get_template_directory_uri() .'/js/master.js', array(), '3.0.0', true);*/
    	

 //Font
 wp_enqueue_style( 'landing-fonts' ,'https://fonts.googleapis.com/css?family=Open+Sans:600');

}
add_action('wp_enqueue_scripts', 'landing_script_enqueue');



//Theme support

function landing_theme_setup(){
   add_theme_support( 'post-thumbnails' );
   //custom logo
    add_theme_support( 'custom-logo' );
   //image for posts
    add_theme_support( 'post-formats' , array('aside','image','video')); //add and create Post Formats

    register_nav_menus(array(
       'primary' => __('Primary Menu')
    ));
}
add_action('after_setup_theme','landing_theme_setup');

//setting the navwalker
 //require_once('wp_bootstrap_navwalker.php');

//The excerpt Qty or letters in post
function set_excerpt_length(){
  return 25;
}
add_filter('excerpt_length','set_excerpt_length');


//Pagination Navigation

function simple_numeric_posts_nav() {
 
    if( is_singular() )
        return;
 
    global $wp_query;
 
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
 
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
 
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
 
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
 
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
 
    echo '<div class="navigation"><ul>' . "\n";
 
    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );
 
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
 
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
 
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }
 
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
 
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
 
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
 
    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link() );
 
    echo '</ul></div>' . "\n";
 
}

//Send receive emails //Hooks admin-post
add_action('admin_post_nopriv_process_form','send_mail_data');
add_action('admin_post_process_form','send_mail_data');

//Function callback
function send_mail_data(){
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);

    $adminmail = "chirinosdavid1@gmail.com";//email target 
    $subject = 'Contact Form'; //subject
    $headers = "Reply-to: " . $name ."<" . $email .">";

    //Message Body
    $msg = "Name:  " .$name . "\n";
    $msg .= "E-mail:" .$email . "\n\n";
    $msg .= "Message: /n/n" .$message ."\n";

    $sendmail = wp_mail( $adminmail, $subject, $msg, $headers);

    wp_redirect( home_url("/")."?sent=".$sendmail ); //redirect
}




