<?php 
    //Template Name: Sobre
?>
<?php 
    get_header();
?>
</div>
</header>
<section class="sobre-equipe container">
    <div class=" row justify-content-center">
        <div class="col-md-6 col-10 equipe-sobre-texto">
            <h2> <?php the_field('titulo_sobre'); ?> </h2>
            <p> <?php the_field('texto_sobre'); ?> </p>
        </div>
        <div class="col-md-6 col-10 equipe-sobre-img">
            <img src="<?php the_field('imagem_sobre'); ?>" alt="Foto da Equipe" class="img-fluid">
        </div>
    </div>
</section>

<section class="sobre-galeria">
    <div class="container-fluid d-flex flex-wrap justify-content-center">
        <div class="sobre-galeria-box col-md-3 col-sm-5 col-7">
            <img src="<?php echo get_template_directory_uri();?>/images/foto-1@2x.png" alt="Foto da equipe" class="img-fluid">
        </div>
        <div class="sobre-galeria-box col-md-3 col-sm-5 col-7">
            <img src="<?php echo get_template_directory_uri();?>/images/foto-1@2x.png" alt="Foto da equipe" class="img-fluid">
        </div>
        <div class="sobre-galeria-box col-md-3 col-sm-5 col-7">
            <img src="<?php echo get_template_directory_uri();?>/images/foto-1@2x.png" alt="Foto da equipe" class="img-fluid">
        </div>
        <div class="sobre-galeria-box col-md-3 col-sm-5 col-7">
            <img src="<?php echo get_template_directory_uri();?>/images/foto-1@2x.png" alt="Foto da equipe" class="img-fluid">
        </div>
    </div>
</section>
    
<?php get_footer(); ?>