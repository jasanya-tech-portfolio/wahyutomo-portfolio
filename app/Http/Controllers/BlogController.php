<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //method get data blog di home
    public function index()
    {
        $blogs = Blog::where('status_id', 1)
            ->limit(2)
            ->get();

        return view("pages.home", compact('blogs'));
    }
}
