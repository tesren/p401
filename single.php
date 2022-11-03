<?php get_header();?>

<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post();?>
        <?php $categories = get_the_category(); ?>
                       
        <div class="container" style="margin-top:140px;">

            <div class="my-4 d-flex">
                <?php foreach($categories as $cat): ?>
                    <div class="badge bg-danger fs-6 fw-light rounded-pill me-3"><?php echo $cat->name; ?></div>
                <?php endforeach; ?>
                
                <div class="me-3 align-self-center"><?php echo get_the_date(); ?></div>
                <div class="align-self-center"><?php echo get_the_author(); ?></div>
            </div>

            <h1 class="fs-0 text-uppercase fw-light"><?php echo get_the_title();?></h1>

            <div class="col-12 fs-4 align-self-center text-center text-lg-start mb-4">

                <input class="d-none" type="text" value="<?php echo get_the_permalink();?>" id="current_link">
                <button id="copiar-btn" onclick="copyLink()" type="button" class="btn p-0 me-3 text-white" title="Copiar enlace" aria-label="Copiar enlace" data-bs-toggle="tooltip" data-bs-placement="top">
                    <i id="copy-btn" class="fa-solid fs-4 fa-link"></i>
                </button>

                <a id="share_wp" href="https://api.whatsapp.com/send?text=<?php echo get_the_permalink();?>" class="link-light me-3 text-decoration-none" title="Share on Whatsapp" aria-label="Share on Whatsapp" target="_blank" rel="noopener noreferrer" data-bs-toggle="tooltip" data-bs-placement="top">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>

                <a id="share_tw" href="https://twitter.com/intent/tweet?text=<?php echo the_title();?>&url=<?php echo get_the_permalink();?>" class="link-light text-decoration-none me-3" title="Share on Twitter" aria-label="Share on Twitter" target="_blank" rel="noopener noreferrer" data-bs-toggle="tooltip" data-bs-placement="top">
                    <i class="fab fa-twitter"></i>
                </a>

                <a id="share_fb" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink();?>" class="link-light text-decoration-none" title="Share on Facebook" aria-label="Share on Facebook" target="_blank" rel="noopener noreferrer" data-bs-toggle="tooltip" data-bs-placement="top">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </div>

            <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' )?>" alt="<?php echo get_the_title();?>" class="w-100 mb-5">

            <div class="mb-5">
                <?php echo the_content(); ?>
            </div>

        </div>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer();?>