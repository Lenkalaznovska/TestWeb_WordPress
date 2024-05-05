<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
    <section>
        <div class="container">
            <div class="sectionkontakt">
                <h1><?php the_title(); ?></h1>
                <form class="form" method="post">
                    <?php echo do_shortcode('[contact-form-7 id="cfa5766" title="Rezervační formulář"]'); ?>
                </form>
            </div>
        </div>
    </section>
<?php endwhile; ?>

<?php get_footer(); ?>
