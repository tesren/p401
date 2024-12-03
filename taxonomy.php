<?php get_header();?>

<?php if( have_posts() ):?>

    <div class="bg-gradiant position-relative" style="padding-top:155px;">
        <h1 class="fs-0 text-center text-uppercase mb-4" style="font-weight:200;">
            <div class="ms-2" style="margin-right:120px;">Categoría</div>
            <div style="margin-left:120px;">
                <?php $term = get_term_by('slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); echo $term->name; ?>
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

            <?php 
                $logoArray = rwmb_meta('logo', ['size'=>'full', 'limit'=>1]);
                $postType = get_post_type_object(get_post_type());
            ?>

            <?php if( $postType->labels->singular_name == 'Video' ): ?>

                <div class="col-12 col-lg-3 mb-4 position-relative p-0 mx-2 shadow-3 rounded-4 align-self-center">

                    <a href="<?php echo get_the_permalink();?>" class="w-100 h-100 text-decoration-none">

                        <?php 
                            $portrait_id = rwmb_get_value('videos');
                            $portrait_id = substr($portrait_id, 17);
                        ?>

                        <img class="w-100 rounded-4" src="https://i.ytimg.com/vi/<?php echo $portrait_id; ?>/maxresdefault.jpg" alt="<?php echo get_the_title();?>" style=" object-fit:cover;">

                        <div class="row position-absolute top-0 start-0 h-100 w-100">
                            <div class="col-12 align-self-center text-center text-white">
                                <i class="fa-solid fa-2x fa-play"></i>
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
                
            <?php elseif(count($logoArray) == 1): ?>
                
                <div class="col-12 col-lg-3 mx-2 mb-4 px-0 position-relative archive-element">
                    <a href="<?php echo get_the_permalink();?>" class="w-100 h-100 text-decoration-none">
                        <div class="row justify-content-center position-absolute top-0 start-0 h-100 w-100" style="background-color:<?php echo rwmb_meta('background_color')?>;">
                            <div class="col-12 align-self-center">
                                <img class="w-100 px-5" src="<?php echo $logoArray[0]['url']; ?>" alt="<?php echo get_the_title();?>">
                            </div>
                        </div>
                        <div class="position-absolute bottom-0 start-0 text-center link-light w-100 mb-2" style="z-index:100;">
                            <a href="<?php echo get_post_type_archive_link( get_post_type( get_the_ID() ) );?>" class="badge bg-dark text-decoration-none">
                                <?php 
                                    if ($postType) {echo esc_html($postType->labels->singular_name);} 
                                ?>
                            </a>
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
                        <div class="position-absolute bottom-0 start-0 text-center w-100 mb-2" style="z-index:100;">
                            <a href="<?php echo get_post_type_archive_link( get_post_type( get_the_ID() ) );?>" class="badge bg-dark text-decoration-none">
                                <?php 
                                    $postType = get_post_type_object(get_post_type());
                                    if ($postType) {echo esc_html($postType->labels->singular_name);} 
                                ?>
                            </a>
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