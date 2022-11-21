<?php
    // Template Name: Home
?>
<?php get_header(); ?>
            <div class="row d-flex align-items-center mt-3 pb-4">
                <div class="col-12 col-sm-6 time-descricao">
                    <h2><?php echo the_field('chamada_topo'); ?></h2>
                    <p>Consultoria especializada em startups, empresase e principalmente pessoas.</p>
                    <a href="https://lucasgmaieski.github.io/luks-agency/index.html" targer="_blank">Ver
                        demonstração</a>
                </div>
                <div class="col-12 col-sm-6 time-imagem">
                    <img src="<?php echo get_template_directory_uri();?>/images/ilustracao.png" alt="Ilustração" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="circle"><i class="fas fa-angle-down"></i></div>
    </header>

    <?php if(have_posts() ){
        while( have_posts() ){
            the_post();
            the_content();
        }
    } else{?>
        <p>Sorry, no posts matched your criteria.</p>
    <?php 
    }?>
    <section class="clientes-slider">

        <div class="center">
            <div class="slider-container px-2">
                <img src="<?php echo get_template_directory_uri();?>/images/amazon.png" alt="Logo Amazon">
                <img src="<?php echo get_template_directory_uri();?>/images/costco.png" alt="Logo Costco">
                <img src="<?php echo get_template_directory_uri();?>/images/dominos.png" alt="Logo Domminos">
                <img src="<?php echo get_template_directory_uri();?>/images/uber.png" alt="Logo Uber">
                <img src="<?php echo get_template_directory_uri();?>/images/walmart.png" alt="Logo Walmart">
                <img src="<?php the_field('imagem_topo'); ?>" alt="">
            </div>
        </div>
    </section>

    <section class="container-lg diferenciais ">
        <div class="center">
            <h2>Contribuímos de ponta a ponta</h2>
            <div class="icons-diferenciais d-flex flex-wrap gap-3 justify-content-center">
                <div class="box-single-diferenciais col-md-3 col-sm-5 text-center">
                    <img src="<?php echo get_template_directory_uri();?>/images/ilustracao-01.png" alt="" class="img-fluid">
                    <h3>Ambientes Mobile</h3>
                    <p>Garanta que toda sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
                </div>
                <div class="box-single-diferenciais col-md-3 col-sm-5 text-center">
                    <img src="<?php echo get_template_directory_uri();?>/images/ilustracao-02.png" alt="" class="img-fluid">
                    <h3>Ambientes Mobile</h3>
                    <p>Garanta que toda sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
                </div>
                <div class="box-single-diferenciais col-md-3 col-sm-5 text-center">
                    <img src="<?php echo get_template_directory_uri();?>/images/ilustracao-03.png" alt="" class="img-fluid">
                    <h3>Ambientes Mobile</h3>
                    <p>Garanta que toda sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
                </div>
                <div class="box-single-diferenciais col-md-3 col-sm-5 text-center">
                    <img src="<?php echo get_template_directory_uri();?>/images/ilustracao-03.png" alt="" class="img-fluid">
                    <h3>Ambientes Mobile</h3>
                    <p>Garanta que toda sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
                </div>
                <div class="box-single-diferenciais col-md-3 col-sm-5 text-center">
                    <img src="<?php echo get_template_directory_uri();?>/images/ilustracao-03.png" alt="" class="img-fluid">
                    <h3>Ambientes Mobile</h3>
                    <p>Garanta que toda sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="sobre-time">
        <div class="container-lg d-flex flex-wrap gap-5  align-items-center justify-content-center">
            <div class="col-md-5 col-sm-12 time-info">
                <h2>Um time experiente, comunicador e coeso.</h2>
                <p><?php  the_field('sobre_home');?>
                </p>
            </div>
            <div class="col-md-6 col-sm-12 time-imagem">
                <img src="<?php echo get_template_directory_uri();?>/images/ilustracao-04.png" alt="" class="img-fluid">
            </div>
        </div>
    </section>

    <section class="depoimentos">
        <div class="container">
            <h2>Depoimentos</h2>
            <div class="depoimentos-box">
                <div class="depoimento-single">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem corrupti fugit nesciunt ducimus
                        illum iste perferendis, a tempora eaque aliquid praesentium? A numquam laudantium harum ab
                        officia tenetur vero libero.</p>
                    <p>Lucas Maieski</p>
                    <img src="<?php echo get_template_directory_uri();?>/images/homem.jpg" alt="">
                </div>
                <div class="depoimento-single">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem corrupti fugit nesciunt ducimus
                        illum iste perferendis, a tempora eaque aliquid praesentium? A numquam laudantium harum ab
                        officia tenetur vero libero.</p>
                    <p>Lucas Maieski</p>
                    <img src="<?php echo get_template_directory_uri();?>/images/homem.jpg" alt="">
                </div>
                <div class="depoimento-single">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem corrupti fugit nesciunt ducimus
                        illum iste perferendis, a tempora eaque aliquid praesentium? A numquam laudantium harum ab
                        officia tenetur vero libero.</p>
                    <p>Lucas Maieski</p>
                    <img src="<?php echo get_template_directory_uri();?>/images/homem.jpg" alt="">
                </div>

            </div>
        </div>
    </section>

    <?php get_footer(); ?>