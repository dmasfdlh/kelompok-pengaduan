<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class laporancontroller extends Controller
{
    public function index(){
        return view('admin.laporan-pengaduan.index');
    }
}
