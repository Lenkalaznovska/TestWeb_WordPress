<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
    <section>
        <div class="container">
            <div class="sectiongalery">
                <h1><?php the_title(); ?></h1>
                <?php wp_head(); ?>
                <div class="galerie-obsah">
                <?php echo do_shortcode('[rl_gallery id="127"]'); ?>
                <?php wp_footer(); ?>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; ?>
<?php get_footer(); ?>
