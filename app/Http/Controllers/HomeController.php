<?php

namespace App\Http\Controllers;

use App\Models\Tools;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //method get data untuk halaman home
    public function index()
    {
        //ambil data tools
        $tools = Tools::where('status_id', 1)
            ->get();
        
        return view("pages.home", compact('tools'));
    }
}
