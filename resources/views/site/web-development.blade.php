@extends('site.layouts.app')
@section('content')
        <div id="content" class="site-content">
            <div class="page-header flex-middle">
                <div class="container">
                    <div class="inner flex-middle">
                        <h1 class="page-title">Développement Web</h1>
                        <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="index.html">Accueil</a></li>
                            <li><a href="web-development.html">SERVICES INFORMATIQUES</a></li>
                            <li class="active">Développement Webt</li>
                        </ul>    
                    </div>
                </div>
            </div>

            <section class="service-web">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 text-center mb-5 mb-lg-0 align-self-center">
                            <img src="https://via.placeholder.com/570x542.png" alt="">
                        </div>
                        <div class="col-lg-6">
                            <div class="service-process">
                                <div class="ot-heading">
                                    <span>// SUR LE SERVICE</span>
                                    <h2 class="main-heading">Nous fournissons le meilleur <br>développement Web</h2>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="process-box">
                                            <div class="step">01.</div>
                                            <h6 class="mb-0">Développement Javascript </h6>
                                            <p>Nous nous engageons à construire des solutions Javascript durables et de haute qualité.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="process-box">
                                            <div class="step">02.</div>
                                            <h6 class="mb-0">Développement PHP</h6>
                                            <p>Nous nous engageons à construire des solutions PHP durables et de haute qualité.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="process-box">
                                            <div class="step">03.</div>
                                            <h6 class="mb-0">Développement vuejs</h6>
                                            <p>Nous nous engageons à construire des solutions Javascript durables et de haute qualité.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="process-box">
                                            <div class="step">04.</div>
                                            <h6 class="mb-0">Développement laravel</h6>
                                            <p>Nous nous engageons à construire des solutions Javascript durables et de haute qualité.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="service">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                            <div class="service-box s-box">
                                <span class="big-number">01</span>
                                <div class="icon-main color-s1"><span class="flaticon-correct"></span></div>
                                <div class="content-box">
                                    <h5>Apprentissage automatique</h5>
                                    <p>Soutien et évolution</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                            <div class="service-box s-box">
                                <span class="big-number">02</span>
                                <div class="icon-main color-s2"><span class="flaticon-correct"></span></div>
                                <div class="content-box">
                                    <h5>Intelligence artificielle</h5>
                                    <p>Soutien et évolution</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-box s-box">
                                <span class="big-number">03</span>
                                <div class="icon-main color-s3"><span class="flaticon-correct"></span></div>
                                <div class="content-box">
                                    <h5>Réalité augmentée</h5>
                                    <p>Soutien et évolution</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="service-web-video">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6">
                            <div class="tab-video">
                                <div class="ot-heading">
                                    <span>// INDICE TECHNOLOGIQUE</span>
                                    <h2 class="main-heading">Nous organisons notre<br>processus de production</h2>
                                </div>
                                <div class="space-15"></div>
                                <div class="ot-tabs">
                                    <ul class="tabs-heading unstyle">
                                        <li class="tab-link octf-btn current" data-tab="tab-1518">Analyse</li>
                                        <li class="tab-link octf-btn" data-tab="tab-2518">Design</li>
                                        <li class="tab-link octf-btn" data-tab="tab-3518">Test</li>
                                    </ul>
                                    <div id="tab-1518" class="tab-content current">
                                        <p>Engintech est le partenaire de choix de nombreuses entreprises, PME et challengers technologiques. Nous aidons les entreprises à élever leur valeur grâce au développement de logiciels personnalisés, à la conception de produits, à l’assurance qualité et aux services de conseil. Notre service de conception de produits vous permet de prototyper, tester et valider vos idées.</p>
                                        <p><a class="btn-details" href="{{ route('it') }}"><i class="flaticon-right-arrow-1"></i> Pour en savoir plus</a></p>            
                                    </div>
                                    <div id="tab-2518" class="tab-content">
                                        <p>Bien que l’intégration de la sécurité à l’approche DevOps ait toujours été très demandée, cela nécessite une gamme complètement différente de processus et d’outils. DevOps est déjà connu pour se vanter d’une méthodologie de développement agile. Maintenant, lorsque les commentaires des experts en sécurité, je serai amené dans un environnement collaboratif, le projet aura un éventail de garanties de sécurité efficaces..</p>
                                        <p><a class="btn-details" href="web-development.html"><i class="flaticon-right-arrow-1"></i> Pour en savoir plus</a></p>
                                    </div>
                                    <div id="tab-3518" class="tab-content">
                                        <p>En dépit de perturber le processus de développement agile de l’approche DevOps, les apports de sécurité supplémentaires ne font qu’améliorer les garanties et la fiabilité du projet. Ainsi, d’une certaine manière, DevSecOps ne fera qu’étendre les avantages d’une approche DevOps avec des entrées de sécurité. DevOps est déjà connu pour se vanter d’une méthodologie de développement agile.</p>
                                        <p><a class="btn-details" href="mobile-development.html"><i class="flaticon-right-arrow-1"></i> Pour en savoir plus</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="offset-xl-1 col-xl-6 col-lg-6 split-right-img">
                            <div class="video-popup">
                                <div class="btn-inner">
                                    <a class="btn-play" href="https://vimeo.com/94686522">
                                        <i class="flaticon-play"></i>
                                        <span class="circle-1"></span>
                                        <span class="circle-2"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
          

            <div class="service-partner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="partners">
                                <div class="owl-carousel owl-theme home-client-carousel">
                                    <div class="partners-slide">
                                        <a href="#" class="client-logo">
                                            <figure class="partners-slide-inner">
                                                <img class="partners-slide-image" src="https://via.placeholder.com/300x70.png" alt="">
                                            </figure>                             
                                        </a>
                                    </div>
                                    <div class="partners-slide">
                                        <a href="#" class="client-logo">
                                            <figure class="partners-slide-inner">
                                                <img class="partners-slide-image" src="https://via.placeholder.com/300x70.png" alt="">
                                            </figure>                             
                                        </a>
                                    </div>
                                    <div class="partners-slide">
                                        <a href="#" class="client-logo">
                                            <figure class="partners-slide-inner">
                                                <img class="partners-slide-image" src="https://via.placeholder.com/300x70.png" alt="">
                                            </figure>                             
                                        </a>
                                    </div>
                                    <div class="partners-slide">
                                        <a href="#" class="client-logo">
                                            <figure class="partners-slide-inner">
                                                <img class="partners-slide-image" src="https://via.placeholder.com/300x70.png" alt="">
                                            </figure>                             
                                        </a>
                                    </div>
                                    <div class="partners-slide">
                                        <a href="#" class="client-logo">
                                            <figure class="partners-slide-inner">
                                                <img class="partners-slide-image" src="https://via.placeholder.com/300x70.png" alt="">
                                            </figure>                             
                                        </a>
                                    </div>
                                    <div class="partners-slide">
                                        <a href="#" class="client-logo">
                                            <figure class="partners-slide-inner">
                                                <img class="partners-slide-image" src="https://via.placeholder.com/300x70.png" alt="">
                                            </figure>                             
                                        </a>
                                    </div>
                                    <div class="partners-slide">
                                        <a href="#" class="client-logo">
                                            <figure class="partners-slide-inner">
                                                <img class="partners-slide-image" src="https://via.placeholder.com/300x70.png" alt="">
                                            </figure>                             
                                        </a>
                                    </div>
                                    <div class="partners-slide">
                                        <a href="#" class="client-logo">
                                            <figure class="partners-slide-inner">
                                                <img class="partners-slide-image" src="https://via.placeholder.com/300x70.png" alt="">
                                            </figure>                             
                                        </a>
                                    </div>
                                    <div class="partners-slide">
                                        <a href="#" class="client-logo">
                                            <figure class="partners-slide-inner">
                                                <img class="partners-slide-image" src="https://via.placeholder.com/300x70.png" alt="">
                                            </figure>                             
                                        </a>
                                    </div>
                                    <div class="partners-slide">
                                        <a href="#" class="client-logo">
                                            <figure class="partners-slide-inner">
                                                <img class="partners-slide-image" src="https://via.placeholder.com/300x70.png" alt="">
                                            </figure>                             
                                        </a>
                                    </div>
                                    <div class="partners-slide">
                                        <a href="#" class="client-logo">
                                            <figure class="partners-slide-inner">
                                                <img class="partners-slide-image" src="https://via.placeholder.com/300x70.png" alt="">
                                            </figure>                             
                                        </a>
                                    </div>
                                    <div class="partners-slide">
                                        <a href="#" class="client-logo">
                                            <figure class="partners-slide-inner">
                                                <img class="partners-slide-image" src="https://via.placeholder.com/300x70.png" alt="">
                                            </figure>                             
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           
        </div>

@stop()