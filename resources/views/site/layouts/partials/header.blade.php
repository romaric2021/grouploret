<header id="site-header" class="site-header sticky-header header-static">
            <!-- Main Header start -->
            <div class="header-topbar style-2">
                <div class="octf-area-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <ul class="social-list">
                                    <li><a href="http://twitter.com" target="_self"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="http://facebook.com" target="_self"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="http://linkedin.com" target="_self"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="http://instagram" target="_self"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-md-8">
                                <ul class="topbar-info align-self-end clearfix">
                                    <li><a href="tel: +225-883-232-76"><i class="fas fa-phone-alt"></i> +225-07-883-232-76</a></li>
                                    <li><a href="mailto:info@loret.ci"><i class="fas fa-envelope"></i> info@grouploret.comi</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="octf-main-header">
                <div class="octf-area-wrap">
                    <div class="container octf-mainbar-container">
                        <div class="octf-mainbar">
                            <div class="octf-mainbar-row octf-row">
                                <div class="octf-col logo-col">
                                    <div id="site-logo" class="site-logo">
                                        <a href="index.html">
                                            <img src="{{ asset('asset/images/logo.svg') }}" alt="Engitech" class="">
                                        </a>
                                    </div>
                                </div>
                                <div class="octf-col menu-col">
                                    <nav id="site-navigation" class="main-navigation">
                                        <ul class="menu">
                                            <li class="n current-menu-item current-menu-ancestor">
                                                <a href="{{ route('accueil') }}">Accueil</a>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Entreprise</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('ap') }}">A-propos</a></li>
                                                    <li><a href="{{ route('pq') }}">Pourquoi nous</a></li>
                                                    <li><a href="{{ route('fa') }}">FAQ</a></li>

                                                    <!--
                                                    <li class="menu-item-has-children"><a href="shop.html">Shop</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="single-product.html">Single Product</a></li>
                                                            <li><a href="checkout-page.html">Checkout Page</a></li>
                                                            <li><a href="cart-page.html">Cart Page</a></li>
                                                        </ul>
                                                    </li>
                                                -->

                                                    <!--
                                                    <li><a href="404-error.html">404 Error</a></li>
                                                    <li><a href="cooming-soon.html">Coming Soon</a></li>
                                                    <li><a href="typography.html">Typography</a></li>
                                                    <li><a href="elements.html">Elements</a></li>
                                                -->
                                                </ul>
                                            </li>
                                            <!--
                                              <li class="menu-item-has-children"><a href="#">Nos dévéloppeurs</a>
                                                <ul class="sub-menu">
                                                     <li><a href="{{ route('nd') }}">Romaric ouangni</a></li>
                                                     <li><a href="{{ route('nd1') }}">Lonzo koffi</a></li>
                                                </ul>
                                            </li>
                                        -->
                                            <li class="menu-item-has-children"><a href="#">Services</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('it') }}">It Services</a></li>
                                                    <li><a href="{{ route('dw') }}">Développement web</a></li>
                                                    <li><a href="{{ route('dm') }}">Dévéloppement mobile</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Projects</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('po') }}">projets dev</a></li>
                                                    <li><a href="{{ route('no') }}">projets realisés</a></li>
                                                </ul>
                                            </li>
                                            <!--<li ><a href="{{ route('bl') }}">Blog</a></li>-->
                                            <li><a href="{{ route('co') }}">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="octf-col cta-col text-right">
                                <!-- Call To Action -->
                                    <div class="octf-btn-cta">

                                        <div class="octf-header-module cart-btn-hover">
                                            <div class="h-cart-btn octf-cta-icons">
                                                <a class="cart-icon" href="cart-page.html"><i class="flaticon-shopper"></i><span class="count">0</span></a>
                                            </div>

                                        </div>

                                        <div class="octf-header-module">
                                            <div class="toggle_search octf-cta-icons">
                                                <i class="flaticon-search"></i>
                                            </div>
                                            <!-- Form Search on Header -->
                                            <div class="h-search-form-field collapse">
                                                <div class="h-search-form-inner">
                                                    <form role="search" method="get" id="hsearch-form" class="search-form">
                                                        <label><span class="screen-reader-text">Search for:</span>
                                                        <input type="search" class="search-field" placeholder="Search …" value="" name="s"></label>
                                                        <button type="submit" class="search-submit"><i class="flaticon-search"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_mobile">
                <div class="container">
                    <div class="mlogo_wrapper clearfix">
                        <div class="mobile_logo">
                            <a href="index.html">
                                <img src="{{ asset('asset/images/logo.svg') }}" alt="Engitech">
                            </a>
                        </div>
                        <div id="mmenu_toggle">
                            <button></button>
                        </div>
                    </div>
                    <div class="mmenu_wrapper">
                        <div class="mobile_nav collapse">
                            <ul id="menu-main-menu" class="mobile_mainmenu">
                                <li class=" current-menu-item current-menu-ancestor">
                                    <a href="{{ route('accueil') }}">Accueil</a>

                                </li>
                                         <li class="menu-item-has-children"><a href="#">Entreprise</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('ap') }}">A-propos</a></li>
                                                    <li><a href="{{ route('pq') }}">Pourquoi nous</a></li>
                                                    <li><a href="{{ route('ne') }}">Notre equipe</a></li>
                                                    <li><a href="{{ route('nd') }}">Nos developpeur</a></li>
                                                    <li><a href="{{ route('fa') }}">FAQ</a></li>

                                                    <!--
                                                    <li class="menu-item-has-children"><a href="shop.html">Shop</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="single-product.html">Single Product</a></li>
                                                            <li><a href="checkout-page.html">Checkout Page</a></li>
                                                            <li><a href="cart-page.html">Cart Page</a></li>
                                                        </ul>
                                                    </li>
                                                -->

                                                    <!--
                                                    <li><a href="404-error.html">404 Error</a></li>
                                                    <li><a href="cooming-soon.html">Coming Soon</a></li>
                                                    <li><a href="typography.html">Typography</a></li>
                                                    <li><a href="elements.html">Elements</a></li>
                                                -->
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Services</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('it') }}">It Services</a></li>
                                                    <li><a href="{{ route('dw') }}">Web Development</a></li>
                                                    <li><a href="{{ route('dm') }}">Mobile Development</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Projects</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('po') }}">Portfolio</a></li>
                                                    <li><a href="{{ route('no') }}">Portfolio Carousel</a></li>
                                                </ul>
                                            </li>
                                            <li ><a href="{{ route('bl') }}">Blog</a>

                                            </li>
                                            <li><a href="{{ route('co') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
             @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}
            </div>
        @endif
        </header>
