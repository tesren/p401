<?php get_header();?>

<?php if( have_posts() ):?>
    <article>
        <?php while( have_posts() ): the_post();?>

            <?php 
                $photos = get_posts(array(
                    'post_type' => 'photos',
                    'numberposts' => 4,
                    'exclude'=> get_the_ID(),
                ));
                $imagesFull = rwmb_meta('images', ['size'=>'full', 'limit'=>14]);
                //$imagesMed = rwmb_meta('images', ['size'=>'medium', 'limit'=>4]); 
            ?>

            <div class="position-relative">
                <div class="fondo-oscuro"></div>
                <img src="<?php echo $imagesFull[0]['url']; ?>" alt="<?php echo the_title(); ?>" class="w-100" style="height:97vh; object-fit:cover;">
                <div class="row justify-content-center position-absolute top-0 start-0 w-100 h-100">
                    <div class="col-12 text-center align-self-center">
                        <h1 class="fs-0 fw-light text-uppercase">Fotografía</h1>
                        <hr class="text-white col-8 col-lg-4 mx-auto" style=" opacity:1;">
                        <h2 class="fs-0 fw-light text-uppercase"><?php echo get_the_title(); ?></h2>
                    </div>    
                </div>
            </div>

            <div class="bg-gradiant pt-5">
                <?php $logoArray = rwmb_meta('logo', ['size'=>'full', 'limit'=>1]) ?>

                <div class="row w-100 mb-5">
                    <?php if(count($logoArray) > 0): ?>
                        <div class="col-12 col-lg-6 align-self-center text-center mb-5 mb-lg-0">
                            <img class="col-10 col-lg-6 mx-auto px-0 px-lg-5" src="<?php echo $logoArray[0]['url']; ?>" alt="<?php echo get_the_title();?>" >
                        </div>
                    <?php endif; ?>

                    <div class="col-12 col-lg-6 px-3 px-lg-5">
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

            <h3 class="fs-1 text-uppercase text-center fw-light my-5">Creamos los recursos visuales ideales para ti.</h3>

            <div class="container">
                <div class="row w-100">

                    <?php foreach($imagesFull as $img): ?>
                        <div class="col-6 col-lg-4 col-xl-3 p-2">
                            <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['title']; ?>" class="w-100 rounded-2" data-fancybox="gallery" style="height:300px; object-fit:cover;">
                        </div>
                    <?php endforeach; ?>

                </div>

            </div>
            

            <h4 class="fs-1 fw-light text-uppercase text-center my-5 pt-5">Otros portafolios de fotografía</h4>
            <div class="row justify-content-center mb-5" >
                <?php foreach($photos as $photo):?>
                    <?php $logoArray = rwmb_meta('logo', ['size'=>'full', 'limit'=>1], $photo->ID) ?>

                    <?php if(count($logoArray) == 1): ?>
                
                        <div class="col-12 col-lg-3 mx-2 mb-4 px-0 position-relative archive-element">
                            <a href="<?php echo get_the_permalink($photo->ID);?>" class="w-100 h-100 text-decoration-none">
                                <div class="row justify-content-center position-absolute top-0 start-0 h-100 w-100" style="background-color:<?php echo rwmb_meta('background_color', [], $photo->ID)?>;">
                                    <div class="col-12 align-self-center">
                                        <img class="w-100 px-5" src="<?php echo $logoArray[0]['url']; ?>" alt="<?php echo get_the_title($photo->ID);?>">
                                    </div>
                                </div>
                                <div class="position-absolute bottom-0 start-0 text-center link-light w-100" style="z-index:100;">
                                    <?php echo p401_get_photo_category($photo->ID, 'category-p401'); ?>
                                </div>
                            </a>
                        </div>

                    <?php else: ?>
                        <div class="col-12 col-lg-3 mx-2 mb-4 position-relative px-0 thumbnail-element">
                            <a href="<?php echo get_the_permalink($photo->ID);?>" class="w-100 h-100 text-decoration-none">
                                <?php $images = rwmb_meta('images', ['size'=>'full', 'limit'=>14], $photo->ID);?>

                                <img class="w-100" src="<?php echo $images[0]['url']; ?>" alt="<?php echo get_the_title($photo->ID);?>" style="height:650px; object-fit:cover;">
                                <div class="row justify-content-center position-absolute top-0 start-0 h-100 w-100" style="z-index:100;">
                                    <div class="col-12 align-self-center text-center">
                                        <h2 class="link-light fs-1 text-uppercase"><?php echo get_the_title($photo->ID);?></h2>
                                    </div>
                                </div>

                                <div class="dark-overlay"></div>
                                <div class="position-absolute bottom-0 start-0 text-center link-light w-100" style="z-index:100;">
                                    <?php echo p401_get_photo_category($photo->ID, 'category-p401'); ?>
                                </div>
                            </a>
                        </div>

                    <?php endif; ?>

                <?php endforeach;?>
            </div>

        <?php endwhile;?>
    </article>

    <?php get_template_part( 'partials/content', 'portfolio-nav' ); ?>

<?php endif;?>




<?php get_footer();?>