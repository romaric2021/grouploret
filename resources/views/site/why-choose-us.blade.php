@extends('site.layouts.app')
@section('content')
 <div id="content" class="site-content">
            <div class="page-header flex-middle">
                <div class="container">
                    <div class="inner flex-middle">
                        <h1 class="page-title">Pourquoi nous choisir</h1>
                        <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="index.html">Accueil</a></li>
                            <li class="active">Pourquoi nous choisir</li>
                        </ul>    
                    </div>
                </div>
            </div>
            <section class="why-choose-us">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <img src="{{ asset('asset/images/3.JPG') }}" alt="">
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="why-right">
                                <div class="ot-heading">
                                    <span>// à propos de la société</span>
                                    <h2 class="main-heading">Votre partenaire pour<br> L'innovation logicielle</h2>
                                </div>
                                <p class="mb-15">Engitech est le partenaire de choix de nombreuses entreprises, PME et challengers technologiques parmi les plus importantes au monde. Nous aidons les entreprises à augmenter leur valeur grâce au développement de logiciels personnalisés, à la conception de produits, à l'assurance qualité et à des services de conseil.</p>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="icon-box-s1">
                                            <div class="icon-main"><span class="flaticon-medal"></span></div>
                                            <h5>Experience</h5>
                                            <div class="line-box"></div>
                                            <p>Notre grande équipe de plus de 1400 experts en logiciels.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="icon-box-s1">
                                            <div class="icon-main"><span class="flaticon-gear"></span></div>
                                            <h5>Assistance rapide</h5>
                                            <div class="line-box"></div>
                                            <p>Nous vous aiderons à tester de nouvelles idées audacieuses tout en partageant votre.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="pt-0 pb-290">
                <div class="container">
                    <div class="row mt--130">
                        <div class="col-md-6 col-sm-12 mb-4 mb-md-0">
                            <div class="misc-box text-white misc-box-bg1">
                                <div class="ot-counter">
                                    <div>
                                        <span class="num" data-to="15" data-time="2000">0</span>
                                        <span>+</span>
                                    </div>                    
                                </div>
                                <h5>Pays du monde</h5>
                                <p>Pour réussir, chaque solution logicielle doit être profondément intégrée dans l'environnement technologique existant.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="misc-box misc-box-bg2">
                                <div class="ot-counter">
                                    <div>
                                        <span class="num" data-to="23" data-time="2000">0</span>
                                        <span>k</span>
                                    </div>                    
                                </div>
                                <h5>Clients satisfaits</h5>
                                <p>Pour réussir, chaque solution logicielle doit être profondément intégrée dans l'environnement technologique existant.</p>
                            </div>
                        </div>
                    </div>
                    <div class="space-120"></div>
                    <div class="row">
                        <div class="col-md-8 col-sm-8 mb-4 mb-sm-0">
                            <div class="ot-heading mb-0">
                                <span>// Nos Services</span>
                                <h2 class="main-heading">Nous offrons une large <br> gamme de services informatiques</h2>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 text-sm-right align-self-end">
                            <div class="ot-button">
                                <a href="it-services.html" class="octf-btn octf-btn-primary">tous les services</a>
                            </div>
                            <div class="space-10"></div>
                        </div>
                    </div>
                    <div class="space-55"></div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="icon-box-s2 s1 pb-60">
                                <div class="icon-main"><span class="flaticon-code"></span></div>
                                <div class="content-box">
                                    <h5>Development Web</h5>
                                    <p>Nous possédons plus que de bonnes compétences en codage. 
                                        Notre expérience nous distingue des autres développements Web.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="icon-box-s2 s1 pb-60">
                                <div class="icon-main"><span class="flaticon-app"></span></div>
                                <div class="content-box">
                                    <h5>Development Mobile </h5>
                                    <p>Créez des logiciels d'entreprise complexes, assurez une intégration logicielle fiable, 
                                        modernisez votre système hérité.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="icon-box-s2 s1 pb-60">
                                <div class="icon-main"><span class="flaticon-monitor"></span></div>
                                <div class="content-box">
                                    <h5>Conception (design) UI / UX</h5>
                                    <p>Créez le produit dont vous avez besoin à temps avec une équipe expérimentée 
                                        qui utilise un processus de conception clair et efficace.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="icon-box-s2 s1 sm-pb-60">
                                <div class="icon-main"><span class="flaticon-browser"></span></div>
                                <div class="content-box">
                                    <h5>Contrôle qualité et tests</h5>
                                    <p>Faites appel à nos experts pour effectuer des tests et des audits complets et en plusieurs étapes de votre logiciel.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="icon-box-s2 s1 xs-pb-60">
                                <div class="icon-main"><span class="flaticon-report-1"></span></div>
                                <div class="content-box">
                                    <h5>Conseil informatique</h5>
                                    <p>Faites confiance à nos meilleurs cerveaux pour éliminer les problèmes de flux de travail, 
                                        mettre en œuvre de nouvelles technologies et consolider les portefeuilles d'applications.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="icon-box-s2 s1">
                                <div class="icon-main"><span class="flaticon-best"></span></div>
                                <div class="content-box">
                                    <h5>Équipe dédiée</h5>
                                    <p>Au cours de la dernière décennie, nos clients ont réussi en tirant parti du processus de construction 
                                        et de motivation d’Intellectsoft.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           
         
            
        </div>

@stop()