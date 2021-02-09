@extends('site.layouts.app')
@section('content')
    <div id="content" class="site-content">
            <div class="page-header flex-middle">
                <div class="container">
                    <div class="inner flex-middle">
                        <h1 class="page-title">Nos réalisation </h1>
                        <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="index.html">Accueil</a></li>
                            <li class="active">Nos réalisation </li>
                        </ul>    
                    </div>
                </div>
            </div>
            <section class="projects-masonry">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="ot-heading">
                                <span>// DERNIÈRES ÉTUDES DE CAS</span>
                                <h2 class="main-heading">Présenter nos réalisations</h2>
                            </div>
                            <div class="space-5"></div>
                            <p>L’externalisation du développement de logiciels n’est qu’un outil pour atteindre les objectifs commerciaux. Mais il n’y a aucun moyen d’obtenir des résultats valables sans coopération et confiance entre une entreprise cliente..</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="project-filter-wrapper">
                                <ul class="project_filters">
                                    <li><a href="#" data-filter="*" class="selected">Tous </a></li>
                                    <li><a href="#" data-filter=".design">Conception</a></li>                       
                                    <li><a href="#" data-filter=".development">Développement</a></li>                     
                                    <li><a href="#" data-filter=".ideas">Idées</a></li>                     
                                    <li><a href="#" data-filter=".technology">Technologie</a></li>                       
                                </ul>
                                <div class="projects-grid-ms projects-grid projects-style-2 projects-col3">

                                    <div class="project-item design ideas">
                                        <div class="projects-box">
                                            <div class="projects-thumbnail">
                                                <a href="portfolio-details-1.html">
                                                    <img src="{{ asset('asset/images/a.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="portfolio-info">
                                                <div class="portfolio-info-inner">
                                                    <h5><a href="portfolio-details-1.html">App for Virtual Reality</a></h5>
                                                    <p class="portfolio-cates">
                                                        <a href="#">Design</a><span>/</span>
                                                        <a href="#">Ideas</a>
                                                    </p> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-item technology development">
                                        <div class="projects-box">
                                            <div class="projects-thumbnail">
                                                <a href="portfolio-details-2.html">
                                                    <img src="{{ asset('asset/images/b.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="portfolio-info">
                                                <div class="portfolio-info-inner">
                                                    <h5><a href="portfolio-details-2.html">Mobile Coin View App</a></h5>
                                                    <p class="portfolio-cates">
                                                        <a href="#">Technology</a><span>/</span>
                                                        <a href="#">Development</a>
                                                    </p> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-item ideas technology">
                                        <div class="projects-box">
                                            <div class="projects-thumbnail">
                                                <a href="portfolio-details-3.html">
                                                    <img src="{{ asset('asset/images/c.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="portfolio-info">
                                                <div class="portfolio-info-inner">
                                                    <h5><a href="portfolio-details-3.html">Analysis of Security</a></h5>
                                                    <p class="portfolio-cates">
                                                        <a href="#">Ideas</a><span>/</span>
                                                        <a href="#">Technology</a>
                                                    </p> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-item design development">
                                        <div class="projects-box">
                                            <div class="projects-thumbnail">
                                                <a href="portfolio-details-1.html">
                                                    <img src="{{ asset('asset/images/d.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="portfolio-info">
                                                <div class="portfolio-info-inner">
                                                    <h5><a href="portfolio-details-1.html">eCommerce Website</a></h5>
                                                    <p class="portfolio-cates">
                                                        <a href="#">Design</a><span>/</span>
                                                        <a href="#">Development</a>
                                                    </p> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-item design ideas">
                                        <div class="projects-box">
                                            <div class="projects-thumbnail">
                                                <a href="portfolio-details-2.html">
                                                    <img src="{{ asset('asset/images/e.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="portfolio-info">
                                                <div class="portfolio-info-inner">
                                                    <h5><a href="portfolio-details-2.html">Responsive Design</a></h5>
                                                    <p class="portfolio-cates">
                                                        <a href="#">Design</a><span>/</span>
                                                        <a href="#">Ideas</a>
                                                    </p> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-item development ideas">
                                        <div class="projects-box">
                                            <div class="projects-thumbnail">
                                                <a href="portfolio-details-3.html">
                                                    <img src="{{ asset('asset/images/f.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="portfolio-info">
                                                <div class="portfolio-info-inner">
                                                    <h5><a href="portfolio-details-3.html">App for Health</a></h5>
                                                    <p class="portfolio-cates">
                                                        <a href="#">Development</a><span>/</span>
                                                        <a href="#">Ideas</a>
                                                    </p> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-item design technology">
                                        <div class="projects-box">
                                            <div class="projects-thumbnail">
                                                <a href="portfolio-details-1.html">
                                                    <img src="{{ asset('asset/images/g.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="portfolio-info">
                                                <div class="portfolio-info-inner">
                                                    <h5><a href="portfolio-details-1.html">Basics Project</a></h5>
                                                    <p class="portfolio-cates">
                                                        <a href="#">Design</a><span>/</span>
                                                        <a href="#">Technology</a>
                                                    </p> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-item technology development">
                                        <div class="projects-box">
                                            <div class="projects-thumbnail">
                                                <a href="portfolio-details-2.html">
                                                    <img src="{{ asset('asset/images/a.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="portfolio-info">
                                                <div class="portfolio-info-inner">
                                                    <h5><a href="portfolio-details-2.html">Social Media App</a></h5>
                                                    <p class="portfolio-cates">
                                                        <a href="#">Technology</a><span>/</span>
                                                        <a href="#">Development</a>
                                                    </p> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-item design development">
                                        <div class="projects-box">
                                            <div class="projects-thumbnail">
                                                <a href="portfolio-details-3.html">
                                                    <img src="{{ asset('asset/images/b.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="portfolio-info">
                                                <div class="portfolio-info-inner">
                                                    <h5><a href="portfolio-details-3.html">Your New Reality</a></h5>
                                                    <p class="portfolio-cates">
                                                        <a href="#">Design</a><span>/</span>
                                                        <a href="#">Development</a>
                                                    </p> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-item development ideas">
                                        <div class="projects-box">
                                            <div class="projects-thumbnail">
                                                <a href="portfolio-details-1.html">
                                                    <img src="{{ asset('asset/images/c.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="portfolio-info">
                                                <div class="portfolio-info-inner">
                                                    <h5><a href="portfolio-details-1.html">Immersive Experiencey</a></h5>
                                                    <p class="portfolio-cates">
                                                        <a href="#">Design</a><span>/</span>
                                                        <a href="#">Ideas</a>
                                                    </p> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-item design technology">
                                        <div class="projects-box">
                                            <div class="projects-thumbnail">
                                                <a href="portfolio-details-1.html">
                                                    <img src="{{ asset('asset/images/d.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="portfolio-info">
                                                <div class="portfolio-info-inner">
                                                    <h5><a href="portfolio-details-1.html">Corporate Website</a></h5>
                                                    <p class="portfolio-cates">
                                                        <a href="#">Design</a><span>/</span>
                                                        <a href="#">Technology</a>
                                                    </p> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-item technology ideas">
                                        <div class="projects-box">
                                            <div class="projects-thumbnail">
                                                <a href="portfolio-details-3.html">
                                                    <img src="{{ asset('asset/images/e.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="portfolio-info">
                                                <div class="portfolio-info-inner">
                                                    <h5><a href="portfolio-details-3.html">Crypto App Project</a></h5>
                                                    <p class="portfolio-cates">
                                                        <a href="#">Technology</a><span>/</span>
                                                        <a href="#">Ideas</a>
                                                    </p> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </section>

        </div>

@stop()