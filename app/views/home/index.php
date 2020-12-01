<?php 
    $this->view('home/cabecario');
?>

<!-- Navigation -->
<?php
        $this->view('home/menu');
    ?>

<!-- Header -->
<header class="masthead d-flex">
    <div class="container text-center my-auto">
        <h1 class="mb-1">Portfólio Estilizado</h1>
        <h3 class="mb-5">
            <em></em>
        </h3>
        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Explore</a>
    </div>
    <div class="overlay"></div>
</header>

<!-- About -->
<section class="content-section bg-light" id="about">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h2>Portfólio com estilo é o seu próximo projeto!</h2>
                <p class="lead mb-5">Este tema apresenta uma flexibilidade em UX. Acompanhe nosso parceiro em fotos
                    <a href="https://www.pexels.com/pt-br/">Pexels</a>!
                </p>
                <a class="btn btn-dark btn-xl js-scroll-trigger" href="#services">O Que Oferecemos</a>
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section class="content-section bg-primary text-white text-center" id="services">
    <div class="container">
        <div class="content-section-heading">
            <h3 class="text-secondary mb-0">Serviços</h3>
            <h2 class="mb-5">O Que Oferecemos</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                <span class="service-icon rounded-circle mx-auto mb-3">
                    <i class="icon-screen-smartphone"></i>
                </span>
                <h4>
                    <strong>Design Responsivo</strong>
                </h4>
                <p class="text-faded mb-0">
                <div>Fica ótimo em qualquer tela!</div>
                </p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                <span class="service-icon rounded-circle mx-auto mb-3">
                    <i class="icon-pencil"></i>
                </span>
                <h4>
                    <strong>Reformulado</strong>
                </h4>
                <p class="text-faded mb-0">
                <div>Atualizado em Bootstrap</div>
                </p>
            </div>
            <div class=" col-lg-3 col-md-6 mb-5 mb-md-0">
                <span class="service-icon rounded-circle mx-auto mb-3">
                    <i class="icon-like"></i>
                </span>
                <h4>
                    <strong>Favorito</strong>
                </h4>
                <p class="text-faded mb-0">
                <div>Milhares de usuários </div><i class="fas fa-heart"></i>
                <div>Junte-se a nós!</div>
                </p>
            </div>
            <div class="col-lg-3 col-md-6">
                <span class="service-icon rounded-circle mx-auto mb-3">
                    <i class="icon-mustache"></i>
                </span>
                <h4>
                    <strong>Dúvidas</strong>
                </h4>
                <p class="text-faded mb-0">
                <div>Estamos lhe esperando...</div>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Callout -->
<section class="callout">
    <div class="container text-center">
        <h2 class="mx-auto mb-5">Bem-vindo
            <em>ao seu</em>
            próximo website!
        </h2>
        <a class="btn btn-primary btn-xl" href="https://themes.getbootstrap.com/">Faça
            seu Download</a>
    </div>
</section>

<!-- Portfolio -->
<section class="content-section" id="portfolio">
    <div class="container">
        <div class="content-section-heading text-center">
            <h3 class="text-secondary mb-0">Portfólio</h3>
            <h2 class="mb-5">Últimos Projetos</h2>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-6">
                <a class="portfolio-item" href="#!">
                    <div class="caption">
                        <div class="caption-content">
                            <div class="h2">Mova-se</div>
                            <p class="mb-0">
                            <div>Como este rio que flui para o mar, encontre o seu projeto!</div>
                            </p>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/portfolio-1.png" alt="">
                </a>
            </div>
            <div class="col-lg-6">
                <a class="portfolio-item" href="#!">
                    <div class="caption">
                        <div class="caption-content">
                            <div class="h2">Acorde</div>
                            <p class="mb-0">
                            <div>Descubra o seu código!</div>
                            </p>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/portfolio-2.png" alt="">
                </a>
            </div>
            <div class="col-lg-6">
                <a class="portfolio-item" href="#!">
                    <div class="caption">
                        <div class="caption-content">
                            <div class="h2">Realidade</div>
                            <p class="mb-0">
                            <div>Explore o seu mundo!</div>
                            </p>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/portfolio-3.png" alt="">
                </a>
            </div>
            <div class="col-lg-6">
                <a class="portfolio-item" href="#!">
                    <div class="caption">
                        <div class="caption-content">
                            <div class="h2">Futuro</div>
                            <p class="mb-0">
                            <div>Explore novos mundos, inicie o seu projeto!</div>
                            </p>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/portfolio-4.png" alt="">
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="content-section bg-primary text-white">
    <div class="container text-center">
        <h2 class="mb-4">Não resista...</h2>
        <a href="#!" class="btn btn-xl btn-light mr-4">Clique em Mim!</a>
        <a href="#!" class="btn btn-xl btn-dark">Olhe para Mim!</a>
    </div>
</section>

<!-- Map -->
<div class="row no-gutters">
    <div class="col-lg-6">
        <a class="portfolio-item" href="#!">
            <div class="caption">
                <div class="caption-content">
                    <div class="h2"></div>
                    <p class="mb-0"></p>
                </div>
            </div>
            <img class="img-fluid" src="img/portfolio-5.png" alt="">
        </a>
    </div>

    <div class="col-lg-6">
        <a class="portfolio-item" href="#!">
            <div class="caption">
                <div class="caption-content">
                    <div class="h2"></div>
                    <p class="mb-0"></p>
                </div>
            </div>
            <img class="img-fluid" src="img/portfolio-6.png" alt="">
        </a>
    </div>
</div>

<!-- Footer -->
<div id="contact" class="map">
    <footer class="footer text-center">
        <div class="container">
            <ul class="list-inline mb-5">
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white mr-3" href="#!">
                        <i class="icon-social-youtube"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white mr-3" href="#!">
                        <i class="icon-social-twitter"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white" href="#!">
                        <i class="icon-social-github"></i>
                    </a>
                </li>
            </ul>
            <p class="text-muted small mb-0">Copyright @UgoMaiaFernandes 2020</p>
        </div>
    </footer>
</div>

<?php 
    $this->view('home/rodape');
    ?>