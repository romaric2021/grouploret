<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VuController extends Controller
{
    //

   

     public function index()
    {
        return view('site/accueil');
    }

      public function ap()
    {
        return view('site/about-us');
    }

      public function co()
    {
        return view('site/contact');
    }

      public function bl()
    {
        return view('site/blog');
    }

      public function fa()
    {
        return view('site/faq');
    }

      public function it()
    {
        return view('site/it-services');
    }

      public function dm()
    {
        return view('site/mobile-development');
    }

      public function ne()
    {
        return view('site/our-team');
    }

      public function po()
    {
        return view('site/portfolio-carousel');
    }

      public function no()
    {
        return view('site/portfolio-masonry');
    }

      public function dw()
    {
        return view('site/web-development');
    }

      public function pq()
    {
        return view('site/why-choose-us');
    }

      public function nd()
    {
        return view('site/single-team');
    }

         public function nd1()
    {
        return view('site/single-team1');
    }


}
