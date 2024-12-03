<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php if(is_front_page()): ?>
            <title>Punto401 - Agencia de Marketing Digital en Puerto Vallarta</title>
            <meta name="description" content="Somos una Agencia de Marketing Digital con especialización en Bienes Raíces en Puerto Vallarta. Nuestros servicios abarcan la creación de recursos audiovisuales, desarrollo de sitios web, implementación de estrategias de SEO, diseño de tu imagen corporativa y gestión integral de tus redes sociales. Nuestro objetivo es garantizar que tu propiedad o empresa llegue a la máxima cantidad de compradores potenciales en Puerto Vallarta y sus alrededores.">
        <?php elseif(is_post_type_archive()):?>
            <title>Punto401 - <?php echo post_type_archive_title(); ?></title>
            <meta name="description" content="Portafolio de Punto401 Marketing de <?php echo post_type_archive_title(); ?>, especializados en Bíenes Raíces">
        <?php elseif( is_page() ):?>
            <title>Punto401 - <?php echo single_post_title(); ?></title>
            <meta name="description" content="<?php echo get_the_excerpt(); ?>">
        <?php else: ?>
            <title>Punto401 - <?php echo the_title(); ?></title>
            <meta name="description" content="<?php echo get_the_excerpt(); ?>">
	<?php endif; ?>

    <meta name="theme-color" content="#1a1a1a">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VXYYZ3WC4J"></script>
    <script async src="<?php echo get_template_directory_uri();?>/assets/js/third-party.js"></script>

    
    <!-- Meta Pixel Code -->
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=4727010297378212&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" as="style"> 
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PZX7WBD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="inicio"></div>    
    <header>
        
        <a href="<?php echo get_home_url();?>" aria-label="Punto401 Logo">
            <?php 
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" class="logo" alt="Logo de Punto401 Marketing">
        </a>
        
        <div class="menu-btn" onclick="toggleMenu()">
            <div class="menu-btn-burger"></div>
        </div>

        <?php   
            wp_nav_menu(
            array(
            'menu' => 'primary',
            'container' => '',
            'theme_location' => 'primary',
            'items_wrap' => '<ul class="navigation">%3$s</ul>'
            )
            );
        ?>


    </header>