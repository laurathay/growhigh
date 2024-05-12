<?php

/**
 * Template Name: Page avec banniere
 */
?>

<?php get_header() ?>

<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
    <h1><?php the_title() ?></h1>
    <p>
        <img src="<?php the_post_thumbnail_uri(); ?>" alt="" style="width: 100%; height: auto;">
    </p>
    <?php the_content() ?>
<?php endwhile;
endif; ?>

<?php get_footer() ?>
