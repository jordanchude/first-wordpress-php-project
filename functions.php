<?php

function university_files() {
    // load javascript
    // call the load 'main university javascript'
    // grab bundled scripts file with path
    // NULL for dependencies
    // 1.0 for version
    // true for load this file right before closing body tag
    wp_enqueue_script('main-university-javascript', get_theme_file_uri('/js/scripts-bundled.js'),NULL, '1.0', true);

    // load style css
    // accepts two arguments
    // first argument is nickname for main stylesheet
    // second argument points towards the file with wordpress function
    wp_enqueue_style('university_main_styles', get_stylesheet_uri());

    // load fontawesome library
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    // custom google fonts
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i" rel="stylesheet');
}


// wordpress function that takes two arguments
// the first argument says what type of instructions we're giving it
// the second argument gives Wordpress name of function we want to run, which we create and define
// "right before you output in head, run our custom function"
add_action('wp_enqueue_scripts', 'university_files');

function university_features() {
    // add_theme_support enables a feature for a theme
    // add feature title tag
    add_theme_support('title-tag');
}

// after setup theme
// trigger 'university features' function
add_action('after_setup_theme', 'university_features');

?>