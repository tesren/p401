<?php
    get_header();
?>

<?php $hero = get_field('slider');?>
<div class="bg-gradiant">
    <section style="min-height:100vh;">

        <div class="content">

            <div id="carouselExampleSlidesOnly" class="carousel slide px-5 my-5 my-lg-0" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo get_template_directory_uri() .'/assets/images/laptop.webp';?>" alt="Laptop"/>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo get_template_directory_uri() .'/assets/images/camera.webp';?>" alt="Camara de Fotografía" loading="lazy"/>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo get_template_directory_uri() .'/assets/images/phone.webp';?>" alt="Smart Phone" loading="lazy"/>
                    </div>
                </div>
            </div>

            
            <div class="textBox">
                <h1><?php echo $hero ['titulo'];?>
                    <img src="<?php echo get_template_directory_uri() .'/assets/images/text-decoration.svg';?>" alt="">
                </h1>
                <p><?php echo $hero ['descripcion'];?></p>

                <?php if($hero['boton']):?>
                   
                    <a href="<?php echo $hero ['boton'];?>" class="btn btn-outline-light rounded-0 fs-3 px-5">
                        <?php echo $hero ['titulo_del_boton'];?>
                    </a>
                  
                <?php endif;?>

            </div>

        </div>

    </section>

    <!-- Generated by https://smooth.ie/blogs/news/svg-wavey-transitions-between-sections -->
    <div id="comencemos" style="height: 100px; overflow: hidden;" >
        <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
            <path d="M0.00,49.98 C194.13,200.81 299.09,-104.11 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #1a1a1a;"></path>
        </svg>
    </div>

</div>

<!-- CONFIAR EN NOSOTROS -->

<h2 class="title401 text-center mt-5 pb-5 px-4 px-lg-0">¿Por qué confiar en nosotros?<img src="<?php echo get_template_directory_uri() .'/assets/images/decoration2.svg';?>" alt="" class="decoration2"></h2>

<div class="bg-gradiant circulos circle-mobile-text">
<div style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 271.49,-49.98 500.00,49.98 L500.00,0.00 L0.00,0.00 Z" style="stroke: none; fill: #1a1a1a;"></path></svg></div>
    <div class="row">

        <div class="col-12 col-sm-6 col-xl-3 text-center">
            <div class="circle mb-4">
                <img src="<?php echo get_template_directory_uri() .'/assets/images/icon1.svg';?>" alt="Metodologia" class="icon">
            </div>
            <h2 class="circle-title text-center mb-3">Metodologia</h2>
            <p class="white-text">Atraemos a tu cliente potencial mediante la creación de contenido valioso y experiencias hechas a la medida.</p>
        </div>

        <div class="col-12 col-sm-6 col-xl-3 text-center">
            <div class="circle mb-4">
                <img src="<?php echo get_template_directory_uri() .'/assets/images/diseno.svg';?> " alt="Diseño" class="icon">
            </div>
            <h2 class="circle-title text-center mb-3">Diseño</h2>
            <p class="white-text">Creamos recursos visualmente atractivos para tu marca en base a lo que busques trasmitirle a tu público.</p>
        </div>

        <div class="col-12 col-sm-6 col-xl-3 text-center">
            <div class="circle mb-4">
                <img src="<?php echo get_template_directory_uri() .'/assets/images/update.svg';?>" alt="Actualizados" class="icon2">
            </div>
            <h2 class="circle-title text-center mb-3">Actualizados</h2>
            <p class="white-text">Nuestro equipo se mantiene a la vanguardia de todas las novedades referentes a nuestras áreas de trabajo.</p>
        </div>

        <div class="col-12 col-sm-6 col-xl-3 pb-5 text-center">
            <div class="circle mb-4">
                <img src="<?php echo get_template_directory_uri() .'/assets/images/crative.svg';?>" alt="Creatividad" class="icon" >
            </div>
            <h2 class="circle-title text-center mb-3">Creatividad</h2>
            <p class="white-text">Tenemos la capacidad de cambiar e inventar a través de los retos que se nos presentan para encontrar o crear las soluciones más óptimas para ti.</p>
        </div>
        
    </div>
    <div style="height: 100px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C194.13,200.81 299.09,-104.11 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #1a1a1a;"></path></svg></div>
