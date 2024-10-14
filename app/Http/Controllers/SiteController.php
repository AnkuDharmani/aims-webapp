<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function price(){
        return view('pages.price');
    }

    public function service(){
        return view('pages.service');
    }

    public function single(){
        return view('pages.single');
    }

    public function blog(){
        return view('pages.blog');
    }

    public function joinTeam(){
        return view('pages.join_team');
    }
    public function joinNow(){
        return view('pages.join_now');
    }
}
