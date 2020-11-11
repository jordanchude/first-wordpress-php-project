<?php

function university_files() {
    // load style css
    // accepts two arguments
    // first argument is nickname for main stylesheet
    // second argument points towards the file with wordpress function
    wp_enqueue_style('university_main_styles', get_stylesheet_uri());
}


// wordpress function that takes two arguments
// the first argument says what type of instructions we're giving it
// the second argument gives Wordpress name of function we want to run, which we create and define
// "right before you output in head, run our custom function"
add_action('wp_enqueue_scripts', 'university_files');

?>