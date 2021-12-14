<div class="example-blog">
    <div class="title401 text-center mt-5 pb-5"><?php the_title(); ?><img src="<?php echo get_template_directory_uri() .'/assets/images/decoration2.svg';?>" alt="text decoration" class="decoration2"></div>
    <div>
        <?php
        the_excerpt();
    ?>
    </div>
</div>
