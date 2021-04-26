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
				<form method="post" class="ui form">
					<div>
						<label>
							Email
							<input name="email" type="text" value="" />
						</label>
					</div>
				    <div class="submit field">
				        <input class="ui button primary fluid" type="submit" value="Save" />
				    </div>
				</form>
			</div>

		<?php endwhile; endif; ?>
	</div>
</main>

<?php get_footer() ?>
