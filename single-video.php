<?php get_header();?>

<?php if( have_posts() ):?>
    <article>
        <?php while( have_posts() ): the_post();?>

            <?php 
                $videos = get_posts(array(
                    'post_type' => 'video',
                    'numberposts' => 4,
                    'exclude'=> get_the_ID(),
                ));
                $horizontal_videos = rwmb_meta('horizontal_videos', ['size'=>'full', 'limit'=>14]);
                $vertical_videos = rwmb_meta('vertical_videos', ['size'=>'medium', 'limit'=>4]); 
            ?>

            <div class="position-relative">
                <div class="fondo-oscuro" style="background-color: rgba(0, 0, 0, 0.5);"></div>
                <video class="w-100 d-block" src="<?php echo $horizontal_videos[0]['src']; ?>" autoplay muted loop style="height:100vh; object-fit:cover;"></video>
                <div class="row justify-content-center position-absolute top-0 start-0 w-100 h-100">
                    <div class="col-12 text-center align-self-center">
                        <h1 class="fs-0 fw-light text-uppercase">Video</h1>
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
                    </div>
                </div>

                <div style="height: 100px; overflow: hidden;" >
                    <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C194.13,200.81 299.09,-104.11 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #1a1a1a;"></path>
                    </svg>
                </div>
            </div>

            <div class="container mt-5">

                <div class="row w-100">
                    
                    <?php foreach ( $horizontal_videos as $video ) : ?>
                        <div class="col-12 px-0 pb-3 mb-5">
                            <video class="w-100 d-block" src="<?php echo $video['src']; ?>" controls></video>
                            <p class="fs-5 fw-light mt-3"><?php echo $video['description']; ?></p>
                        </div>
                    <?php endforeach ?>

                </div>

                <h3 class="fs-1 text-center my-5 fw-light text-uppercase">Redes Sociales</h3>

                <div class="row justify-content-center w-100 mb-3 mb-lg-0" >
                    
                    <?php foreach ( $vertical_videos as $video ) : ?>
                        <div class="col-12 col-lg-4 pb-3 mb-5">
                            <video class="w-100 d-block" src="<?php echo $video['src']; ?>" controls></video>
                            <p class="fs-5 fw-light mt-3"><?php echo $video['description']; ?></p>
                        </div>
                    <?php endforeach ?>
                    
                </div>

                
            </div>
            

            <h4 class="fs-1 fw-light text-uppercase text-center my-5 pt-5">Otros portafolios de Video</h4>
            <div class="row justify-content-center mb-5" >
                <?php foreach($videos as $video):?>

                    <div class="col-12 col-lg-3 mx-2 mb-4 position-relative archive-element">
                        <a href="<?php echo get_the_permalink($video->ID);?>" class="w-100 h-100 text-decoration-none">
                            <?php $logoArray = rwmb_meta('logo', ['size'=>'full', 'limit'=>1], $video->ID) ?>

                            <div class="row justify-content-center position-absolute top-0 start-0 h-100 w-100" style="background-color:<?php echo $video->background_color; ?>;">
                                <div class="col-12 align-self-center">
                                    <img class="w-100 px-5" src="<?php echo $logoArray[0]['url']; ?>" alt="<?php echo get_the_title($video->ID);?>">
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