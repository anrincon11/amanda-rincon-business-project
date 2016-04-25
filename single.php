<?php get_header(); ?>

<?php wp_nav_menu(); ?>

<div class="container">

	<section class="row">

		<div class="twelve columns">
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();?>
					<h1><?php the_title(); ?></h1>
					<?php
					if ( has_post_thumbnail() ) { ?>
						<div class="single-post-thumbnail">
							<?php the_post_thumbnail('large'); ?>
						</div>
					<?php
					}
					?>
					<?php the_content();
				}
			} ?>
		</div>

	</section>

<?php get_footer(); ?>
