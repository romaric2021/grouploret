@extends('site.layouts.app')
@section('content')
<div id="content" class="site-content">
            <div class="page-header flex-middle">
                <div class="container">
                    <div class="inner flex-middle">
                        <h1 class="page-title">Nos projets</h1>
                        <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Nos projetsr</li>
                        </ul>    
                    </div>
                </div>
            </div>
            <section class="projects-slider">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="ot-heading mb-0">
                                <span>// DERNIÈRES ÉTUDES DE CAS</span>
                                <h2 class="main-heading">Présenter nos projets</h2>
                            </div>
                        </div>
                        <div class="col-md-7 align-self-end">
                            <p class="mb-0">L’externalisation du développement de logiciels n’est qu’un outil pour atteindre les objectifs commerciaux. Mais il n’y a aucun moyen d’obtenir des résultats valables sans coopération et confiance entre une entreprise cliente.</p>
                        </div>
                    </div>
                </div>
                <div class="space-40"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="owl-carousel owl-theme project-slider">
                            <div class="project-item projects-style-2">
                                <div class="projects-box">
                                    <div class="projects-thumbnail">
                                        <a href="portfolio-details-1.html">
                                            <img src="{{ asset('asset/images/a.jpg') }}" class="" alt="">                         
                                            <span class="overlay"></span>
                                        </a>
                                    </div>
                                    <div class="portfolio-info ">
                                        <div class="portfolio-info-inner">
                                            <a class="btn-link" href="htportfolio-details-1.html"><i class="flaticon-right-arrow-1"></i></a>
                                            <h5><a href="portfolio-details-1.html">Social Media App</a></h5>
                                            <p class="portfolio-cates">
                                                <a href="#">Design</a><span>/</span>
                                                <a href="#">Technology</a>
                                            </p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="project-item projects-style-2">
                                <div class="projects-box">
                                    <div class="projects-thumbnail">
                                        <a href="portfolio-details-1.html">
                                            <img src="{{ asset('asset/images/b.jpg') }}" class="" alt="">                         
                                            <span class="overlay"></span>
                                        </a>
                                    </div>
                                    <div class="portfolio-info ">
                                        <div class="portfolio-info-inner">
                                            <a class="btn-link" href="htportfolio-details-1.html"><i class="flaticon-right-arrow-1"></i></a>
                                            <h5><a href="portfolio-details-1.html">App for Virtual Reality</a></h5>
                                            <p class="portfolio-cates">
                                                <a href="#">Design</a><span>/</span>
                                                <a href="#">Ideas</a>
                                            </p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="project-item projects-style-2">
                                <div class="projects-box">
                                    <div class="projects-thumbnail">
                                        <a href="portfolio-details-1.html">
                                            <img src="{{ asset('asset/images/c.jpg') }}" class="" alt="">                         
                                            <span class="overlay"></span>
                                        </a>
                                    </div>
                                    <div class="portfolio-info ">
                                        <div class="portfolio-info-inner">
                                            <a class="btn-link" href="htportfolio-details-1.html"><i class="flaticon-right-arrow-1"></i></a>
                                            <h5><a href="portfolio-details-1.html">Basics Project</a></h5>
                                            <p class="portfolio-cates">
                                                <a href="#">Design</a><span>/</span>
                                                <a href="#">Development</a>
                                            </p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="project-item projects-style-2">
                                <div class="projects-box">
                                    <div class="projects-thumbnail">
                                        <a href="portfolio-details-1.html">
                                            <img src="{{ asset('asset/images/d.jpg') }}" class="" alt="">                         
                                            <span class="overlay"></span>
                                        </a>
                                    </div>
                                    <div class="portfolio-info ">
                                        <div class="portfolio-info-inner">
                                            <a class="btn-link" href="htportfolio-details-1.html"><i class="flaticon-right-arrow-1"></i></a>
                                            <h5><a href="portfolio-details-1.html">eCommerce Website</a></h5>
                                            <p class="portfolio-cates">
                                                <a href="#">Design</a><span>/</span>
                                                <a href="#">Ideas</a>
                                            </p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="project-item projects-style-2">
                                <div class="projects-box">
                                    <div class="projects-thumbnail">
                                        <a href="portfolio-details-1.html">
                                            <img src="{{ asset('asset/images/e.jpg') }}" class="" alt="">                         
                                            <span class="overlay"></span>
                                        </a>
                                    </div>
                                    <div class="portfolio-info ">
                                        <div class="portfolio-info-inner">
                                            <a class="btn-link" href="htportfolio-details-1.html"><i class="flaticon-right-arrow-1"></i></a>
                                            <h5><a href="portfolio-details-1.html">Basics Project</a></h5>
                                            <p class="portfolio-cates">
                                                <a href="#">Design</a><span>/</span>
                                                <a href="#">Development</a>
                                            </p> 
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