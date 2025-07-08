<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Project;
use App\Models\Tools;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //method get data untuk halaman home
    public function index()
    {
        //ambil data tools
        $tools = Tools::where('status_id', 1)
            ->limit(6)
            ->get();

        //ambil data blog
        $blogs = Blog::where('status_id', 1)
            ->limit(3)
            ->get();

        //ambil data project
        $projects = Project::where('status_id', 1)
            ->limit(3)
            ->get();
        
        return view("pages.home", compact('tools', 'blogs', 'projects'));
    }
}
