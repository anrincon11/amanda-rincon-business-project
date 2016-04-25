<?php get_header(); ?>

<?php wp_nav_menu(); ?>

<div class="container">
    <div class="row">
<!-- BEGIN SIDEBAR -->
		<div class="three columns">
			<?php get_sidebar(); ?>
		</div>
<!-- END SIDEBAR -->
		<div class="nine columns">
            <?php if (have_posts()) :
                while (have_posts()) : the_post(); ?>
					<?php the_content();
                endwhile;
            endif; ?>
        </div>
    </div>

<?php get_footer(); ?>
