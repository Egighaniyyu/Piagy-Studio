<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home()
    {
        return view('frontend/index');
    }

    public function challenge()
    {
        return view('frontend/challenge');
    }

    public function mentoring()
    {
        return view('frontend/mentoring');
    }

    public function unlimited_download()
    {
        return view('frontend/get_unlimited_download');
    }

    public function detail_product()
    {
        return view('frontend/detail_product');
    }

    public function about()
    {
        return view('frontend/about');
    }
}
