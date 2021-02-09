@extends('site.layouts.app')
@section('content')
 <div id="content" class="site-content">
            <div class="page-header flex-middle">
                <div class="container">
                    <div class="inner flex-middle">
                        <h1 class="page-title">Dévéloppeur full stack</h1>
                        <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="{{ route('accueil') }}">Accueil</a></li>
                            <li class="active">Dévéloppeur full stack</li>
                        </ul>    
                    </div>
                </div>
            </div>
            <section class="team-about sm-space">
                <div class="container">
                    <div class="steam-info">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="team-info-left">
                                    <div class="team-img">
                                        <img src="https://via.placeholder.com/710x740.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="team-detail">
                                    <h2>Ouangni romaric</h2>
                                    <span class="location">PDG DE LA SOCIÉTÉ</span>
                                    <ul class="bold member-info">
                                        <li><span class="text-dark">Département:</span> Développement Web</li>
                                        <li><span class="text-dark">Experience:</span> 1 Years</li>
                                        <li><span class="text-dark">Email:</span> romaric747@mail.com</li>
                                        <li><span class="text-dark">Phone:</span> +225 88-32-32-76</li>
                                    </ul>
                                    <div class="otf-social-share clearfix shape-circle">
                                        <a class="share-facebook" href="facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a class="share-twitter" href="twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a class="share-pinterest" href="pinterest.com" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                                        <a class="share-linkedin" href="linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="team-slills">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3>Biographie</h3>
                            <p>Une grande majorité des spécialistes du marketing d’applications se concentrent principalement sur les techniques et les mesures de marketing des applications post-lancement, tout en manquant complètement la campagne de pré-lancement. Cela empêche l’application de créer buzz et hype juste autour du moment où l’application est lancée. Comme et quand vous lancez l’application, déjà un nombre considérable de personnes devraient attendre avec impatience à votre application et cela nécessite des efforts de marketing de longue haleine menant à l’événement de lancement de l’application. Pour créer le buzz et le battage médiatique pré-lancement sur l’application une société de<span class="text-second">développement d’applications mobiles</span> a un éventail d’options de marketing comme la campagne de médias sociaux, annonces de moteur de recherche, annonces vidéo, campagnes e-mail, etc. Outre les options en ligne, vous pouvez également atteindre le public plus large avec des options de marketing traditionnelles comme les annonces en plein air, annonces imprimées, annonces dans les médias, et des événements promotionnels.</p>
                        </div>
                    </div>
                    <div class="space-25"></div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 text-center text-md-left">
                            <div class="team-profile">
                                <h6>Société Onum</h6>
                                <p>Concepteur web, Illustrator</p>
                            </div>
                            <div class="team-profile">
                                <h6>Media Group</h6>
                                <p>Photographe, Concepteur d’interface utilisateur (UI Designer)</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 text-center text-md-left">
                            <div class="team-profile">
                                <h6>Société Onum</h6>
                                <p>Concepteur webr, Illustrator</p>
                            </div>
                            <div class="team-profile">
                                <h6>Nimkus 2000</h6>
                                <p>Développeur PHP, Photographer</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 mb-4">
                            <div class="circle-progress flex-middle" data-color="#43BAFF" data-height="10" data-size="135">
                                <div class="inner-bar" data-percent="50">
                                    <span><span class="percent">0</span>%</span>
                                </div>
                                <h4> Development<br>Mobile</h4>        
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 mb-4">
                            <div class="circle-progress flex-middle" data-color="#43BAFF" data-height="10" data-size="135">
                                <div class="inner-bar" data-percent="70">
                                    <span><span class="percent">0</span>%</span>
                                </div>
                                <h4> Development<br>portable</h4>        
                            </div>
                        </div>
                    </div>
                    <div class="space-25"></div>
                    <div class="row">
                        <div class="col-lg-12">
                            <h3>Compétences dures</h3>
                            <p>Tout comme on se souvient d’une entreprise de détail dans la vie réelle non seulement pour ses offres de produits, mais aussi en raison de ses services, son soutien et sa convivialité, une application qui offre un  <span class="text-dark bold"> système de soutien à la clientèle utile</span> pour ses utilisateurs appréciés bénéficient de plus de traction et d’engagement que d’autres applications. Les grandes marques du monde entier jouissent de l’appréciation et de la popularité grâce à leur soutien et services adaptés aux clients.</p>
                        </div>
                    </div>
                </div>
            </section>
           
            
        </div>

@stop()