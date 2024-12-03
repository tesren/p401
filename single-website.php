<?php get_header();?>

<?php if( have_posts() ):?>
    <article>
        <?php while( have_posts() ): the_post();?>

            <?php 
                $websites = get_posts(array(
                    'post_type' => 'website',
                    'numberposts' => 3,
                    'exclude'=> get_the_ID(),
                ));
                $imagesFull = rwmb_meta('images', ['size'=>'full', 'limit'=>8]);
                //$imagesMed = rwmb_meta('images', ['size'=>'medium', 'limit'=>4]); 
            ?>

            <div class="position-relative">
                <div class="fondo-oscuro"></div>
                <img src="<?php echo $imagesFull[0]['url']; ?>" alt="<?php echo the_title(); ?>" class="w-100" style="height:97vh; object-fit:cover;">
                <div class="row justify-content-center position-absolute top-0 start-0 w-100 h-100">
                    <div class="col-12 text-center align-self-center">
                        <h1 class="fs-0 fw-light">SITIO WEB</h1>
                        <hr class="text-white col-8 col-lg-4 mx-auto" style=" opacity:1;">
                        <h2 class="fs-0 fw-light text-uppercase"><?php echo get_the_title(); ?></h2>
                    </div>    
                </div>
            </div>

            <div class="bg-gradiant pt-5">
                <?php $logoArray = rwmb_meta('logo', ['size'=>'full', 'limit'=>1]) ?>

                <div class="row w-100 mb-5">
                    <div class="col-12 col-lg-6 align-self-center text-center mb-5 mb-lg-0">
                        <img class="col-10 col-lg-6 mx-auto px-0 px-lg-5" src="<?php echo $logoArray[0]['url']; ?>" alt="<?php echo get_the_title();?>">
                    </div>
                    <div class="col-12 col-lg-6">
                        <h2 class="text-uppercase">Información del proyecto</h2>
                        <div class="fw-light"><?php echo the_content(); ?></div>
                        <div>Año: <?php echo rwmb_meta('year'); ?></div>
                        <div>
                            Categorías: 
                            <?php $terms = get_the_terms( get_the_ID(), 'category-p401'); ?>
                            <?php foreach($terms as $term): ?>
                                <a href="<?php echo get_term_link( $term->term_id , 'category-p401' ) ?>" class="link-light me-1">
                                    <?php echo $term->name; ?>
                                </a> | 
                            <?php endforeach; ?> 
                        </div>
                    </div>
                </div>

                <div style="height: 100px; overflow: hidden;" >
                    <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C194.13,200.81 299.09,-104.11 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #1a1a1a;"></path>
                    </svg>
                </div>
            </div>

            <h3 class="fs-1 text-uppercase text-center fw-light my-5">Date a conocer en el <br> mundo digital</h3>

            <div class="container">
                <div class="row w-100">
                    <div class="col-12 px-0 pb-3">
                        <img src="<?php echo $imagesFull[1]['url']; ?>" alt="<?php echo $imagesFull[1]['title']; ?>" class="w-100">
                    </div>
                    
                    <div class="col-12 col-lg-8 ps-0 pe-0 pe-lg-3 pb-3">
                        <img src="<?php echo $imagesFull[2]['url']; ?>" alt="<?php echo $imagesFull[2]['title']; ?>" class="w-100 folio-img">
                    </div>

                    <div class="col-12 col-lg-4 px-0 pb-3">
                        <img src="<?php echo $imagesFull[3]['url']; ?>" alt="<?php echo $imagesFull[3]['title']; ?>" class="w-100 folio-img">
                    </div>

                    <div class="col-12 px-0 pb-3">
                        <img src="<?php echo $imagesFull[4]['url']; ?>" alt="<?php echo $imagesFull[4]['title']; ?>" class="w-100">
                    </div>

                </div>

                <div class="row w-100 mb-3" style="background:#9A9899;">
                    <div class="col-12 col-lg-7 px-0">
                        <img src="<?php echo $imagesFull[5]['url']; ?>" alt="<?php echo $imagesFull[5]['title']; ?>" class="w-100">
                    </div>

                    <div class="col-12 col-lg-5 px-0 text-center" >
                        <img src="<?php echo $imagesFull[6]['url']; ?>" alt="<?php echo $imagesFull[6]['title']; ?>" class="w-100 mb-4">
                        <h3 class="fs-1 fw-light text-uppercase">Visita el sitio web</h3>
                        <a href="<?php echo rwmb_meta('link'); ?>" class="btn btn-outline-light rounded-0 mb-5" target="_blank" rel="noopener noreferrer">Visitar</a>
                    </div>

                </div>

                <?php if(isset($imagesFull[7]['url'])): ?>
                    <div class="row w-100">
                        <div class="col-12 px-0">
                            <img src="<?php echo $imagesFull[7]['url']; ?>" alt="<?php echo $imagesFull[7]['title']; ?>" class="w-100">
                        </div>
                    </div>
                <?php endif; ?>

            </div>
            
            <?php if(rwmb_meta('facebook_url') or rwmb_meta('instagram_url') or rwmb_meta('link')): ?>
                <h4 class="fs-1 fw-light text-uppercase text-center mt-5 pt-5 mb-4">Redes del cliente</h4>
                <div class="row justify-content-center text-center">

                        <?php if(rwmb_meta('facebook_url')): ?>
                            <div class="col-4 col-lg-1">
                                <a href="<?php echo rwmb_meta('facebook_url'); ?>" target="_blank" class="link-light" rel="noopener noreferrer" aria-label="Facebook">
                                    <i class="fa-brands fa-4x fa-facebook" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Facebook"></i>
                                </a>
                            </div>
                        <?php endif; ?>

                        <?php if(rwmb_meta('instagram_url')): ?>
                            <div class="col-4 col-lg-1">
                                <a href="<?php echo rwmb_meta('instagram_url'); ?>" target="_blank" class="link-light" rel="noopener noreferrer" aria-label="Instagram">
                                    <i class="fa-brands fa-4x fa-instagram" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Instagram"></i>
                                </a>
                            </div>
                        <?php endif; ?>

                        <?php if(rwmb_meta('link')): ?>
                            <div class="col-4 col-lg-1">
                                <a href="<?php echo rwmb_meta('link'); ?>" target="_blank" class="link-light" rel="noopener noreferrer" aria-label="Sitio Web">
                                    <i class="fa-solid fa-4x fa-globe" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Sitio web"></i>
                                </a>
                            </div>
                        <?php endif; ?>

                </div>
            <?php endif; ?>

            <h4 class="fs-1 fw-light text-uppercase text-center my-5 pt-5">Otros sitios web</h4>
            <div class="row justify-content-center mb-5" >
                <?php foreach($websites as $web):?>

                    <div class="col-12 col-lg-3 mx-2 mb-4 position-relative archive-element">
                        <a href="<?php echo get_the_permalink($web->ID);?>" class="w-100 h-100 text-decoration-none">
                            <?php $logoArray = rwmb_meta('logo', ['size'=>'full', 'limit'=>1], $web->ID) ?>

                            <div class="row justify-content-center position-absolute top-0 start-0 h-100 w-100" style="background-color:<?php echo $web->background_color; ?>;">
                                <div class="col-12 align-self-center">
                                    <img class="w-100 px-5" src="<?php echo $logoArray[0]['url']; ?>" alt="<?php echo get_the_title($web->ID);?>">
                                </div>
                            </div>

                        </a>
                    </div>

                <?php endforeach;?>
            </div>

        <?php endwhile;?>
    </article>

    <?php get_template_part( 'partials/content', 'portfolio-nav' ); ?>

<?php endif;?>




<?php get_footer();?>