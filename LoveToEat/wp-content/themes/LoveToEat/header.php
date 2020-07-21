<!DOCTYPE html>
<html <?php language_attributes(); ?> >
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />

        <?php if(is_search()) : ?>
            <meta name="robots" content="noindex, nofollow" ?>" />
        <?php endif; ?>

        <title>LoveToEat Home Page</title>

        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?> /css/reset.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?> /css/common.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?> /css/screen.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?> /css/jqtransform.css">

        <script src="<?php echo LOVETOEAT_THEME_URL ?>js/jquery-1.9.1.min.js"></script>
        <script src="<?php echo LOVETOEAT_THEME_URL ?>js/jquery.carouFredSel-6.2.0.js"></script>
        <script src="<?php echo LOVETOEAT_THEME_URL ?>js/jquery.jqtransform.js"></script>
        <script src="<?php echo LOVETOEAT_THEME_URL ?>js/slides.jquery.js"></script>
        <script src="<?php echo LOVETOEAT_THEME_URL ?>js/scripts.js"></script>

        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" >

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?> >

        <header>
            <div class="pos-center">
                <h1><a href="<?php echo esc_url( home_url( '/')); ?>"></a></h1>

                <nav id="main-nav">
                    <div>
                        <ul class="menu">
                            <li>
                                <a href="#">Recipies</a>
                                <ul class="sub-menu">
                                    <li><a href="#" title="lunch">Dinner and Supper</a></li>
                                    <li><a href="#" title="breakfast">Breakfast</a></li>
                                    <li><a href="#" title="snacks">Snacks</a></li>
                                    <li><a href="#" title="desserts">Deserts</a></li>
                                    <li><a href="#" title="drinks">Drinks</a></li>
                                    <li><a href="#" title="all">All</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Restaurants</a></li>
                            <li><a href="#">Food Fight</a></li>
                            <li class="current-menu-item"><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>                    
                </nav>
            </div>
        </header>