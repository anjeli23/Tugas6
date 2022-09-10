<?php

namespace App\Http\controllers;


class HomeController extends Controller
{


    function showberanda()
    {
        return view('template2.beranda');
    }

    function showproduk()
    {
        return view('template2.produk');
    }
    function showkategori()
    {
        return view('template2.kategori');
    }
}
