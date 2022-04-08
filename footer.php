    <footer>
    <div class="bg-gradiant pt-5 pb-5">
        <div class="row justify-content-center">

            <div class="col-12 col-lg-4 mb-4 mb-md-0">
                <div class="footer-logo">

                    <a href="<?php echo get_home_url(); ?>">

                    <?php 

                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    
                    ?>

                    <img src="<?php echo $image[0]; ?>" alt="Logo de Punto401" class="logo">
                    </a>

                    <div class="d-flex text-center mt-2">
                    <a href="https://www.facebook.com/Punto401/" target="_blank" rel="noopener noreferrer" aria-label="Facebook de Punto401">
                        <i class="fab fa-facebook mr-4 fa-lg"></i>
                    </a>
                    <a href="https://www.instagram.com/punto401_marketing/" target="_blank" rel="noopener noreferrer" aria-label="Instagram de Punto401">
                        <i class="fab fa-instagram mr-4 fa-lg"></i>
                    </a>
                    <a href="https://wa.link/khx8bl" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp de Punto401">
                        <i class="fab fa-whatsapp fa-lg"></i>
                    </a>
                    </div>
                </div>

            </div>

            <div class="col-12 col-lg-3 mb-4 mb-md-0">

                <div class="text-left ml-5 ml-md-0 fs-5">
                    <div class="text-bold mb-3">Información de Contacto</div>
                    <div class="mb-2"><i class="fas fa-map-marker-alt mr-2"></i>48313 Puerto Vallarta, Jalisco, México</div>
                    <div class="mb-2"><i class="fas fa-phone mr-2"></i>322 246 1410</div>
                    <div class="mb-2"><i class="fas fa-envelope mr-2"></i>info@punto401.com</div>
                </div>

            </div>

            <div class="col-12 col-lg-3 mb-4 mb-md-0">
                <div class="text-bold ml-5 ml-md-0">Instagram</div>
                <div class="row">
                    <?php echo do_shortcode( '[my-instagram-feed  user_id="17841443804702200" skin_id="34" feeds_per_page="3" caption_words="5" cache_unit="1" cache_duration="days" load_more="0"  links_new_tab="1"  show_stories="0" ]', true ) ?>
                </div>
            </div>

        </div>
    </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>