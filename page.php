<?php 
    get_header();
    // loop while we still have posts to loop through
    while(have_posts()) {
        // keeps track of which post we're currently working with
        the_post(); ?>
        
    <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg');?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title();?></h1>
      <div class="page-banner__intro">
        <p>DON'T FORGET TO REPLACE ME LATER</p>
      </div>
    </div>  
  </div>

  <div class="container container--narrow page-section">

    <?php 
      $theParent = wp_get_post_parent_id(get_the_ID());
      // if page has a parent id, render the metabox div
      if ($theParent) { ?>

        <!-- the title = get the title of the current post -->
        <!-- get_the_title = get the title of the post passed into the function -->
        <!-- get permalink = get permalink for that post or page -->
        <div class="metabox metabox--position-up metabox--with-home-link">
          <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent);?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent);?></a> <span 
          class="metabox__main"><?php echo the_title();?></span></p>
        </div>

      <?php }
    ?>

    <!-- <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="#"><i class="fa fa-home" aria-hidden="true"></i> Back to About Us</a> <span class="metabox__main"><?php the_title();?></span></p>
    </div> -->
    
    <!-- display if $theParent evaluates to > 0 or true, OR if you're on a parent page -->
    <?php 
    // this function handles outputting pages on screen for you
    $testArray = get_pages(array(
      'child_of' => get_the_ID()
    ));

    if ($theParent or $testArray) { ?>

    <div class="page-links">
      <h2 class="page-links__title"><a href="<?php echo get_permalink($theParent);?>"><?php echo get_the_title($theParent);?></a></h2>
      <ul class="min-list">
        <!-- creates children pages of the current page being viewed -->
        <?php 
          // an associative array
          // $animalSounds = array(
          //   'cat' => 'meow',
          //   'dog' => 'bark',
          //   'pig' => 'oink'
          // );

          // echo $animalSounds['dog'];

          
          // accepts an associative array
          // tells the server to get children links
          if ($theParent) {
            $findChildrenOf = $theParent;
          } else {
            $findChildrenOf = get_the_ID();
          }

          wp_list_pages(array(
            'title_li' => NULL,
            'child_of' => $findChildrenOf,
            // sort menu by order, which is defined in wp-admin
            'sort_column' => 'menu_order'
          ));
        ?>
      </ul>
    </div>
        <?php } ?>

    <div class="generic-content">
      <?php the_content();?>
    </div>

  </div>

        <?php 
    }
    get_footer();
?>