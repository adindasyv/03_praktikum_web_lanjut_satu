<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view ('product', [
            'judul' => 'Produk'
        ]);
    }
    public function one(){
        return view ('product', [
            'judul' => 'Marbel Edu Games'
        ]);
    }
    public function two(){
        return view ('product', [
            'judul' => 'Marbel and Friends Kids Games'
        ]);
    }
    public function three(){
        return view ('product', [
            'judul' => 'Riri Story Books'
        ]);
    }
    public function four(){
        return view ('product', [
            'judul' => 'Kolak Kids Songs'
        ]);
    }   
}
