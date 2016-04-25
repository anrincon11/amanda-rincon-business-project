<!-- Template Name: Blog Posts -->

<?php get_header(); ?>

<?php wp_nav_menu(); ?>

<div class="container">

	<!-- BEGIN SIDEBAR -->
	<div class="three columns">
		<?php get_sidebar(); ?>
	</div>
	<!-- END SIDEBAR -->

	<?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>
    <div class="row">

		<section id="posts" class="eight columns">

			<?php if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    <h3><?php the_title(); ?></h3>
                    <?php the_excerpt(__('Continue reading »','example'));
                endwhile; ?>
				<p><a href="<?php echo get_permalink(); ?>"> Read More</a></p>
                <div class="navigation">
                    <span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
                </div>
                <?php else: ?>
                <div class="404-section">
                    <p><?php _e('None found.','example'); ?></p>
                </div>
            <?php endif; wp_reset_query(); ?>

        </section>

    </div>

<?php get_footer(); ?>
