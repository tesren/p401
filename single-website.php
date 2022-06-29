<?php get_header();?>

<?php if( have_posts() ):?>
    <article>
        <?php while( have_posts() ): the_post();?>

            <?php 
                $imagesFull = rwmb_meta('images', ['size'=>'full', 'limit'=>4]);
                $imagesMed = rwmb_meta('images', ['size'=>'medium', 'limit'=>4]); 
            ?>

            <div class="container">
                <h1 class="fs-0 text-uppercase mt-6 pt-5 title401 mb-6">
                    <div class="mb-4">Portafolio</div>
                    <img class="col-12 col-lg-3" src="<?php echo $imagesMed[0]['url']; ?>" alt="<?php echo get_the_title(); ?>" style="height:150px; object-fit:cover;"> <?php echo get_the_title(); ?>
                    <div class="mt-4 ms-5">Sitio Web<img src="<?php echo get_template_directory_uri() .'/assets/images/decoration2.svg';?>" alt="" class="decoration2"></div>
                </h1>

                <img src="<?php echo $imagesFull[1]['url']; ?>" alt="<?php echo $imagesFull[1]['title']; ?>" class="w-100">

                <div class="row justify-content-between mt-5 mb-6">
                    <div class="col-12 col-lg-6 fs-5">
                        <h2 class="text-uppercase">Información del Proyecto</h2>
                        <div>Cliente: <?php echo get_the_title();?></div>
                        <div>Categoría: Sitio Web</div>
                        <div>Año: <?php echo rwmb_meta('year'); ?></div>
                    </div>

                    <div class="col-12 col-lg-5 fs-5">
                    <p><?php echo get_the_content(); ?></p>
                    </div>
                </div>

                <div class="row justify-content-evenly mb-5">
                    <div class="col-12 col-lg-5">
                        <h2 class="fs-1 text-center text-lg-end">01.- CONCEPTO</h2>
                    </div>
                    <div class="col-12 col-lg-5 fs-5">
                        <p>
                            <?php echo rwmb_meta('concept'); ?>
                        </p>
                    </div>
                </div>
            </div>

            <img src="<?php echo $imagesFull[2]['url']; ?>" alt="<?php echo $imagesFull[2]['title']; ?>" class="w-100">

            <div class="container mt-5">
                <div class="row justify-content-evenly mb-5">
                    <div class="col-12 col-lg-5">
                        <h2 class="fs-1 text-center text-lg-end">02.- DESARROLLO</h2>
                    </div>
                    <div class="col-12 col-lg-5 fs-5">
                        <p>
                            <?php echo rwmb_meta('development'); ?>
                        </p>
                    </div>
                </div>
            </div>

            <img src="<?php echo $imagesFull[3]['url']; ?>" alt="<?php echo $imagesFull[3]['title']; ?>" class="w-100 mb-6">

            <div class="text-center mb-6">
                <h3 class="text-uppercase fs-2">Conoce el sitio</h3>
                <a href="<?php echo rwmb_meta('link'); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline-light rounded-0 px-5">
                    Visitar <?php echo get_the_title(); ?>
                </a>
            </div>

            <h4 class="fs-2 text-uppercase text-center mb-5">Conoce más de nuestro trabajo</h4>
            <div class="row align-items-center justify-content-center mb-5">

                <div class="col-12 col-lg-3 mb-5 text-center">
                    <a href="<?php echo get_post_type_archive_link( 'website' );?>" class="portafolio d-block text-decoration-none">
                        <img src="<?php echo get_template_directory_uri() .'/assets/images/web-design.jpeg';?> " alt="Diseño web">
                        <div class="overlay">
                            <h4 class="text">Diseño Web</h4>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-lg-3 mb-5 text-center">
                    <a href="#" class="portafolio d-block text-decoration-none">
                        <img src="<?php echo get_template_directory_uri() .'/assets/images/imagen-corp.jpeg';?> " alt="Imagen Corporativa">
                        <div class="overlay">
                            <h4 class="text">Imagen Corporativa</h4>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-lg-3 mb-5 text-center">
                    <a href="#" class="portafolio d-block text-decoration-none">
                        <img src="<?php echo get_template_directory_uri() .'/assets/images/fotoyvideo.jpg';?> " alt="Fotografía y video">
                        <div class="overlay">
                            <h4 class="text">Fotografía y video</h4>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-lg-3 mb-5 text-center">
                    <a href="#" class="portafolio d-block text-decoration-none">
                        <img src="<?php echo get_template_directory_uri() .'/assets/images/social-media.jpeg';?> " alt="Manejo de Redes sociales">
                        <div class="overlay">
                            <h4 class="text">Redes Sociales</h4>
                        </div>
                    </a>
                </div>
            
            </div>


        <?php endwhile;?>
    </article>
<?php endif;?>


<?php get_footer();?>