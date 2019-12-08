<header class="store-header">
    <div class="store-header-inner-container">
        <nav id="site-navigation" class="main-navigation">

            <h1 class="large-letter"><a href="#">BAY</a></h1>
                    
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'store-header-menu',
                    'menu_class' => 'header-menu store-header-menu'
                ) );
            ?>
                    
        </nav><!-- #site-navigation "menu-1" just a note about theme location-->
    </div>
</header>



<header class="studio-header">
    <!-- HEADER ON COMPUTER SCREEN (MIN WITH 1200px?) -->
    <!-- <div class="studio-header-large container"> -->
        <nav id="site-navigation" class="studio-header-large container">
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'studio-header-menu',
                    'menu_class' => 'header-menu studio-header-menu'
                ) );
            ?>          
        </nav><!-- #site-navigation "menu-1" just a note about theme location-->
    <!-- </div> -->

    <!-- HEADER ON SMALLER SCREENS (WIDTH 320-1200px)  -->
    <!-- <div class="studio-header-inner-container-responsive"> -->
        <h1 class="header-logo-title"><img src="<?php bloginfo('template_url'); ?>/dist/img/bayhelsinki-kaari.svg"></h1>
        <a class="toggle-header-nav">
            <img src="<?php bloginfo('template_url'); ?>/dist/img/menu.svg">
        </a>
    <!-- </div> -->

    <!-- DROP DOWN MENU (SHOWN AFTER THE HAMBURGER MENU IS CLICKED-->
    <div class="drop-down-menu">
        <nav id="site-navigation-responsive" class="main-navigation">

            <?php
                wp_nav_menu( array(
                    'theme_location' => 'studio-header-menu',
                    'menu_class' => 'header-menu studio-header-menu'
                ) );
            ?>
                        
        </nav><!-- #site-navigation "menu-1" just a note about theme location-->
    </div>

</header>

<div class="overlay-fade">

</div>
<div class="overlay-fade">

</div>