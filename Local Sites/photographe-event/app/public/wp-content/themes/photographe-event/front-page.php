<?php get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <!-- Include Section Hero -->
        <?php get_template_part('template-parts/front-page/section_hero'); ?>
        
        <!-- Include Section Filters -->
        <?php get_template_part('template-parts/front-page/filters'); ?>

        <!-- Section Display More images -->
        <section id="section_result_filtered" class="section_photo_block_container">
            <?php
            // Post per page
            $post_per_page = 8;
            $categorie = isset($_POST['categoriies']) ? $_POST['categoriies'] : '';
            if (!empty($categorie) && $categorie === 'categoriies') {
                $post_per_page = 8;
            }
            // Argument definition
            $args = array(
                'orderby' => 'rand',
                'post_type' => 'photos',
                'posts_per_page' => $post_per_page,
                'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
                'categoriies' => $categorie,
            );
            // Definition / Execution of wp-query
            $query = new WP_Query($args);
            // Execution loop of wp-query
            while ($query->have_posts()) : $query->the_post();
                $post_url = get_permalink();
            ?>
                <!-- Post Card -->
                <?php get_template_part('template-parts/photo_block'); ?>

            <?php endwhile;
            wp_reset_postdata() ?>
        </section><!-- section_photo_block_container -->
        <div class="div_btn_load_more">
    <div class="btn_load_more">
        <button id="load-more-button" data-category="<?php echo isset($_POST['categoriies']) ? $_POST['categoriies'] : ''; ?>">Charger Plus</button>
    </div>
</div><!-- .div_btn_load_more -->

<?php endwhile;
endif; ?>
<?php get_footer(); ?>