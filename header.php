<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 401 - Agencia de Marketing Digital en Puerto Vallarta</title>
    <meta name="description" content="¡Somos un grupo de jóvenes apasionados por lo que hacemos! El respeto, la honestidad y el trabajo en equipo nos distingue. Nuestro objetivo es sumar esfuerzos para acompañarte en este trayecto por el universo digital.">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VXYYZ3WC4J"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-VXYYZ3WC4J');
    </script>

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '4727010297378212');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=4727010297378212&ev=PageView&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->

    <?php wp_head(); ?>
</head>
<body>
<div id="inicio"></div>    
    <header>
        
        <a href="index.php"
            <?php 

                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                
            ?>
        >
        <img src="<?php echo $image[0]; ?>" alt="" class="logo">
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