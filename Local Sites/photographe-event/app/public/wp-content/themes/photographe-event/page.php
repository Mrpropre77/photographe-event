<?php get_header(); ?>

<!-- Include Section Hero -->
<?php get_template_part('template-parts/front-page/section_hero'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h2>Page : <?php the_title(); ?> en construction</h2>

<?php endwhile;
endif; ?>


<?php get_footer(); ?>