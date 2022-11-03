<!-- PORTAFOLIO -->
<h4 style="margin-top:120px;" class="text-uppercase fw-light text-center py-5 fs-1">Otros Portafolios<img src="<?php echo get_template_directory_uri() .'/assets/images/decoration2.svg';?>" alt="" class="decoration2"></h4>


<div class="row align-items-center justify-content-center mb-5">

    <div class="col-11 col-lg-3 mb-5 px-0 mx-2 text-center position-relative">
        <img class="w-100" src="<?php echo get_template_directory_uri() .'/assets/images/website.jpg';?> " alt="Imagen Corporativa">
        <div class="overlay"></div>
        <div class="row justify-content-center position-absolute w-100 h-100 start-0 top-0" style="z-index:10;">
            <div class="col-12 align-self-center">
                <h5 class="fs-2">Sitios Web</h5>
                <a href="<?php echo get_post_type_archive_link( 'website' );?>" class="btn btn-outline-light rounded-0">Ver más</a>
            </div>
        </div>
    </div>

    <div class="col-11 col-lg-3 mb-5 px-0 mx-2 text-center position-relative">
        <img class="w-100" src="<?php echo get_template_directory_uri() .'/assets/images/foto.jpg';?> " alt="Imagen Corporativa">
        <div class="overlay"></div>
        <div class="row justify-content-center position-absolute w-100 h-100 start-0 top-0" style="z-index:10;">
            <div class="col-12 align-self-center">
                <h5 class="fs-2">Fotografía</h5>
                <a href="<?php echo get_post_type_archive_link( 'photos' );?>" class="btn btn-outline-light rounded-0 px-4">Ver más</a>
            </div>
        </div>
    </div>

    <div class="col-11 col-lg-3 mb-5 px-0 mx-2 text-center position-relative">
        <img class="w-100" src="<?php echo get_template_directory_uri() .'/assets/images/video.jpg';?> " alt="Imagen Corporativa">
        <div class="overlay"></div>
        <div class="row justify-content-center position-absolute w-100 h-100 start-0 top-0" style="z-index:10;">
            <div class="col-12 align-self-center">
                <h5 class="fs-2">Video</h5>
                <a href="<?php echo get_post_type_archive_link( 'video' );?>" class="btn btn-outline-light rounded-0 px-4">Ver más</a>
            </div>
        </div>
    </div>

    <div class="col-11 col-lg-3 mb-5 px-0 mx-2 text-center position-relative">
        <img class="w-100" src="<?php echo get_template_directory_uri() .'/assets/images/design.jpg';?> " alt="Imagen Corporativa">
        <div class="overlay"></div>
        <div class="row justify-content-center position-absolute w-100 h-100 start-0 top-0" style="z-index:10;">
            <div class="col-12 align-self-center">
                <h5 class="fs-2">Diseño gráfico</h5>
                <a href="<?php echo get_post_type_archive_link( 'design' );?>" class="btn btn-outline-light rounded-0 px-4">Ver más</a>
            </div>
        </div>
    </div>

    <div class="col-11 col-lg-3 mb-5 px-0 mx-1 text-center position-relative">
        <img class="w-100" src="<?php echo get_template_directory_uri() .'/assets/images/marketing.jpg';?> " alt="Imagen Corporativa">
        <div class="overlay"></div>
        <div class="row justify-content-center position-absolute w-100 h-100 start-0 top-0" style="z-index:10;">
            <div class="col-12 align-self-center">
                <h5 class="fs-2">Redes Sociales</h5>
                <a href="<?php echo get_post_type_archive_link( 'social' );?>" class="btn btn-outline-light rounded-0 px-4">Ver más</a>
            </div>
        </div>
    </div>
    
</div> 