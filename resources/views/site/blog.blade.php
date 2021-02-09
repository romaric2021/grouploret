@extends('site.layouts.app')
@section('content')
        <div id="content" class="site-content">
            <div class="page-header flex-middle">
                <div class="container">
                    <div class="inner flex-middle">
                        <h1 class="page-title">Blog</h1>
                        <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="{{ route('accueil') }}">Accueil</a></li>
                            <li class="active">Blog</li>
                        </ul>    
                    </div>
                </div>
            </div>
        </div>

        <div class="entry-content">
            <div class="container">
                <div class="row">
                    <div class="content-area col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <article class="post-box">
                            <div class="post-inner">
                                <div class="entry-media">
                                    <div class="post-cat">
                                        <span class="posted-in"><a href="#">Design</a> <a href="#">Development</a></span>
                                    </div>
                                    <a href="post.html"><img src="https://via.placeholder.com/870x520.png" alt=""></a>
                                </div>
                                <div class="inner-post">
                                    <div class="entry-header">
                                        <div class="entry-meta">
                                            <span class="posted-on">_ <a href="#">November 21, 2019</a></span>
                                            <span class="byline">_ <a class="url fn n" href="#">Tom Black</a></span>
                                            <span class="comment-num">_ <a href="#">3 Comments</a></span>
                                        </div>
                                        <h3 class="entry-title"><a href="post.html">How Web Apps Can Benefit Online Stores?</a></h3>
                                    </div>
                                    <div class="entry-summary the-excerpt">
                                        <p>The basic premise of search engine reputation management is to use the following three strategies to accomplish the goal of creating a completely positive first page of search engine results for a specific term…</p>
                                    </div>
                                    <div class="btn-readmore"><a href="post.html"><i class="flaticon-right-arrow-1"></i> LEARN MORE</a></div>
                                </div>
                            </div>
                        </article>
                    
                    </div>
                    <div class="widget-area primary-sidebar col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <aside id="author_widget-1" class="widget engitech_author-widget">
                            <div class="author-widget_wrapper text-center">
                                <div class="author-widget_image-wrapper">
                                    <img class="author-widget_image" src="https://via.placeholder.com/270x375.png" alt="Jina Peterson">
                                </div>
                                <div class="author-widget_info">
                                    <h5 class="author-widget_title">Jina Peterson</h5>
                                    <p class="author-widget_text">She is the CEO. She's a big fan her cat Tux, &amp; dinner parties.</p>
                                    <div class="author-widget_social">
                                        <a class="social-twitter" href="twitter.com"><i class="fab fa-twitter"></i></a>
                                        <a class="social-facebook" href="facebook.com"><i class="fab fa-facebook-f"></i></a>
                                        <a class="social-linkedin" href="linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                                        <a class="social-instagram" href="instagram.com"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <aside class="widget widget_categories">
                            <h5 class="widget-title">Categories</h5>
                            <ul>
                                <li><a href="#">Design</a> <span class="posts-count">(3)</span></li>
                                <li><a href="#">Development</a> <span class="posts-count">(5)</span></li>
                                <li><a href="#">Startup</a> <span class="posts-count">(1)</span></li>
                                <li><a href="#">Technology</a> <span class="posts-count">(3)</span></li>
                            </ul>
                        </aside>
                        <aside id="search-2" class="widget widget_search">
                            <form role="search" method="get" id="search-form" class="search-form">
                                <input type="search" class="search-field" placeholder="Search…" value="" name="s">
                                <button type="submit" class="search-submit"><i class="flaticon-search"></i></button>
                            </form>
                        </aside>
                        <aside class="widget widget_recent_news">
                            <h5 class="widget-title">Recent Posts</h5>
                            <ul class="recent-news clearfix">
                                <li class="clearfix"> 
                                    <div class="thumb">
                                        <a href="post.html"><img src="https://via.placeholder.com/70x70.png" alt=""></a>
                                    </div>
                                    <div class="entry-header">
                                        <h6><a href="post.html">Plan Your Project  with Your Software</a></h6>
                                        <span class="post-on"><span class="entry-date">November 21, 2019</span></span>
                                    </div>
                                </li>
                      
                                <li class="clearfix"> 
                                    <div class="thumb">
                                        <a href="post.html"><img src="https://via.placeholder.com/70x70.png" alt=""></a>
                                    </div>
                                    <div class="entry-header">
                                        <h6><a href="post.html">You have a Great  Business Idea?</a></h6>
                                        <span class="post-on"><span class="entry-date">November 21, 2019</span></span>
                                    </div>
                                </li>
                      
                                <li class="clearfix"> 
                                    <div class="thumb">
                                        <a href="post.html"><img src="https://via.placeholder.com/70x70.png" alt=""></a>
                                    </div>
                                    <div class="entry-header">
                                        <h6><a href="post.html">Building Data Analytics  Software</a></h6>
                                        <span class="post-on"><span class="entry-date">September 24, 2019</span></span>
                                    </div>
                                </li>
                            </ul>
                        </aside>
                        <aside class="widget instagram_widget">
                            <h5 class="widget-title">Instagram</h5>
                            <div class="widget-insta-feeds instafeed-gallery">
                                <div class="instafeed-item">
                                    <a href="#" target="_blank"><img src="https://via.placeholder.com/320x320.png" alt=""></a>
                                </div>
                                <div class="instafeed-item">
                                    <a href="#" target="_blank"><img src="https://via.placeholder.com/320x320.png" alt=""></a>
                                </div>
                                <div class="instafeed-item">
                                    <a href="#" target="_blank"><img src="https://via.placeholder.com/320x320.png" alt=""></a>
                                </div>
                                <div class="instafeed-item">
                                    <a href="#" target="_blank"><img src="https://via.placeholder.com/320x320.png" alt=""></a>
                                </div>
                                <div class="instafeed-item">
                                    <a href="#" target="_blank"><img src="https://via.placeholder.com/320x320.png" alt=""></a>
                                </div>
                                <div class="instafeed-item">
                                    <a href="#" target="_blank"><img src="https://via.placeholder.com/320x320.png" alt=""></a>
                                </div>
                            </div>
                        </aside>
                        <aside class="widget widget_tag_cloud">
                            <h5 class="widget-title">Tags</h5>
                            <div class="tagcloud">
                                <a href="#">business</a>
                                <a href="#">marketing</a>
                                <a href="#">SEO</a>
                                <a href="#">SMM</a>
                                <a href="#">solution</a>
                                <a href="#">startup</a>
                                <a href="#">strategy</a>
                                <a href="#">tips</a>
                            </div>
                        </aside>
                       
                    </div>
                </div>
            </div>
        </div>

@stop()