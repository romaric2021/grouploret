<footer id="site-footer" class="site-footer footer-v1">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="widget-footer">
                        <h5 class="text-white">Services</h5>
                        <ul class="list-items">
                            <li class="list-item"><a href="{{ route('dw') }}">Développement Webt</a></li>
                            <li class="list-item"><a href="{{ route('dm') }}">Développement mobile</a></li>
                            <li class="list-item"><a href="{{ route('dm') }}">Applications à la demande</a></li>
                            <li class="list-item"><a href="{{ route('it') }}">Équipe dédiée</a></li>
                            <li class="list-item"><a href="dm">iOS et Android</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="widget-footer">
                        <h5 class="text-white">Apprendre</h5>
                        <ul class="list-items">
                            <li class="list-item"><a href="{{ route('it') }}">Plate-forme de médias sociaux</a></li>
                            <li class="list-item"><a href="{{ route('it') }}">Outils de gestion d’entreprise</a></li>
                            <li class="list-item"><a href="{{ route('it') }}">Jeux d’argent et paris Web Apps</a></li>
                            <li class="list-item"><a href="{{ route('it') }}">Application sports et fitness</a></li>
                            <li class="list-item"><a href="{{ route('it') }}">Logiciel en tant que service (SaaS)</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="widget-footer">
                        <h5 class="text-white">Société</h5>
                        <ul class="list-items">
                            <li class="list-item"><a href="{{ route('ap') }}">À propos de La Société</a></li>
                            <li class="list-item"><a href="{{ route('fa') }}">Pour les clients</a></li>
                            <li class="list-item"><a href="{{ route('bl') }}">Blog & Nouvelles</a></li>
                            <li class="list-item"><a href="{{ route('co') }}">Carrières et avis</a></li>
                            <li class="list-item"><a href="{{ route('co') }}">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="widget-footer">
                        <h5 class="text-white">s'inscrire</h5>
                        <p>Suivez notre newsletter pour rester informé de l’agence..</p>
                        <form  method="post" action="{{ route('news.storenews') }}">
                            @csrf
                            <div class="mc4wp-form-fields">
                                <div class="subscribe-inner-form">
                                    <input type="email" name="email" placeholder="Votre Email" required="">
                                    <button type="submit" class="subscribe-btn-icon"><i class="flaticon-telegram"></i></button>
                                </div>  
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row mt-65">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="images/logo-light.png" alt="" class="lazyloaded" data-ll-status="loaded">
                </div>
                <div class="col-md-6 text-left text-md-right align-self-center">
                    <p class="copyright-text">Copyright © 2020 Engitech par Loret. Tous droits réservés.</p>
                </div>
            </div>
        </div>
    </footer>