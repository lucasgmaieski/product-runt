<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap-utilities.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css/style.css">

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
                    <img id="logo" src="images/logo.png" alt="Luks Agency">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contato</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <section class="sobre-equipe container">
        <div class=" row justify-content-center">
            <div class="col-md-6 col-10 equipe-sobre-texto">
                <h2>Uma equipe estratégica para um trabalho incrível</h2>
                <p>Com foco permanente na geração de resultados para empresas, atuamos na consultoria estratégica e na criação e implementação de soluções de comunicação e criativas, consistentes e adequadas às necessidades e características de cada companhia. Para isso, trabalhamos sempre em parceria e colaboração com interfaces e executivos das organizações, mantendo completo envolvimento com os negócios de cada cliente.</p>
            </div>
            <div class="col-md-6 col-10 equipe-sobre-img">
                <img src="images/foto-equipe-01.png" alt="Foto da Equipe" class="img-fluid">
            </div>
        </div>
    </section>

    <section class="sobre-galeria">
        <div class="container-fluid d-flex flex-wrap justify-content-center">
            <div class="sobre-galeria-box col-md-3 col-sm-5 col-7">
                <img src="images/foto-1@2x.png" alt="Foto da equipe" class="img-fluid">
            </div>
            <div class="sobre-galeria-box col-md-3 col-sm-5 col-7">
                <img src="images/foto-1@2x.png" alt="Foto da equipe" class="img-fluid">
            </div>
            <div class="sobre-galeria-box col-md-3 col-sm-5 col-7">
                <img src="images/foto-1@2x.png" alt="Foto da equipe" class="img-fluid">
            </div>
            <div class="sobre-galeria-box col-md-3 col-sm-5 col-7">
                <img src="images/foto-1@2x.png" alt="Foto da equipe" class="img-fluid">
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
                    <a href="#"><img src="images/logo-dummy.png" alt="Logo" class="d-inline"></a>
                </div>
            </div>
        </div>
    </footer>

        
    </body>
    </html>