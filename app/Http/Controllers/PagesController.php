<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('landing_page.index');
    }
    
    public function login(){
        return view('landing_page.login');
    }
    
    public function contact(){
        return view('landing_page.contact_us');
    }
    
    public function faq(){
        return view('landing_page.faq');
    }
    
    public function visimisi(){
        return view('landing_page.visi_misi');
    }
    
    public function struktur(){
        return view('landing_page.struktur_organisasi');
    }
    
    public function tentang(){
        return view('landing_page.tentang');
    }
    
    public function anjab_abk(){
        return view('landing_page.anjab_abk');
    }
    
    public function bacaan(){
        return view('landing_page.bacaan');
    }
    
    public function berita(){
        return view('landing_page.berita');
    }
}
