<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 401 - Agencia de Marketing Digital en Puertp Vallarta</title>
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