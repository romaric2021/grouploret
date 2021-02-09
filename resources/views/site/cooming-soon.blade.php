@extends('site.layouts.app')
@section('content')
 <div id="content" class="site-content">
        
            <section class="coming-soon">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="cs-content">
                                <img src="images/logo-cs.png" class="attachment-full size-full" alt="">
                                <h2>Engitech is in the Works!</h2>
                                <ul class="ot-countdown unstyle" data-zone="0" data-date="11/13/2020" data-day="Day" data-days="Days" data-hour="Hour" data-hours="Hours" data-min="Minute" data-mins="Minutes" data-second="Second" data-seconds="Seconds">

                                    <li><span class="days">59</span><p class="days_text">Days</p></li>
                                    <li class="seperator">:</li>
                                    <li><span class="hours">14</span><p class="hours_text">Hours</p></li>
                                    <li class="seperator">:</li>
                                    <li><span class="minutes">46</span><p class="minutes_text">Minutes</p></li>
                                    <li class="seperator">:</li>
                                    <li><span class="seconds">21</span><p class="seconds_text">Seconds</p></li>

                                </ul>
                                <p>We are about to go live so watch this space!</p>
                                <form method="post" class="wpcf7-form init">
                                    <div class="cs-form">
                                    <span class="wpcf7-form-control-wrap your-email">
                                        <input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Your Email *"></span><button class="octf-btn">Sign Up</button>
                                    </div>
                                </form>
                                <div class="ft-list-icon">
                                    <a class="twitter" href="twitter.com"><i class="fab fa-twitter"></i></a>
                                    <a class="facebook" href="facebook.com"><i class="fab fa-facebook-f"></i></a>
                                    <a class="linkedin" href="linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                                    <a class="instagram" href="instagram.com"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@stop()