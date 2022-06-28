<?php get_header();?>

<?php if( have_posts() ):?>
    <h1 class="mt-6 mb-5 text-center">Portafolio de Sitios Web</h1>
    <div class="row justify-content-center mb-5">
        <?php while( have_posts() ): the_post();?>

            <div class="col-12 col-lg-4">
                <a href="<?php echo get_the_permalink();?>" class="link-light text-decoration-none">
                    <?php the_post_thumbnail( 'large', ['class' => 'w-100 h-auto', 'alt' => get_the_title()] ) ?>
                    <h2 class="mt-2"><?php echo get_the_title();?></h2>
                </a>
            </div>

        <?php endwhile;?>
    </div>
<?php endif;?>


<?php get_footer();?>