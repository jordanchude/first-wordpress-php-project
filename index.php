<!-- function to get header from header.php -->
<?php get_header();

    // loop while we still have posts to loop through
    while(have_posts()) {
        // keeps track of which post we're currently working with
        the_post(); ?>
        <!-- linked title -->
        <h2><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h2>
        <!-- blog post text -->
        <?php the_content()?>
        <hr>
        <?php 
    }

    // function to get footer from footer.php
    get_footer();
?>