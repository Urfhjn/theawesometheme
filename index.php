<?php get_header() ?>

<main>
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
        <div class="post-list">
            <!-- The wordpress loop -->
            <?php if(have_posts()) : while(have_posts()) : the_post() ?>
                <article>
                    <div class="row">
                        <div class="col-md-4 col-lg-3 col-xl-2">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail($size='thumbnail'); ?></a>
                        </div>
                        <div class="col-md-8 col-lg-9 col-xl-10">
                            <header class="post-header">
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
                            </header>
                            <div class="post-content">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    </div>
                </article>
            <?php endwhile; endif; ?>
        </div>
    </div>

</main>

<?php get_footer() ?>
