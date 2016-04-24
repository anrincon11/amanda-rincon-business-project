<?php
/*
Template name: Full Width
*/
?>

<?php get_header(); ?>

<?php wp_nav_menu(); ?>

<div class="container">
	<section class="row full-width-class">
	    <div class="twelve columns">
	    <!-- BEGIN PAGE PHP -->
	            <?php if (have_posts()) :
	                /* OUR DATA CONTEXT IS DEFINED  */
	                while (have_posts()) : the_post(); ?>
	                    <?php the_content();
	                endwhile;
	            endif; ?>
	    <!-- END PAGE PHP -->
	    </div>
	</section>
<?php get_footer(); ?>
