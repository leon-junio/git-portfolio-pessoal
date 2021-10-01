<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Leon Dev
        <>
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cardo:400,400i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="vendor/lightbox2/css/lightbox.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="vendor/onepage-scroll/onepage-scroll.css">
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="shortcut icon" href="favicon.png">
</head>

<body>
    <div class="main">
        <section class="bg-cover bg-center hero">
            <div class="dark-overlay"></div>
            <div class="position-relative z-index-1">
                <div class="container text-center text-white">
                    <h1 class="text-uppercase my-4">Leon Soluções</h1>
                    <p class="font-italic lead">Aqui você vai encontrar as melhores soluções do mercado atual de informática.</p>
                    <p class="font-italic lead">Então não perca tempo e arrasta pra baixo pra conhecer um pouco mais sobre meu trabalho!</p>
                    <ul class="onepage-scroll">
                        <li class="list-inline-item">
                            <a data-index="6" class="btn btn-outline-light" onclick="location.replace('#6');location.reload();">Contato</a>
                            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                            <lottie-player class="lt_anim" src="https://assets2.lottiefiles.com/packages/lf20_bp5lntrf.json" onclick="location.replace('#6');location.reload();" background="transparent" speed="1" style="width: 150px; height: 100px;" loop autoplay></lottie-player>
                        </li>
                        <li class="list-inline-item">
                            <a data-index="4" class="btn btn-outline-light" onclick="location.replace('#4');location.reload();">Portfólio</a>
                            <lottie-player class="lt_anim" src="https://assets3.lottiefiles.com/packages/lf20_iorpbol0.json" onclick="location.replace('#6');location.reload();" background="transparent" speed="1" style="width: 150px; height: 100px;" loop autoplay></lottie-player>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="scroll-btn link-scroll" onclick="location.replace('#2');location.reload();"><i class="fas fa-angle-double-down"></i></div>
        </section>
        <section id="1">
            <div class="d-flex h-100 align-items-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <header class="text-center">
                                <h2 class="text-uppercase lined">Leon Júnio Martins</h2>
                            </header>
                            <p class="lead">Encontrando soluções com apoio da mais alta tecnológia do mercado.</p>
                            <p>Sou programador e desenvolvedor de aplicações e sites web. Com ensino técnico completo em informática pelo IFMG sou capaz de projetar, desenvolver e encontrar as soluções para os seus problemas e os de sua empresa.</p>
                            <p>Além de atuar na aréa de desenvolvimento, trabalho com manutenção/suporte em informática, design, webdesign, redes de computadores e muito mais! São muitos anos de experiência profissional e técnica com o mercado de trabalho
                                na area da computação, com isso tenho certeza que o meu conhecimento pode ser a resposta.</p>
                        </div>
                        <div class="col-lg-6">
                            <img src="img/sobre.png" style="position: absolute;z-index: 1;right: 2%;" alt="..." style="z-index: 0;" class="img-fluid rounded-circle d-block mx-auto">
                            <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_p1qiuawe.json" background="transparent" speed="1" style="width: 100%; height: 103%;" loop autoplay></lottie-player>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-gray">
            <div class="d-flex h-100 align-items-center">
                <div class="container">
                    <header class="mb-5 text-center">
                        <h2 class="text-uppercase lined">Serviços</h2>
                    </header>
                    <div class="row text-center">
                        <div class="col-lg-4 col-md-6 mb-4" onmouseover="raiane('anim1','ic1');" onmouseout="leon('anim1','ic1')">
                            <?php require "html/design1.html" ?>
                            <div id="ic1" class="icon mb-3"><i class="fas fa-desktop"></i></div>
                            <h4 class="text-uppercase lined lined-compact">Web design</h4>
                            <p class="text-mted">Desenvolvimento de sites responsivos e rápidos.</p>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4" onmouseover="raiane('anim2','ic2');" onmouseout="leon('anim2','ic2')">
                            <?php require "html/design2.html" ?>
                            <div id="ic2" class="icon mb-3"><i class="fas fa-laptop-medical"></i>
                            </div>
                            <h4 class="text-uppercase lined lined-compact">Manutenção</h4>
                            <p class="text-mted">Manutenção e suporte em computadores/notebooks de todas as marcas.</p>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4" onmouseover="raiane('anim3','ic3');" onmouseout="leon('anim3','ic3')">
                            <?php require "html/design3.html" ?>
                            <div id="ic3" class="icon mb-3"><i class="fas fa-globe-americas"></i></div>
                            <h4 class="text-uppercase lined lined-compact">Redes e Projetos</h4>
                            <p class="text-mted">Configurações de redes de computadores, roteadores e projetos de informática.</p>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4" onmouseover="raiane('anim4','ic4');" onmouseout="leon('anim4','ic4')">
                            <?php require "html/design4.html" ?>
                            <div id="ic4" class="icon mb-3"><i class="far fa-lightbulb"></i></div>
                            <h4 class="text-uppercase lined lined-compact">Consultoria</h4>
                            <p class="text-mted">Tenha uma consultoria completa sobre informática em geral no setor de compras, projetos, configurações entre outros.</p>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4" onmouseover="raiane('anim5','ic5');" onmouseout="leon('anim5','ic5')">
                            <?php require "html/design5.html" ?>
                            <div id="ic5" class="icon mb-3"><i class="fas fa-code"></i></div>
                            <h4 class="text-uppercase lined lined-compact">Programação e Aplicações</h4>
                            <p class="text-mted">Desenvolvimento de aplicações web, desktop, mobile. Conhecimentos em Java, JavaScript, PHP, MySQl, WebDev e muito mais.</p>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4" onmouseover="raiane('anim6','ic6');" onmouseout="leon('anim6','ic6')">
                            <?php require "html/design6.html" ?>
                            <div id="ic6" class="icon mb-3"><i class="fas fa-user"></i></div>
                            <h4 class="text-uppercase lined lined-compact">Cursos e aulas</h4>
                            <p class="text-mted">Conhecimentos técnicos para ministrar aulas sobre informática básica e cursos de alto desempenho.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="d-flex h-100 align-items-center">
                <div class="container">
                    <header class="text-center mb-5">
                        <h2 class="text-uppercase lined">Portfólio</h2>
                        <p class="text-mted">Clique e saiba mais.</p>
                    </header>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-4">
                            <a href="img/portfolio-1.jpg" data-lightbox="image-1" data-title="Site para provedora IBR 2020 <hr> <a class='btn btn-outline-light' href='http://ibrcap.com.br' >Acessar</a>" class="d-block mb-1"><img src="img/portfolio-1.jpg" style="height: 210px;" alt="..." class="img-fluid d-block mx-auto">
                                <lottie-player style="position:absolute; z-index: 1; width: 100%; height: 100%; margin: 0%;padding: 0%;top:0%; left: 0%;" src="https://assets1.lottiefiles.com/packages/lf20_zlumfhmb.json" background="transparent" speed="0.2" loop autoplay></lottie-player>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <a href="img/portfolio-2.jpg" data-lightbox="image-2" data-title="Site para personal trainer <hr> <a class='btn btn-outline-light' href='http://andersonpersonal.epizy.com'>Acessar</a>" class="d-block mb-1"><img src="img/portfolio-2.jpg" style="height: 210px;" alt="..." class="img-fluid d-block mx-auto">
                                <lottie-player style="position:absolute;  z-index: 1; width: 100%; height: 100%; margin: 0%;padding: 0%;top:0%; left: 0%;" src="https://assets1.lottiefiles.com/packages/lf20_zlumfhmb.json" background="transparent" speed="0.2" loop autoplay></lottie-player>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <a href="img/portfolio-3.jpg" data-lightbox="image-3" data-title="Aplicação para realização de torneios <hr> <a class='btn btn-outline-light' href='http://leondev.freevar.com'>Acessar</a>" class="d-block mb-1"><img src="img/portfolio-3.jpg" style="height: 210px;" alt="..." class="img-fluid d-block mx-auto">
                                <lottie-player style="position:absolute;  z-index: 1; width: 100%; height: 100%; z-index: 1;margin: 0%;padding: 0%;top:0%; left: 0%;" src="https://assets1.lottiefiles.com/packages/lf20_zlumfhmb.json" background="transparent" speed="0.2" loop autoplay></lottie-player>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <a href="img/portfolio-4.jpg" data-lightbox="image-4" data-title="Site novo para provedora IBR 2021 <hr> <a class='btn btn-outline-light' href='http://ibrcap.epizy.com'>Acessar</a>" class="d-block mb-1"><img src="img/portfolio-4.jpg" style="height: 210px;" alt="..." class="img-fluid d-block mx-auto">
                                <lottie-player style="position:absolute;  z-index: 1; width: 100%; height: 100%; z-index: 1;margin: 0%;padding: 0%;top:0%; left: 0%;" src="https://assets1.lottiefiles.com/packages/lf20_zlumfhmb.json" background="transparent" speed="0.2" loop autoplay></lottie-player>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <a href="img/portfolio-5.jpg" data-lightbox="image-5" data-title="Aplicativo mobile android voltado para assistência estudantil. <hr> <a class='btn btn-outline-light' href='https://instagram.com/leonjrmartins'>Obter</a>" class="d-block mb-1"><img src="img/portfolio-5.jpg" style="height: 210px;" alt="..." class="img-fluid d-block mx-auto">
                                <lottie-player style="position:absolute;  z-index: 1; width: 100%; height: 100%; z-index: 1;margin: 0%;padding: 0%;top:0%; left: 0%;" src="https://assets1.lottiefiles.com/packages/lf20_zlumfhmb.json" background="transparent" speed="0.2" loop autoplay></lottie-player>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <a href="img/portfolio-6.jpg" data-lightbox="image-6" data-title="Aplicação desktop de gerenciamento de vendas/estoque de um comércio. <hr> <a class='btn btn-outline-light' href='https://instagram.com/leonjrmartins'>Obter</a>" class=" d-block mb-1 "><img src=" img/portfolio-6.jpg " style=" height: 210px; " alt=" ... " class=" img-fluid d-block mx-auto ">
                                <lottie-player style="position:absolute;  z-index: 1; width: 100%; height: 100%; z-index: 1;margin: 0%;padding: 0%;top:0%; left: 0%;" src="https://assets1.lottiefiles.com/packages/lf20_zlumfhmb.json" background="transparent" speed="0.2" loop autoplay></lottie-player>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=" bg-gray ">
            <div class=" d-flex h-100 align-items-center ">
                <div class=" container ">
                    <header class=" text-center mb-5 ">
                        <h2 class=" text-uppercase lined ">Text page</h2>
                    </header>
                    <div class=" row ">
                        <div class=" col-lg-6 ">
                            <p>Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could
                                cease green oh.</p>
                            <p>Betrayed cheerful declared end and. Questions we additions is extremely incommode. Next half add call them eat face. Age lived smile six defer bed their few. Had admitting concluded too behaviour him she. Of death to or to
                                being other.</p>
                        </div>
                        <div class=" col-lg-6 ">
                            <p>Effects present letters inquiry no an removed or friends. Desire behind latter me though in. Supposing shameless am he engrossed up additions. My possible peculiar together to. Desire so better am cannot he up before points.
                                Remember mistaken opinions it pleasure of debating. Court front maids forty if aware their at. Chicken use are pressed removed.</p>
                            <p>Saw yet kindness too replying whatever marianne. Old sentiments resolution admiration unaffected its mrs literature. Behaviour new set existence dashwoods. It satisfied to mr commanded consisted disposing engrossed. Tall snug
                                do of till on easy. Form not calm new fail.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class=" d-flex h-100 align-items-center ">
                <div class=" container ">
                    <header class=" text-center mb-5 ">
                        <h2 class=" text-uppercase lined ">Contact</h2>
                    </header>
                    <div class=" row ">
                        <div class=" col-lg-6 ">
                            <form action=" " class=" contact-form ">
                                <div class=" row ">
                                    <div class=" form-group col-lg-6 ">
                                        <label for=" firstName ">Your firstname *</label>
                                        <input id=" firstName " type=" text " name=" firstname " placeholder=" Enter your firstname " class=" form-control ">
                                    </div>
                                    <div class=" form-group col-lg-6 ">
                                        <label for=" lastName ">Your lastname *</label>
                                        <input id=" lastName " type=" text " name=" lastname " placeholder=" Enter your lastname " class=" form-control ">
                                    </div>
                                    <div class=" form-group col-lg-12 ">
                                        <label for=" email ">Your email *</label>
                                        <input id=" email " type=" email " name=" email " placeholder=" Enter your email " class=" form-control ">
                                    </div>
                                    <div class=" form-group col-lg-12 ">
                                        <label for=" message ">Your message for us *</label>
                                        <textarea id=" message " name=" message " placeholder=" Enter your message " class=" form-control "></textarea>
                                    </div>
                                    <div class=" form-group col-lg-12 ">
                                        <button type=" submit " class=" btn btn-outline-primary w-100 ">Send message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class=" col-lg-6 ">
                            <p>Effects present letters inquiry no an removed or friends. Desire behind latter me though in. Supposing shameless am he engrossed up additions. My possible peculiar together to. Desire so better am cannot he up before points.
                                Remember mistaken opinions it pleasure of debating. Court front maids forty if aware their at. Chicken use are pressed removed.</p>
                            <p>Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could
                                cease green oh.</p>
                            <ul class=" mb-0 list-inline text-center ">
                                <li class=" list-inline-item "><a href=" # " class=" social-link social-link-facebook "><i class=" fab fa-facebook-f "></i></a></li>
                                <li class=" list-inline-item "><a href=" # " class=" social-link social-link-twitter "><i class=" fab fa-twitter "></i></a></li>
                                <li class=" list-inline-item "><a href=" # " class=" social-link social-link-google-plus "><i class=" fab fa-google-plus-g "></i></a></li>
                                <li class=" list-inline-item "><a href=" # " class=" social-link social-link-instagram "><i class=" fab fa-instagram "></i></a></li>
                                <li class=" list-inline-item "><a href=" # " class=" social-link social-link-email "><i class=" fas fa-envelope "></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <footer class=" py-5 mt-5 ">
                        <div class=" row ">
                            <div class=" col-lg-6 text-center text-lg-left ">
                                <p class=" font-italic mb-0 text-gray ">&copy; 2019 Your name/company goes here</p>
                            </div>
                            <div class=" col-lg-6 text-center text-lg-right ">
                                <p class=" font-italic mb-0 text-gray ">&copy; Template by <a href=" https://bootstrapious.com/p/big-bootstrap-tutorial " class=" text-gray ">Bootstrapious</a></p>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </section>
    </div>
    <!-- JavaScript files-->
    <script src=" vendor/jquery/jquery.min.js "></script>
    <script src=" vendor/bootstrap/js/bootstrap.bundle.min.js "></script>
    <script src=" vendor/onepage-scroll/jquery.onepage-scroll.min.js "></script>
    <script src=" vendor/lightbox2/js/lightbox.min.js "></script>
    <script src=" js/front.js ">
        device();
    </script>
    <script>
        window.onload = device()
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel=" stylesheet " href=" https://use.fontawesome.com/releases/v5.7.1/css/all.css " integrity=" sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr " crossorigin=" anonymous ">
</body>

</html>