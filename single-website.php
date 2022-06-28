<?php get_header();?>

<?php if( have_posts() ):?>
    <article class="container">
        <?php while( have_posts() ): the_post();?>

            <?php $images = rwmb_meta('images', ['size'=>'full', 'limit'=>3]); ?>
            <h1 class="fs-1 text-uppercase mt-6">
                <div>Portafolio</div>
                <img width="450px" src="<?php echo $images[0]['url']; ?>" alt="<?php echo get_the_title(); ?>"> <?php echo get_the_title(); ?>
                <div>Sitio Web<img src="<?php echo get_template_directory_uri() .'/assets/images/decoration2.svg';?>" alt="" class="decoration2"></div>
            </h1>

        <?php endwhile;?>
    </article>
<?php endif;?>


<?php get_footer();?>