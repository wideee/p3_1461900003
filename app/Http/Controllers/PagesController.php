<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function data(){
        return view('data0003');
    }
    public function pasien(){
        return view('siswa0003');
    }
    public function dokter(){
        return view('guru0003');
    }
    public function kamar(){
        return view('kelas0003');
    }
}