<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard(){
        return view('home');
    }
    public function peserta(){
        return view('data-peserta');
    }
    public function instruktur(){
        return view('data-instruktur');
    }
    public function importdata_instruktur(){
        return view('importDataInstruktur');
    }
    public function data_event(){
        return view('data-event');
    }
    public function tambahdata_event(){
        return view('tambahDataEvent');
    }
}
