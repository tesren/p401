<?php
    get_header();
?>

<div class="container-404">
<img class="logo-404" src="<?php echo get_template_directory_uri() .'/assets/images/404.png';?>" alt="404">

<div class="text-404">Parece que te perdiste</div>
<div class="text-white">La página que estas buscando no esta disponible.</div>

<a class="button-404"
<?php $my_home_url = apply_filters( 'wpml_home_url', get_option( 'home' ) ); ?>
href="<?php echo $my_home_url; ?>">Volver</a>
</div>



<?php
    get_footer();
?>