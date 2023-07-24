<?php get_header();?>

<?php if( have_posts() ):?>
    <article>
        <?php while( have_posts() ): the_post();?>

            <?php 
                $videos = get_posts(array(
                    'post_type' => 'video',
                    'numberposts' => 3,
                    'exclude'=> get_the_ID(),
                ));
                $youtube_videos = rwmb_meta('videos');

                $portrait_id = rwmb_get_value('videos');
                $portrait_id = substr($portrait_id, 17);
            ?>


            <div class="bg-gradiant mb-5" style="padding-top:150px;">
                <?php $logoArray = rwmb_meta('logo', ['size'=>'full', 'limit'=>1]) ?>

                <div class="row justify-content-evenly w-100 mb-5">


                    <div class="col-12 col-lg-4 align-self-center text-center mb-5 mb-lg-0">
                        <?php echo $youtube_videos;?>
                    </div>


                    <div class="col-12 col-lg-6">
                        <h1><?php echo get_the_title();?></h1>
                        <h2 class="text-uppercase fs-5">Información del proyecto</h2>
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

           

            <?php if(rwmb_meta('facebook_url') or rwmb_meta('instagram_url') or rwmb_meta('website_url')): ?>
                <h4 class="fs-1 fw-light text-uppercase text-center mt-5 pt-5 mb-4">Redes del cliente</h4>
                <div class="row justify-content-center text-center">

                        <?php if(rwmb_meta('facebook_url')): ?>
                            <div class="col-4 col-lg-1">
                                <a href="<?php echo rwmb_meta('facebook_url'); ?>" target="_blank" class="link-light" rel="noopener noreferrer" aria-label="Facebook">
                                    <i class="fa-brands fs-1 fa-facebook" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Facebook"></i>
                                </a>
                            </div>
                        <?php endif; ?>

                        <?php if(rwmb_meta('instagram_url')): ?>
                            <div class="col-4 col-lg-1">
                                <a href="<?php echo rwmb_meta('instagram_url'); ?>" target="_blank" class="link-light" rel="noopener noreferrer" aria-label="Instagram">
                                    <i class="fa-brands fs-1 fa-instagram" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Instagram"></i>
                                </a>
                            </div>
                        <?php endif; ?>

                        <?php if(rwmb_meta('website_url')): ?>
                            <div class="col-4 col-lg-1">
                                <a href="<?php echo rwmb_meta('website_url'); ?>" target="_blank" class="link-light" rel="noopener noreferrer" aria-label="Sitio Web">
                                    <i class="fa-solid fs-1 fa-globe" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Sitio web"></i>
                                </a>
                            </div>
                        <?php endif; ?>

                </div>
            <?php endif; ?>

            <h4 class="fs-1 fw-light text-uppercase text-center my-5 pt-5">Otros portafolios de Video</h4>
            <div class="row justify-content-center mb-5" >
                <?php foreach($videos as $video):?>

                    <div class="col-12 col-lg-3 mb-4 position-relative p-0 shadow-3 rounded-4 mx-2">

                        <a href="<?php echo get_the_permalink($video->ID);?>" class="w-100 h-100 text-decoration-none">

                            <?php 
                                $portrait_id = rwmb_get_value('videos', [], $video->ID);
                                $portrait_id = substr($portrait_id, 17);
                            ?>

                            <img class="w-100 rounded-4" src="https://i.ytimg.com/vi/<?php echo $portrait_id; ?>/maxresdefault.jpg" alt="<?php echo get_the_title($video->ID);?>" style=" object-fit:cover;">

                            <div class="row position-absolute top-0 start-0 h-100 w-100">
                                <div class="col-12 align-self-center text-center text-white">
                                    <i class="fa-solid fa-2x fa-play"></i>
                                </div>
                            </div>

                            <div class="position-absolute bottom-0 start-0 text-center w-100 mb-2" style="z-index:100;">
                                <?php $terms = get_the_terms( $video->ID, 'category-p401'); ?>
                                <?php foreach($terms as $term): ?>
                                    <a href="<?php echo get_term_link( $term->term_id , 'category-p401' ) ?>" class="badge bg-dark text-decoration-none">
                                        <?php echo $term->name; ?>
                                    </a>
                                <?php endforeach; ?> 
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