</div>
<div id="nosotros"></div>
<!-- EQUIPO -->

<h2 class="title401 text-center mt-5">Nuestro Equipo<img src="<?php echo get_template_directory_uri() .'/assets/images/decoration2.svg';?>" alt="" class="decoration2"></h2>
    
<?php if(have_rows('equipo')): ?>
    <section class="splide px-0" aria-label="Nuestro Equipo" id="our_team">
        <div class="splide__track w-100">
            <ul class="splide__list">

                <?php while(have_rows('equipo')): the_row();
                    $foto = get_sub_field('foto');
                    $foto_hover = get_sub_field('foto_hover');
                    $icono = get_sub_field('icono');
                    $cargo = get_sub_field('cargo');
                    $nombre = get_sub_field('nombre');
                    $titulo = get_sub_field('titulo');
                ?>
                    
                    <li class="splide__slide">
                        <div class="box">
                            <div class="slide-img portafolio">

                                <!-- <div class="black-ball"><img src="<?php echo $icono['url'];?>"></div> -->
                                <img src="<?php echo $foto['url'];?>" alt="<?php echo $nombre; ?>" class="img-fluid image" loading="lazy">
                                <div class="overlay">
                                    <div class="black-ball"><img src="<?php echo $icono['url'];?>" alt=""></div>
                                    <img src="<?php echo $foto_hover['url'];?>" alt="<?php echo $nombre; ?>" class="img-fluid image" loading="lazy">
                                </div>
                                        
                            </div>
                        </div>
                        <div class="detail-box">
                            
                            <div class="circle-title text-center"><?php echo $cargo; ?></div>
                            <div class="white-text pt-2"><?php echo $nombre; ?></div>

                        </div>		
                    </li>

                <?php endwhile;?>
            </ul>
        </div>
        
    </section>
<?php endif; ?>


    <div id="servicios"></div>
 <!-- SERVICIOS -->
 <h3 class="title401 text-center mt-5 pb-5">Servicios<img src="<?php echo get_template_directory_uri() .'/assets/images/decoration2.svg';?>" alt="" class="decoration2"></h3>

<div class="row align-items-stretch justify-content-center">
    <div class="col-sm-3 mb-5">
        <div class="card h-100">
        <div class="card-body">
            <div class="cuadro401"></div>
            <div class="contenido401">
            <img src="<?php echo get_template_directory_uri() .'/assets/images/real.svg';?>" alt="Foto y video Real Estate" height="45" class="mb-4">
            <h3 class="card-title fs-5">Fotografia y Video<br>Real Estate</h3>
            <p class="card-text">Somos especialistas en material audiovisual, expertos en el área de bienes raíces</p>
            </div>
        </div>
        </div>
    </div>
    
    <div class="col-sm-3 mb-5">
        <div class="card h-100">
        <div class="card-body">
            <div class="cuadro401"></div>
            <div class="contenido401">
            <img src="<?php echo get_template_directory_uri() .'/assets/images/social.svg';?>" alt="Social Media Management" height="45" class="mb-4">
            <h3 class="card-title fs-5">Social Media</h3>
            <p class="card-text">Ten presencia en las redes sociales y crea una comunidad que esté interesada en tu producto.</p>
            </div>
        </div>
        </div>
    </div>

    <div class="col-sm-3 mb-5">
        <div class="card h-100">
        <div class="card-body">
            <div class="cuadro401"></div>
            <div class="contenido401">
            <img src="<?php echo get_template_directory_uri() .'/assets/images/design.svg';?>" alt="Imagen corporativa" height="45" class="mb-4">
            <h3 class="card-title fs-5">Desarrollar tu imagen<br>corporativa</h3>
            <p class="card-text">Creamos tu imagen corporativa en base a los valores, ideas y objetivos que quieras transmitirle a tus futuros clientes</p>
            </div>
        </div>
        </div>
    </div>

    </div>
    <div class="row align-items-stretch justify-content-center">

    <div class="col-sm-3 mb-5">
        <div class="card h-100">
        <div class="card-body">
            <div class="cuadro401"></div>
            <div class="contenido401">
            <img src="<?php echo get_template_directory_uri() .'/assets/images/seo.svg';?>" alt="SEO" height="45" class="mb-4">
            <h3 class="card-title fs-5">SEO (Search Engine Optimazation)</h3>
            <p class="card-text">Nos encargamos de mejorar la visibilidad de tu sitio web en los diferentes buscadores que existen</p>
            </div>
        </div>
        </div>
    </div>

    <div class="col-sm-3 mb-5">
        <div class="card h-100">
        <div class="card-body">
            <div class="cuadro401"></div>
            <div class="contenido401">
            <img src="<?php echo get_template_directory_uri() .'/assets/images/web.svg';?>" alt="Diseño Web" height="45" class="mb-4">
            <h3 class="card-title fs-5">Diseño Web</h3>
            <p class="card-text">Ten tu negocio abierto 24/7 con un sitio web atractivo y funcional, todo hecho en base a lo que necesites</p>
            </div>
        </div>
        </div>
    </div>

    <div class="col-sm-3 mb-5">
    </div>


