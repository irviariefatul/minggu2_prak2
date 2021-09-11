<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return 'NIM  : 2031710036 Nama : Irvi Ariefatul Julia Putri';
    }

    public function articles($id){
        return  'Halaman Artikel dengan ID '.$id;
    }
}
