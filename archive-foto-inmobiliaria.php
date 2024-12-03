<?php get_header();?>

<?php if( have_posts() ):?>

    <div class="bg-gradiant position-relative" style="padding-top:155px;">

        <h1 class="fs-0 text-center text-uppercase mb-4" style="font-weight:200;">
            PORTAFOLIO <br> 
            DE <?php echo post_type_archive_title( '', false ) ; ?>
            <img width="20px" src="<?php echo get_template_directory_uri() .'/assets/images/text-decoration.svg';?>" alt="">
        </h1>

        <div style="height: 100px; overflow: hidden;" >
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C194.13,200.81 299.09,-104.11 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #1a1a1a;"></path>
            </svg>
        </div>

    </div>

    <!-- Por categoría -->
    <?php
        $categories = get_terms([
            'taxonomy'   => 'category-p401', // Taxonomía predeterminada de categorías
            'object_ids' => get_posts([
                'post_type'      => 'foto-inmobiliaria',
                'fields'         => 'ids',
                'posts_per_page' => -1,
            ]),
            'hide_empty' => true, // Excluir categorías vacías
        ]);

        $i = 0;
        $j = 0;
    ?>

    <h2 class="text-center fs-1 text-uppercase fw-light mb-4">Por categoría <img width="20px" class="ms-1" src="<?php echo get_template_directory_uri() .'/assets/images/text-decoration.svg';?>" alt=""></h2>

    <div class="container">
        <ul class="nav nav-pills mb-5 justify-content-center" id="pills-tab" role="tablist">
    
            <?php foreach($categories as $cat): ?>
                <li class="nav-item" role="presentation">
                    <button class="nav-link rounded-0 <?php if($i==0){echo 'active';}?> me-2 mb-2" id="pills-<?= $cat->term_id ?>-tab" data-bs-toggle="pill" data-bs-target="#pills-<?= $cat->term_id ?>" type="button" role="tab" aria-selected="true">
                        <?= $cat->name ?>
                    </button>
                </li>
                <?php $i++; ?>
            <?php endforeach; ?>
    
        </ul>
    </div>

    <div class="container tab-content mb-5" id="pills-tabContent">

        <?php foreach($categories as $cat): ?>

            <div class="tab-pane fade <?php if($j==0){echo 'active show'; } ?>" id="pills-<?= $cat->term_id ?>" role="tabpanel" aria-labelledby="pills-<?= $cat->term_id ?>-tab" tabindex="0">

                <?php
                    $posts = get_posts([
                        'post_type'      => 'foto-inmobiliaria',
                        'posts_per_page' => -1,
                        'tax_query'      => [
                            [
                                'taxonomy' => 'category-p401',
                                'field'    => 'term_id',
                                'terms'    => $cat->term_id,
                            ],
                        ],
                    ]);
                ?>

                <div class="row">
                    <?php foreach($posts as $post): ?>

                        <?php $imgs = rwmb_meta('images', ['size'=>'large'], $post->ID ); ?>

                            <?php foreach($imgs as $img): ?>
                                <div class="col-6 col-lg-4 col-xxl-3 p-1">
                                    <img src="<?= $img['url'] ?>" alt="<?= get_the_title( $post->ID ) ?>" class="w-100" style="height:280px; object-fit:cover;" data-fancybox="gallery-<?= $post->ID ?>" loading="lazy">
                                </div>
                            <?php endforeach; ?>

                    <?php endforeach; ?>
                </div>

            </div>

            <?php $j++; ?>
        <?php endforeach; ?>

    </div>

    <!-- Por propiedad -->
    <div class="row justify-content-center mb-5 pt-5" >

        <h2 class="text-center fs-1 text-uppercase fw-light mb-5">Por proyecto <img width="20px" class="ms-1" src="<?php echo get_template_directory_uri() .'/assets/images/text-decoration.svg';?>" alt=""></h2>

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
                        <div class="position-absolute bottom-0 start-0 text-center w-100 mb-2" style="z-index:100;">
                            <?php $terms = get_the_terms( get_the_ID(), 'category-p401'); ?>
                            <?php foreach($terms as $term): ?>
                                <a href="<?php echo get_term_link( $term->term_id , 'category-p401' ) ?>" class="badge bg-dark text-decoration-none">
                                    <?php echo $term->name; ?>
                                </a>
                            <?php endforeach; ?> 
                        </div>
                    </a>
                </div>

            <?php else: ?>
                <div class="col-12 col-lg-3 mx-2 mb-4 position-relative px-0 thumbnail-element">
                    <a href="<?php echo get_the_permalink();?>" class="w-100 h-100 text-decoration-none">
                        <?php $images = rwmb_meta('images', ['size'=>'medium_large', 'limit'=>14]);?>
                        <img class="w-100" src="<?php echo $images[0]['url']; ?>" alt="<?php echo get_the_title();?>" style="height:650px; object-fit:cover;">
                        <div class="row justify-content-center position-absolute top-0 start-0 h-100 w-100" style="z-index:100;">
                            <div class="col-12 align-self-center text-center">
                                <h2 class="link-light fs-1 text-uppercase"><?php echo get_the_title();?></h2>
                            </div>
                        </div>
                        <div class="dark-overlay"></div>
                        <div class="position-absolute bottom-0 start-0 text-center w-100 mb-2" style="z-index:100;">
                            <?php $terms = get_the_terms( get_the_ID(), 'category-p401'); ?>
                            <?php foreach($terms as $term): ?>
                                <a href="<?php echo get_term_link( $term->term_id , 'category-p401' ) ?>" class="badge bg-dark text-decoration-none">
                                    <?php echo $term->name; ?>
                                </a>
                            <?php endforeach; ?> 
                        </div>
                    </a>
                </div>

            <?php endif; ?>

                
        <?php endwhile;?>
        
        <?php the_posts_pagination( ); ?>

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