<?php 
    add_theme_support ('post-thumbnails');
    add_theme_support ('title-tag');
    add_theme_support ('custom-logo');
    add_filter ( 'upload_mimes' , 'svg_upload_allow' );
    function  svg_upload_allow ( $mimes )   {
        $mimes [ 'svg' ] = 'image/svg+xml' ;

        return  $mimes ;
    }


    add_action ( 'wp_enqueue_scripts' , function  () {
        wp_enqueue_style ( 'fonts0css' , "https://fonts.googleapis.com" );
        wp_enqueue_style ( 'fonts1css' , "https://fonts.gstatic.com" );
        wp_enqueue_style ( 'fonts2css' , "https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&display=swap" );

        wp_enqueue_style ( 'swipercss' , "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" );
        wp_enqueue_style ( 'nullstylecss' , get_template_directory_uri () . '/assets/style/nullStyle.css' );
        wp_enqueue_style ( 'workstyle' , get_template_directory_uri () . '/assets/style/workstyle.css' );
        wp_enqueue_style ( 'stylecss' , get_template_directory_uri () . '/assets/style/style.css' );

        wp_enqueue_script( 'swiperscript', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '20151215', true );
        wp_enqueue_script( 'mainscript', get_template_directory_uri() . '/assets/scripts/index.js', array(), '20151215', true );
    })

?>