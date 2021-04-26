<?php get_header() ?>

<main>
	<div class="container">
		<!-- The wordpress loop -->
		<?php if(have_posts()) : while(have_posts()) : the_post() ?>

			<div class="post-header">
				<h2><?php the_title() ?></h2>
			</div>
			<div class="post-content">
				<?php the_content() ?>
			</div>

		<?php endwhile; endif; ?>
	</div>
</main>

<?php get_footer() ?>
