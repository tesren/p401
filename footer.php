    <footer>
    <div class="bg-gradiant pt-5 pb-5">
        <div class="row">

            <div class="col-12 col-md-4 mb-4 mb-md-0">
                <div class="footer-logo">

                    <a href="index.php"
                    <?php 

                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    
                    ?>>

                    <img src="<?php echo $image[0]; ?>" alt="" class="logo">
                    </a>

                    <div class="d-flex text-center mt-2">
                    <i class="fab fa-facebook mr-4 fa-lg"></i>
                    <i class="fab fa-instagram mr-4 fa-lg"></i>
                    <i class="fab fa-whatsapp fa-lg"></i>
                    </div>
                </div>

            </div>

            <div class="col-12 col-md-4 mb-4 mb-md-0">

                <div class="text-left ml-5 ml-md-0">
                    <div class="text-bold mb-2">Nosotros</div>
                    <div><i class="fas fa-map-marker-alt mr-2"></i>48313 Puerto Vallarta, Jalisco, México</div>
                    <div><i class="fas fa-phone mr-2"></i>322 246 1410</div>
                    <div><i class="fas fa-envelope mr-2"></i>info@punto401.com</div>
                </div>

            </div>

            <div class="col-12 col-md-4 mb-4 mb-md-0">
                <div class="text-bold ml-5 ml-md-0">Instagram</div>
            </div>

        </div>
    </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>