</div>

<!-- EXPERTOS EN BIENES RAICES -->
<h3 class="title401 text-center mt-5 pb-5">Expertos en bienes raíces<img src="<?php echo get_template_directory_uri() .'/assets/images/decoration2.svg';?>" alt="" class="decoration2"></h3>

<div class="bg-gradiant circle-mobile-text">
<div style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 271.49,-49.98 500.00,49.98 L500.00,0.00 L0.00,0.00 Z" style="stroke: none; fill: #1a1a1a;"></path></svg></div>
    <div class="row">

        <div class="col-12 col-sm-6 col-xl-3 text-center">
            <div class="circle mb-4">
                <img src="<?php echo get_template_directory_uri() .'/assets/images/foto-video-realestate.svg';?>" alt="Foto y Video de Real Estate" class="icon">
            </div>
            <div class="circle-title text-center mb-3">Fotografía y Video de Real Estate</div>
            <p class="white-text">Creamos los recursos audiovisuales ideales para tus bienes raíces.</p>
        </div>

        <div class="col-12 col-sm-6 col-xl-3 text-center">
            <div class="circle mb-4">
                <img src="<?php echo get_template_directory_uri() .'/assets/images/flag-house.svg';?> " alt="" class="icon">
            </div>
            <div class="circle-title text-center mb-3">Persuadimos a la audiencia</div>
            <p class="white-text">Logramos que tus clientes potenciales perciban tus bienes raíces de formas únicas, generando un primer encuentro diferente.</p>
        </div>

        <div class="col-12 col-sm-6 col-xl-3 text-center">
            <div class="circle mb-4">
                <img src="<?php echo get_template_directory_uri() .'/assets/images/phone.svg';?>" alt="Phone" class="icon2">
            </div>
            <div class="circle-title text-center mb-3">Tu propiedad llega a más personas</div>
            <p class="white-text">Nos aseguramos de que la información de tu propiedad llegue a la máxima cantidad de compradores potenciales.</p>
        </div>

        <div class="col-12 col-sm-6 col-xl-3 pb-5 text-center">
            <div class="circle mb-4">
                <img src="<?php echo get_template_directory_uri() .'/assets/images/ocho.svg';?> " alt="" class="icon">
            </div>
            <div class="circle-title text-center mb-3">Más de 8 años nos respaldan</div>
            <p class="white-text">Nos especializamos en bienes raíces y nuestros años de experiencia no nos dejarán mentir, hablemos el mismo idioma, entenderemos tus necesidades a la perfección.</p>
        </div>
        
    </div>
    <div style="height: 100px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C194.13,200.81 299.09,-104.11 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #1a1a1a;"></path></svg></div>
</div>
<div id="portafolio"></div>

