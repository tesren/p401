<?php get_header();?>

<?php if( have_posts() ):?>
    <article>
        <?php while( have_posts() ): the_post();?>

            <?php 
                $websites = get_posts(array(
                    'post_type' => 'website',
                    'numberposts' => 4,
                    'exclude'=> get_the_ID(),
                ));
                $imagesFull = rwmb_meta('images', ['size'=>'full', 'limit'=>8]);
                //$imagesMed = rwmb_meta('images', ['size'=>'medium', 'limit'=>4]); 
            ?>

            <div class="position-relative">
                <div class="fondo-oscuro"></div>
                <img src="<?php echo $imagesFull[0]['url']; ?>" alt="<?php echo the_title(); ?>" class="w-100">
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
                    <div class="col-12 col-lg-6 align-self-center text-center">
                        <img class="w-50 mx-auto px-5" src="<?php echo $logoArray[0]['url']; ?>" alt="<?php echo get_the_title();?>">
                    </div>
                    <div class="col-12 col-lg-6">
                        <h2 class="text-uppercase">Información del proyecto</h2>
                        <div class="fw-light"><?php echo the_content(); ?></div>
                        <div>Año: <?php echo rwmb_meta('year'); ?></div>
                    </div>
                </div>

                <div style="height: 100px; overflow: hidden;" >
                    <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C194.13,200.81 299.09,-104.11 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #1a1a1a;"></path>
                    </svg>
                </div>
            </div>

            <h3 class="fs-1 text-uppercase text-center fw-light my-5">Date a conocer en el <br> mundo digital</h3>

            <div>
                <div class="row w-100">
                    <div class="col-12 px-0">
                        <img src="<?php echo $imagesFull[1]['url']; ?>" alt="<?php echo $imagesFull[1]['title']; ?>" class="w-100">
                    </div>
                    
                    <div class="col-12 col-lg-8 px-0">
                        <img src="<?php echo $imagesFull[2]['url']; ?>" alt="<?php echo $imagesFull[2]['title']; ?>" class="w-100" style="height:500px; object-fit:cover;">
                    </div>

                    <div class="col-12 col-lg-4 px-0">
                        <img src="<?php echo $imagesFull[3]['url']; ?>" alt="<?php echo $imagesFull[3]['title']; ?>" class="w-100" style="height:500px; object-fit:cover;">
                    </div>

                    <div class="col-12 px-0">
                        <img src="<?php echo $imagesFull[4]['url']; ?>" alt="<?php echo $imagesFull[4]['title']; ?>" class="w-100">
                    </div>

                </div>

                <div class="row w-100" style="background:#9A9899;">
                    <div class="col-12 col-lg-7 px-0">
                        <img src="<?php echo $imagesFull[5]['url']; ?>" alt="<?php echo $imagesFull[5]['title']; ?>" class="w-100" style="height:600px; object-fit:cover;">
                    </div>

                    <div class="col-12 col-lg-5 px-0 text-center" >
                        <img src="<?php echo $imagesFull[6]['url']; ?>" alt="<?php echo $imagesFull[6]['title']; ?>" class="w-100 mb-4">
                        <h3 class="fs-1 fw-light text-uppercase">Visita el sitio web</h3>
                        <a href="<?php echo rwmb_meta('link'); ?>" class="btn btn-outline-light rounded-0 mb-5" target="_blank" rel="noopener noreferrer">Visitar</a>
                    </div>

                </div>

                <div class="row w-100">
                    <div class="col-12 px-0">
                        <img src="<?php echo $imagesFull[7]['url']; ?>" alt="<?php echo $imagesFull[7]['title']; ?>" class="w-100">
                    </div>
                </div>
            </div>
            

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
<?php endif;?>




<?php get_footer();?>