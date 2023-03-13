<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function one(){
        return view ('program', [
            'judul' => 'Event'
        ]);
    }
    public function two(){
        return view ('program', [
            'judul' => 'Karir'
        ]);
    }
    public function three(){
        return view ('program', [
            'judul' => 'Magang'
        ]);
    }
    public function four(){
        return view ('program', [
            'judul' => 'Kunjungan Industri'
        ]);
    }   
}