<!-- PORTAFOLIO -->
<h3 class="title401 text-center mt-5 pb-5">Portafolio<img src="<?php echo get_template_directory_uri() .'/assets/images/decoration2.svg';?>" alt="" class="decoration2"></h3>


<div class="row align-items-center justify-content-center">

    <div class="col-12 col-lg-3 mb-5 text-center">
        <a href="#" class="portafolio d-block text-decoration-none">
            <img src="<?php echo get_template_directory_uri() .'/assets/images/web-design.jpeg';?> " alt="Diseño web">
            <div class="overlay">
                <h4 class="text">Diseño Web</h4>
            </div>
        </a>
    </div>

    <div class="col-12 col-lg-3 mb-5 text-center">
        <a href="#" class="portafolio d-block text-decoration-none">
            <img src="<?php echo get_template_directory_uri() .'/assets/images/imagen-corp.jpeg';?> " alt="Imagen Corporativa">
            <div class="overlay">
                <h4 class="text">Imagen Corporativa</h4>
            </div>
        </a>
    </div>

    <div class="col-12 col-lg-3 mb-5 text-center">
        <a href="#" class="portafolio d-block text-decoration-none">
            <img src="<?php echo get_template_directory_uri() .'/assets/images/fotoyvideo.jpg';?> " alt="Fotografía y video">
            <div class="overlay">
                <h4 class="text">Fotografía y video</h4>
            </div>
        </a>
    </div>

    <div class="col-12 col-lg-3 mb-5 text-center">
        <a href="#" class="portafolio d-block text-decoration-none">
            <img src="<?php echo get_template_directory_uri() .'/assets/images/social-media.jpeg';?> " alt="Manejo de Redes sociales">
            <div class="overlay">
                <h4 class="text">Redes Sociales</h4>
            </div>
        </a>
    </div>
    
</div>


<!-- CLIENTES -->
<h4 class="title401 text-center mt-5 pb-5">Ellos confian en nosotros<img src="<?php echo get_template_directory_uri() .'/assets/images/decoration2.svg';?>" alt="" class="decoration2"></h4>

<section class="splide p-0" aria-label="Nuestro Equipo" id="our_clients">
    <div class="splide__track w-100">
        <ul class="splide__list">
                
            <li class="splide__slide p-4">
                <div class="red-shadow">
                    <div style="height: 150px;" class="card401 p-4">
                        <img src="<?php echo get_template_directory_uri() .'/assets/images/domus.svg';?>" alt="DOMUS VALLARTA" class="imginbox401">
                    </div>
                </div>
            </li>

            <li class="splide__slide p-4">
                <div class="red-shadow">
                    <div style="height: 150px;" class="card401 p-4">
                        <img src="<?php echo get_template_directory_uri() .'/assets/images/c21.svg';?>" alt="Century 21 Ocean Realty" class="imginbox401">
                    </div>
                </div>
            </li>

            <li class="splide__slide p-4">
                <div class="red-shadow">
                    <div style="height: 150px;" class="card401 p-4">
                        <img src="<?php echo get_template_directory_uri() .'/assets/images/cyc.svg';?>" alt="Casas y Condos" class="imginbox401">
                    </div>
                </div>
            </li>

            <li class="splide__slide p-4">
                <div class="red-shadow">
                    <div style="height: 150px;" class="card401 p-4">
                        <img src="<?php echo get_template_directory_uri() .'/assets/images/villas-logo.jpg';?>" alt="Villas las Bonitas" class="imginbox401">
                    </div>
                </div>
            </li>

            <li class="splide__slide p-4">
                <div class="red-shadow">
                    <div style="height: 150px;" class="card401 p-4">
                        <img src="<?php echo get_template_directory_uri() .'/assets/images/remax.svg';?>" alt="Remax Playa la Cruz" class="imginbox401">
                    </div>
                </div>
            </li>

            <li class="splide__slide p-4">
                <div class="red-shadow">
                    <div style="height: 150px;" class="card401 p-4">
                        <img src="<?php echo get_template_directory_uri() .'/assets/images/one.svg';?>" alt="One Real Estate" class="imginbox401">
                    </div>
                </div>
            </li>

        </ul>
    </div>
        
