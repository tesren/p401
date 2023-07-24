<?php get_header(); ?>

<?php if( have_posts() ):?>

    <div class="position-relative pt-5 bg-gradiant">
        <h1 style="margin-top:120px;" class="fw-light fs-0 text-center text-uppercase mb-5">
            Nuestro Blog<img src="<?php echo get_template_directory_uri() .'/assets/images/decoration2.svg';?>" alt="" class="decoration2">
        </h1>

        <div style="height: 100px; overflow: hidden;" >
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C194.13,200.81 299.09,-104.11 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #1a1a1a;"></path>
            </svg>
        </div>
    </div>


    <div class="container">
        <div class="row align-items-center justify-content-center mb-5">

            <?php while( have_posts() ): the_post(); ?>

                <div class="col-12 col-lg-4 mb-4">
                    <div class="card w-100">
                        <a href="<?php echo get_the_permalink(); ?>" class="text-decoration-none">
                            <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), $size = 'large' );?>" class="w-100" alt="<?php echo get_the_title(); ?>" style="height:380px; object-fit:cover;">
                        </a>
                        <div class="card-body p-3">
                            <div class="text-secondary mb-3 fw-bold"><?php echo get_the_date(); ?></div>
                            <h2 class="card-title fs-5 fw-bold text-uppercase"><?php echo get_the_title(); ?></h2>
                            <p class="card-text fs-6 fw-light" style="color:#444444;"><?php echo get_the_excerpt(); ?></p>
                            <a href="<?php echo get_the_permalink(); ?>" class="link-secondary d-block mb-4">Ver más</a>

                            <?php $categories = get_the_category(); ?>
                            <?php foreach($categories as $cat): ?>
                                <span class="text-secondary fw-bold"><?php echo $cat->name; ?> | </span>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>

            <?php endwhile;?>
            
        </div> 
    </div>
    


<?php endif;?>

<?php get_footer();?>