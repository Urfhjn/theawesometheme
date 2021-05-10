<?php
$paged = '';
if($_GET['paged']) {
	$paged = "<p>You are on page {$_GET['paged']}</p>";
};
?>

<?php get_header() ?>

<main id="search-page" class="container">
    <!-- The wordpress loop -->
    <!--
    <?php if(have_posts()) : ?>
        <?php while(have_posts()) : ?>
            <?php the_post() ?>
            Post data will come out here
        <?php endwhile; ?>
    <?php endif; ?>
    -->

    <div class="container">
        <div class="search-text">
            <h1>Search: <?php echo $_GET['s'] ?></h1>

            <?php if($_GET['paged']) : ?>
                <p>You are on page: <?php echo $_GET['paged'] ?></p>
            <?php endif; ?>

            <?= $paged ?>

        </div>
        <div class="post-list">
            <!-- The wordpress loop -->
            <?php if(have_posts()) : while(have_posts()) : the_post() ?>
                <article>
                    <header class="post-header">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
                    </header>
                    <div class="post-content">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; endif; ?>
        </div>
    </div>
</main>

<div id="pagination">
    <?php wpex_pagination(); ?>
</div>

<?php get_footer() ?>
