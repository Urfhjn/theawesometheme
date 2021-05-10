<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <title>Title</title>
    <?php wp_head() ?>
</head>
<body>
<header>
    <?php if(has_nav_menu('header')) : ?>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
	            <?php
	            wp_nav_menu( array(
		            'theme_location'  => 'header',
		            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
		            'container'       => 'div',
		            'container_class' => 'collapse navbar-collapse',
		            'container_id'    => 'navbarNav',
		            'menu_class'      => 'navbar-nav mr-auto',
		            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
		            'walker'          => new WP_Bootstrap_Navwalker(),
	            ) );
	            ?>
            </div>
        </nav>
    <?php endif; ?>
</header>