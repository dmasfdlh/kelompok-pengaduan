<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Updatecontroller extends Controller
{
    public function index()
    {
        return view('admin.update-pengaduan.index');
    }
}
