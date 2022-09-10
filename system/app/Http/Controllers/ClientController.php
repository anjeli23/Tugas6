<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class ClientController extends Controller
{
    function showHome()
    {
        return view('template.home');
    }

    function showProduct()
    {
        $data['list_produk'] = Produk::all();
        return view('template.product', $data);
    }

    function showRegis()
    {
        return view('template.register');
    }
}
