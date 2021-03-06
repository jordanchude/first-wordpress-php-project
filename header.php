<!DOCTYPE html>
<html>
    <head>
        <!-- lets wordpress have final say and load whatever it needs to load in head -->
        <?php wp_head(); ?>
    </head>
    <body>
        <header class="site-header">
        <div class="container">
            <h1 class="school-logo-text float-left">
            <!-- pass in root to href -->
            <a href="<?php echo site_url('()') ?>"><strong>Fictional</strong> University</a>
            </h1>
            <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
            <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
            <div class="site-header__menu group">
            <nav class="main-navigation">
                <ul>
                <!-- load site url and add 'about-us' slug at the end of it -->
                <li><a href="<?php echo site_url('/about-us') ?>">About Us</a></li>
                <li><a href="#">Programs</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Campuses</a></li>
                <li><a href="#">Blog</a></li>
                </ul>
            </nav>
            <div class="site-header__util">
                <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
                <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
                <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
            </div>
            </div>
        </div>
        </header>