<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <title>Title</title>
    <?php wp_head() ?>
</head>
<body>
<header>
    <div class="container">
        <?php if(has_nav_menu('header')) : ?>
            <?php
	        wp_nav_menu( array( 'theme_location' => 'header', ) );
//	        wp_nav_menu( array(
//		        'theme_location'  => 'header',
//		        'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
//		        'container'       => 'div',
//		        'container_class' => 'collapse navbar-collapse',
//		        'container_id'    => 'bs-example-navbar-collapse-1',
//		        'menu_class'      => 'navbar-nav mr-auto',
//		        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
//		        'walker'          => new WP_Bootstrap_Navwalker(),
//	        ) );
            ?>
        <?php endif; ?>
    </div>
</header>