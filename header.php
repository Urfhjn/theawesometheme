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
            <?php wp_nav_menu( array( 'theme_location' => 'header', ) ); ?>
        <?php endif; ?>
    </div>
</header>