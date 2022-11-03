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

            <div class="col-12 col-lg-3 mx-2 mb-4 position-relative archive-element">
                <a href="<?php echo get_the_permalink();?>" class="w-100 h-100 text-decoration-none">
                    <?php $logoArray = rwmb_meta('logo', ['size'=>'full', 'limit'=>1]) ?>

                    <div class="row justify-content-center position-absolute top-0 start-0 h-100 w-100" style="background-color:<?php echo rwmb_meta('background_color')?>;">
                        <div class="col-12 align-self-center">
                            <img class="w-100 px-5" src="<?php echo $logoArray[0]['url']; ?>" alt="<?php echo get_the_title();?>">
                        </div>
                    </div>

                </a>
            </div>

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