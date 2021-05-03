<?php
$categories = get_the_category_list($separator = ', ');
$tags = get_the_tag_list();
?>
<?php get_header() ?>

<main>
	<div class="container">
        <div class="post-list">
            <!-- The wordpress loop -->
            <?php if(have_posts()) : while(have_posts()) : the_post() ?>
                <article>
                    <header class="post-header">
                        <h2><?php the_title() ?></h2>
                        <div class="row meta-data">
                            <div class="col">
                                <div class="categories">
                                    Categories: <?= $categories; ?>
                                </div>
                            </div>
                            <div class="col text-right">
                                <div class="tags">
                                    Tags: <?= $tags; ?>
                                </div>
                            </div>
                        </div>
                    </header>
                    <div class="post-content">
                        <?php the_content() ?>
                    </div>
                </article>
            <?php endwhile; endif; ?>
        </div>
	</div>
</main>

<?php get_footer() ?>
