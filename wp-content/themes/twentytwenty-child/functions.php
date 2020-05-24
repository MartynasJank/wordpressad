<?php
// Style thing
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    $parenthandle = 'twentytwenty-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css',
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );
}

// Js thing
function my_custom_scripts() {
    wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/js/custom.js', array( 'jquery' ),'',true );
}
add_action( 'wp_enqueue_scripts', 'my_custom_scripts' );

// Adds banner every 4th paragraph
add_filter( 'the_content', 'add_content_after_p' );
function add_content_after_p($content){

    $closing_p = '</p>';
    $paragraphs = explode( $closing_p, $content );
    $count = 0;

    for ($i = 0; $i < count($paragraphs); $i++) {
        if( ($i + 1) % 4 === 0 ){
            $count++;
            if($count > 2){
                $div = '
                    <a href="https://dummyimage.com/300x250/000/fff" class="progressive replace banner">
                        <img src="https://dummyimage.com/6x5/000/fff" class="preview" alt="image">
                    </a>
                ';
            } else {
                $div = '<img src="https://dummyimage.com/300x250/000/fff" class="banner" alt="image">';
            }
            $paragraphs[$i] = $paragraphs[$i].$div;
        }
    }
    $content = implode('', $paragraphs);
    return $content;
}

add_filter( 'the_content', 'add_sidebar' );
function add_sidebar($content){
    $sidebar = '<img src="https://dummyimage.com/300x600/000/fff" id="sideAd" class="sideAd">';
    return $content.$sidebar;
}

add_filter( 'the_post', 'add_header_ad');
function add_header_ad(){
    $header_ad = '<img src="https://dummyimage.com/970x250/000/fff" class="headerAd">';
    echo $header_ad;
}
