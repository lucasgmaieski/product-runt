<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/monitor.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <title>Lucas Dev</title>

</head>

<body>
    <header class="topo">
        <div class="container-md ">
            <nav class="navbar navbar-expand-md justify-content-bettwen ">
                <a href="index.php" class="navbar-brand">
                    <img id="logo" src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="Product Runt">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sobre.php">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contato.php">Contato</a>
                        </li>

                    </ul>
                </div>
            </nav>
            <div class="row d-flex align-items-center mt-3 pb-4">
                <div class="col-12 col-sm-6 time-descricao">
                    <h2>Melhore a comunicação com seu cliente e time.</h2>
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

    <section class="clientes-slider">

        <div class="center">
            <div class="slider-container px-2">
                <img src="<?php echo get_template_directory_uri();?>/images/amazon.png" alt="Logo Amazon">
                <img src="<?php echo get_template_directory_uri();?>/images/costco.png" alt="Logo Costco">
                <img src="<?php echo get_template_directory_uri();?>/images/dominos.png" alt="Logo Domminos">
                <img src="<?php echo get_template_directory_uri();?>/images/uber.png" alt="Logo Uber">
                <img src="<?php echo get_template_directory_uri();?>/images/walmart.png" alt="Logo Walmart">
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
                <p>A Product Runt acredita que marcas fortes são contruídas apartir de transformações importantes e
                    positivas na vida dos consumidores. Exatamente como uma conversa que ganha forma, a ideia vira
                    flâmula.
                    <br>
                    Comunicar bem , de forma coerente e clara não é algo fácil e estamos aqui para ajudar você e seu
                    time. Você escolhe, remoto ou presencial, para seu cliente ou seu público interno, você determina
                    como vamos te ajudar.
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

    <footer>
        <section class="metodologia">
            <div class="container">
                <h2>Conheça nossa Metodologia</h2>
                <p>O que acha de fazermos o que mais gostamos de fazer? Conversar <br> Entre em contato por e-mail ou
                    telefone.</p>
                <a href="/contato"> Entrar em contato </a>
            </div>
        </section>

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
                    <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/logo-dummy.png" alt="Logo" class="d-inline"></a>
                </div>
            </div>
        </div>
    </footer>

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