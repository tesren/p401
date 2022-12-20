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
                $youtube_videos = rwmb_meta('videos');
            ?>

            <div class="position-relative">
                <div class="fondo-oscuro" style="background-color: rgba(0, 0, 0, 0.5);"></div>

                <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large'); ?>" alt="<?php echo get_the_title(); ?>" class="w-100">

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

            <div class="container mt-5">
                <h3 class="fs-1 text-center my-5 fw-light text-uppercase">Videos</h3>

                <div class="row w-100 justify-content-center">
                
                    <div class="col-12 col-lg-8" id="col-videos">
                        <?php echo $youtube_videos; ?>
                    </div>        

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