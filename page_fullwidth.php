<?php
/*
Template name: Full Width
*/
?>

<?php
/*
Template name: Full Width
*/
?>

<?php
/*
Template name: Full Width
*/
?>
<?php get_header(); ?>
<section class="row full-width-class">
    <div class="twelve columns">
    <!-- BEGIN PAGE PHP -->
            <?php if (have_posts()) :
                /* OUR DATA CONTEXT IS DEFINED  */
                while (have_posts()) : the_post(); ?>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content();
                endwhile;
            endif; ?>
    <!-- END PAGE PHP -->
    </div>
</section>
<?php get_footer(); ?>
