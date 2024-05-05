<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PrimaPenzion</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="preload" as="font" type="font/woff2" href="<?php echo get_template_directory_uri(); ?>/font/montserrat-v25-latin_latin-ext-300.woff2" crossorigin="anonymous">
    <link rel="preload" as="font" type="font/woff2" href="<?php echo get_template_directory_uri(); ?>/font/montserrat-v25-latin_latin-ext-regular.woff2" crossorigin="anonymous">
    <link rel="preload" as="font" type="font/woff2" href="<?php echo get_template_directory_uri(); ?>/font/montserrat-v25-latin_latin-ext-700.woff2" crossorigin="anonymous">
    <link rel="preload" as="font" type="font/woff2" href="<?php echo get_template_directory_uri(); ?>/font/krona-one-v14-latin_latin-ext-regular.woff2" crossorigin="anonymous">
</head>
<?php wp_head(); ?>
<body>
    <header>
        <div class="container">
            <div class="ikony">
                <div class="tel">
                    <a href="tel:(+420)606123456" class="tel">(+420) 606 123 456</a>
                </div>
                <div class="ikonysoc">
                    <a href="#" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" target="_blank" title="Facebook"><i class="fab fa-facebook-square"></i></a>
                    <a href="#" target="_blank" title="YouTube"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <a href="#" class="logo">Prima<br>Penzion</a>
            <div class="menu">
                <ul>
                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                </ul>
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/img/primapenzion.jpg" class="obrazek" alt="PrimaPenzion - Obrázek">
    </header>
</body>
<?php wp_footer(); ?>
</html>
