    <footer>
    <div class="bg-gradiant pt-5 pb-5">
        <div class="row justify-content-between">

            <div class="col-12 col-lg-5 mb-4 mb-md-0">
                <div class="footer-logo">

                    <a href="<?php echo get_home_url(); ?>">

                    <?php 

                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    
                    ?>

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo de Punto401" class="logo">
                    </a>

                    <div class="d-flex text-center mt-2">
                    <a href="https://www.facebook.com/Punto401/" target="_blank" rel="noopener noreferrer" aria-label="Facebook de Punto401" class="fb_click">
                        <i class="fab fa-facebook me-4 fa-lg"></i>
                    </a>
                    <a href="https://www.instagram.com/punto401_marketing/" target="_blank" rel="noopener noreferrer" aria-label="Instagram de Punto401" class="insta_click">
                        <i class="fab fa-instagram me-4 fa-lg"></i>
                    </a>
                    <a href="https://wa.link/khx8bl" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp de Punto401" class="wp_click">
                        <i class="fab fa-whatsapp fa-lg"></i>
                    </a>
                    </div>
                </div>

            </div>

            <div class="col-12 col-lg-5 mb-4 mb-md-0">

                <div class="text-left ml-5 ml-md-0 fs-5">
                    <div class="text-bold mb-3 fs-3">Información de Contacto</div>

                    <a href="https://goo.gl/maps/urKUCiHUqaLxWRVU9" class="mb-2 fs-5 link-light text-decoration-none d-block location_click" target="_blank" rel="noopener noreferrer">
                        <i class="fas fa-map-marker-alt"></i> Febronio Uribe 100, Las Glorias, 48333 Puerto Vallarta, Jal.
                    </a>

                    <a href="tel:+523222461410" class="mb-2 fs-5 link-light text-decoration-none d-block phone_click">
                        <i class="fas fa-phone"></i> 322 246 1410
                    </a>

                    <a href="mailto:info@punto401.com" class="mb-2 fs-5 link-light text-decoration-none d-block mail_click" target="_blank" rel="noopener noreferrer">
                        <i class="fas fa-envelope"></i> info@punto401.com
                    </a>

                </div>

            </div>

            <!-- <div class="col-12 col-lg-3 mb-4 mb-md-0">
                <div class="text-bold ml-5 ml-md-0">Instagram</div>
                <div class="row">
                    <?php //echo do_shortcode( '[jr_instagram id="1"]', true ) ?>
                </div>
            </div> -->
            

        </div>
    </div>
    </footer>

    <!--boton whatsapp-->
    <a href="https://wa.me/523221804703?text=Hola+vengo+del+sitio+web" id="whatsapp" target="_blank" rel="noopener" aria-label="Contactar por whatsapp" title="Whatsapp"  data-bs-toggle="tooltip" data-bs-placement="top" class="border border-dark"> 
        <i class="fab fa-whatsapp"></i>
    </a>

    <?php wp_footer(); ?>
</body>
</html>