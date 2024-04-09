<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    // Ana sayfa için metod
    public function index()
    {
        return view('pages.home');
    }

    // Hizmetlerimiz sayfası için metod
    public function iletisim()
    {
        return view('iletisim');
    }


    // Teklif al formu sayfası için metod


}
