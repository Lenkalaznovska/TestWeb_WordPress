<?php get_header(); ?>

<div class="container">

    <?php while (have_posts()) : the_post(); ?>
        <article>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </article>
    <?php endwhile; ?>

</div>

<?php get_footer(); ?>
