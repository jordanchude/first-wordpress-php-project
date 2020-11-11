<?php 
    get_header();
    // loop while we still have posts to loop through
    while(have_posts()) {
        // keeps track of which post we're currently working with
        the_post(); ?>
        <!-- linked title -->
        <h2><?php the_title()?></h2>
        <!-- blog post text -->
        <?php the_content()?>
        <?php 
    }
    get_footer();
?>