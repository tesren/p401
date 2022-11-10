<?php get_header();?>

<?php if( have_posts() ):?>

    <div class="bg-gradiant position-relative" style="padding-top:155px;">
        <h1 class="fs-0 text-center text-uppercase mb-4" style="font-weight:200;">
            <div class="ms-2" style="margin-right:120px;">PORTAFOLIO</div>
            <div style="margin-left:120px;">
                DE <?php echo post_type_archive_title( '', false ) ; ?>
                <img width="20px" src="<?php echo get_template_directory_uri() .'/assets/images/text-decoration.svg';?>" alt="">
            </div>
        </h1>

        <div style="height: 100px; overflow: hidden;" >
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C194.13,200.81 299.09,-104.11 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #1a1a1a;"></path>
            </svg>
        </div>

    </div>
    


    <div class="row justify-content-center mb-5" >
        <?php while( have_posts() ): the_post();?>

            <?php $logoArray = rwmb_meta('logo', ['size'=>'full', 'limit'=>1]) ?>
                
            <?php if(count($logoArray) == 1): ?>
                
                <div class="col-12 col-lg-3 mx-2 mb-4 px-0 position-relative archive-element">
                    <a href="<?php echo get_the_permalink();?>" class="w-100 h-100 text-decoration-none">
                        <div class="row justify-content-center position-absolute top-0 start-0 h-100 w-100" style="background-color:<?php echo rwmb_meta('background_color')?>;">
                            <div class="col-12 align-self-center">
                                <img class="w-100 px-5" src="<?php echo $logoArray[0]['url']; ?>" alt="<?php echo get_the_title();?>">
                            </div>
                        </div>
                        <div class="position-absolute bottom-0 start-0 text-center link-light w-100" style="z-index:100;">
                            <?php echo p401_get_photo_category(get_the_ID(), 'category-photos'); ?>
                        </div>
                    </a>
                </div>

            <?php else: ?>
                <div class="col-12 col-lg-3 mx-2 mb-4 position-relative px-0 thumbnail-element">
                    <a href="<?php echo get_the_permalink();?>" class="w-100 h-100 text-decoration-none">
                        <?php $images = rwmb_meta('images', ['size'=>'full', 'limit'=>14]);?>
                        <img class="w-100" src="<?php echo $images[0]['url']; ?>" alt="<?php echo get_the_title();?>" style="height:650px; object-fit:cover;">
                        <div class="row justify-content-center position-absolute top-0 start-0 h-100 w-100" style="z-index:100;">
                            <div class="col-12 align-self-center text-center">
                                <h2 class="link-light fs-1 text-uppercase"><?php echo get_the_title();?></h2>
                            </div>
                        </div>
                        <div class="dark-overlay"></div>
                        <div class="position-absolute bottom-0 start-0 text-center link-light w-100" style="z-index:100;">
                            <?php echo p401_get_photo_category(get_the_ID(), 'category-photos'); ?>
                        </div>
                    </a>
                </div>

            <?php endif; ?>

                
        <?php endwhile;?>
    </div>

<?php else:?>
    <div class="bg-gradiant position-relative" style="padding-top:155px;">
        <h1 class="fs-1 text-center text-uppercase mb-4" style="font-weight:200;">
            Por el momento no hay nada, regresa mas tarde!
        </h1>

        <div style="height: 100px; overflow: hidden;" >
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C194.13,200.81 299.09,-104.11 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #1a1a1a;"></path>
            </svg>
        </div>

    </div>
<?php endif;?>


<?php get_footer();?>