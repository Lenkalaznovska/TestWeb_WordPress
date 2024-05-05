<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
    <section>
        <div class="container">
            <div class="sectionkontakt">
                <h1><?php the_title(); ?></h1>

                <div class="sectionikony kontakt-sectionikony">
                    <div class="kontakt-info">
                        <p class="kontakt"><i class="fas fa-globe-americas"></i>PrimaPenzion, Jablonského 2, Praha 7</p>
                        <p class="phone"><i class="fas fa-phone"></i><a href="tel:773348790">773 348 790</a></p>
                        <p class="mail"><i class="far fa-envelope"></i>info@primapenzion.cz</p>
                    </div>

                    <div class="pracdoba">
                        <p><b>Po - Pa</b>: 8 - 18h</p>
                        <p><b>So</b>: 10 - 22h</p>
                        <p><b>Ne</b>: Zavřeno</p>
                    </div>
                </div>

                <div class="karty">
                    <p>Přijímáme platební karty:</p>
                    <div class="platebni-karty">
                        <i class="fab fa-cc-visa"></i>
                        <i class="fab fa-cc-mastercard"></i>
                        <i class="fab fa-cc-paypal"></i>
                    </div>
                </div>

                <div class="mapa">
                    <a href="https://goo.gl/maps/MgsFEvoh9guFecFT6" target="_blank" class="mapa-link">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/mapa.jpg" alt="Mapa adresy">
                    </a>
                </div>

                <h2 class="napiste-nam">NAPIŠTE NÁM</h2>
                <form class="form" method="post">
                    <?php echo do_shortcode('[contact-form-7 id="179fa3a" title="Kontaktní formulář"]'); ?>
                </form>
            </div>
        </div>
    </section>
<?php endwhile; ?>

<?php get_footer(); ?>

