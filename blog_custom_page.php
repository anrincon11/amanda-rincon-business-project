<!-- Template Name: Blog Posts -->

<?php get_header(); ?>

<?php wp_nav_menu(); ?>

<div id="blog" class="container">

	<!-- BEGIN SIDEBAR -->
	<div id="sidebar" class="three columns">
		<?php get_sidebar(); ?>
	</div>
	<!-- END SIDEBAR -->

	<?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>

		<section id="posts" class="eight columns">

			<?php if (have_posts()) :
                	while (have_posts()) : the_post(); ?>
                    	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    	<h3><?php the_title(); ?></h3>
                    	<?php the_excerpt(__('Continue reading »','example')); ?>
						<p id="read-more"><a href="<?php echo get_permalink(); ?>"> Read more...</a></p>
            	<?php endwhile; ?>
                	<div class="navigation">
                    	<span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
                	</div>
            <?php else: ?>
                <div class="404-section">
                    <p><?php _e('None found.','example'); ?></p>
                </div>
            <?php endif; wp_reset_query(); ?>

        </section>
		
	<?php get_footer(); ?>