</section>

<!-- TESTIMONIOS -->
<h4 class="title401 text-center my-5 pt-5">Testimonios<img src="<?php echo get_template_directory_uri() .'/assets/images/decoration2.svg';?>" alt="" class="decoration2"></h4>

<div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators my-4">
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">

                <div class="row justify-content-center flex-column-reverse flex-sm-row">

                 <!--    <div class="col-12 col-sm-6 p-0">
                        <img src="<?php echo get_template_directory_uri() .'/assets/images/photoimg.webp';?>" class="img-fluid desaparecer" alt="photo">
                    </div> -->
                    
                    <div class="col-11 col-lg-6 p-5">

                        <div class="texto-container">
                            <div class="d-flex">
                                <img class="border-img" src="<?php echo get_template_directory_uri() .'/assets/images/img_avatar.webp';?>" alt="">
                                <div class="ml-3">
                                    <div class="text-white-bold">Naomi Zara</div>
                                    <div class="white-text pb-2">Directora C21</div>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star white"></span>
                                    <span class="fa fa-star white"></span>
                                </div>
                            </div>
                            <div class="text-white mt-4">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare eget odio in rhoncus. Donec sed tellus tristique, venenatis magna eu, varius orci. Mauris a dapibus dui. Nulla id turpis est. Morbi interdum purus sed sollicitudin tempor. In hac habitasse platea.
                            </div>
                        </div>

                    </div>

                </div>
                
            </div>

            <div class="carousel-item">
                
                <div class="row justify-content-center flex-column-reverse flex-sm-row">

              <!--   <div class="col-12 col-sm-6 p-0">
                        <img src="<?php echo get_template_directory_uri() .'/assets/images/photoimg.webp';?>" class="img-fluid desaparecer" alt="photo">
                    </div> -->
                    
                    <div class="col-11 col-lg-6 p-5">

                        <div class="texto-container">
                            <div class="d-flex">
                                <img class="border-img" src="<?php echo get_template_directory_uri() .'/assets/images/img_avatar.webp';?>" alt="">
                                <div class="ml-3">
                                    <div class="text-white-bold">Naomi Zara</div>
                                    <div class="white-text pb-2">Directora C21</div>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star white"></span>
                                    <span class="fa fa-star white"></span>
                                </div>
                            </div>
                            <div class="text-white mt-4">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare eget odio in rhoncus. Donec sed tellus tristique, venenatis magna eu, varius orci. Mauris a dapibus dui. Nulla id turpis est. Morbi interdum purus sed sollicitudin tempor. In hac habitasse platea.
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div id="contacto"></div>
<!-- FORMULARIO -->
<div class="full-view">
    <div class="col-12">
        <h5 class="form-text text-center mt-5 pb-3">¿QUIERES IMPULSAR<br>TU NEGOCIO?</h5>

        <ul class="sci">
            <li>
                <a href="https://wa.link/khx8bl" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp de Punto401">
                    <img src="<?php echo get_template_directory_uri() .'/assets/images/ins.svg';?>" alt="Instagram logo">
                </a>
            </li>
            <li>
                <a href="https://www.facebook.com/Punto401" target="_blank" rel="noopener noreferrer" aria-label="Facebook de Punto401">
                    <img src="<?php echo get_template_directory_uri() .'/assets/images/face.svg';?>" alt="Facebook logo">
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/punto401_marketing/" target="_blank" rel="noopener noreferrer" aria-label="Instagram de Punto401">
                    <img src="<?php echo get_template_directory_uri() .'/assets/images/whats.svg';?>" alt="Whatsapp logo">
                </a>
            </li>
        </ul>




        <div class="row justify-content-center">
            <div class="col-10 col-lg-4">
                
                <?php echo do_shortcode( '[contact-form-7 id="122" title="Formulario de contacto 1"]', true ) ?>

            </div>

        </div>
    </div>
</div>








<?php
    if( have_posts() ){

        while( have_posts() ){

        the_post();
        the_content();

        }
    }

?>



<?php
    get_footer();
?>