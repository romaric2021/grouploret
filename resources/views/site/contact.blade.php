@extends('site.layouts.app')
@section('content')
 @if(Session::has('Merci'))
            <div class="alert alert-success">
                {{Session::get('Merci')}}
            </div>
        @endif
 <div id="content" class="site-content">
            <div class="page-header flex-middle">
                <div class="container">
                    <div class="inner flex-middle">
                        <h1 class="page-title">Contact</h1>
                        <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="index.html">Accueil</a></li>
                            <li class="active">Contact</li>
                        </ul>    
                    </div>
                </div>
            </div>
            <section class="contact-page">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact-left">
                                <div class="ot-heading">
                                    <span>// coordonnée</span>
                                    <h2 class="main-heading">Contactez-nous</h2>
                                </div>
                                <div class="space-5"></div>
                                <p>Appelez-nous ou passez à tout moment, nous nous efforçons de répondre à toutes les demandes de renseignements dans les 24 heures les jours ouvrables. Nous serons heureux de répondre à vos questions.</p>
                                <div class="contact-info box-style1">
                                    <i class="flaticon-world-globe"></i>                    
                                    <div class="info-text">
                                        <h6>Notre adresse:</h6>
                                        <p>0022 Côte D'ivoire, Abidjan, CI</p>
                                    </div>
                                </div>
                                <div class="contact-info box-style1">
                                    <i class="flaticon-envelope"></i>
                                    <div class="info-text">
                                        <h6>Notre boîte aux lettres:</h6>
                                        <p>info@loret.ci</p>
                                    </div>
                                </div>
                                <div class="contact-info box-style1">
                                    <i class="flaticon-phone-1"></i>
                                    <div class="info-text">
                                        <h6>Notre téléphone::</h6>
                                        <p>+225 -883-232-76</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <form action="{{ route('contact.storecontact') }}" method="post" class="wpcf7">
                                @csrf
                                <div class="main-form">
                                    <h2>Prêt à démarrer?</h2>
                                    <p class="font14">Votre adresse e-mail ne sera pas publiée. Les champs requis sont marqués *</p>
                                    <p>
                                        <input type="text" name="nom" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Entrez votre nom complet *" required>
                                    </p>
                                    <p>
                                        <input type="email" name="email" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Votre Email *" required>
                                    </p>
                                     <p>
                                        <input type="text" name="numero" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Votre numéro exple 88323245 *" required>
                                    </p>
                                    <p>
                                        <textarea name="message" cols="40" rows="10" class="" aria-invalid="false" placeholder="Message..." required></textarea>
                                    </p>
                                    <p><button type="submit" class="octf-btn octf-btn-light">ENVOYER UN MESSAGE</button>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <div class="no-padding">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d86077.66255184308!2d-122.40402224079803!3d47.60810999586645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54906ab3f905c4b1%3A0x96bf575ff75ab1aa!2s411%20University%20St%2C%20Seattle%2C%20WA%2098101%2C%20Hoa%20K%E1%BB%B3!5e0!3m2!1svi!2s!4v1584084043716!5m2!1svi!2s" height="500" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
@stop()