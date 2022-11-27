<?php 
    $title = get_the_title();
?>

<footer <?php if($title == 'Contato'){ echo 'style="padding:20px 0;"';} ?>>
<?php 
    if($title != 'Contato' && is_404() == false && $title != 'Helper'){
?>
        <section class="metodologia">
            <div class="container">
                <h2>Conheça nossa Metodologia</h2>
                <p><?php the_field('texto_metodologia'); ?></p>
                <a href="product-runt/contato"> Entrar em contato </a>
            </div>
        </section>
<?php 
    }
?>
        <div class="container">
            <div class="d-flex flex-row flex-wrap justify-content-between">
                <div class="contact-footer col-md-6 col-sm-12 row">
                    <div class="col-4">
                        <h2>Suporte</h2>
                        <a href="">Contato</a>
                        <a href="">FAQ</a>
                    </div>
                    <div class="col-4">
                        <h2>Suporte</h2>
                        <a href="">Contato</a>
                        <a href="">FAQ</a>
                    </div>
                    <div class="col-4">
                        <h2>Suporte</h2>
                        <a href="">Contato</a>
                        <a href="">FAQ</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 box-logo-footer">
                    <a href="<?php echo '/product-runt-wp' ?>"><img src="<?php echo get_template_directory_uri();?>/images/logo-dummy.png" alt="Logo" class="d-inline"></a>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>

    <script type="module" src="<?php echo get_template_directory_uri();?>/js/slick.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/slick.min.js"></script>
    <script type="text/javascript">
    $('.clientes-slider .slider-container').slick({
        dots: true,
        arrows: false,
        infinite: false,
        centerMode: false,
        adaptiveHeight: true,

        // centerPadding: 5,
        speed: 1000,
        slidesToShow: 4,
        autoplay: true,
        autoplaySpeed: 3000,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 2
            }
        }]
    });

    $('.depoimentos .depoimentos-box').slick({
        dots: true,
        arrows: false,
        infinite: false,
        centerMode: false,
        speed: 1000,
        slidesToShow: 1,
    });
    </script>
    <!-- <script src="css/bootstrap/js/bootstrap.js"></script>
    <script src="css/bootstrap/js/bootstrap.bundle.js"></script> -->
</body>


</html>