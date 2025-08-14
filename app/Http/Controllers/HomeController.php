<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Tools;
use App\Models\Contact;
use App\Models\Project;
use App\Models\MyJourney;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //method get data untuk halaman home
    public function index()
    {
        //ambil data tools
        $tools = Tools::where('status_id', 1)
            ->limit(8)
            ->get();

        //ambil data blog
        $blogs = Blog::where('status_id', 1)
            ->limit(3)
            ->get();

        //ambil data project
        $projects = Project::where('status_id', 1)
            ->get();

        //Get Data My Journey
        $education = MyJourney::where('key', 'education')->get();
        $experience = MyJourney::where('key', 'experience')->get();

        //get contact
        $contacts = Contact::get();

        return view("pages.home", compact('tools', 'blogs', 'projects', 'experience', 'education', 'contacts'));
    }

    public function contact(Request $request)
    {
        //Validasi Data
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'budget' => 'required',
            'massage' => 'required',
        ]);

        // Simpan data ke database
        Contact::create($validated);

        return redirect()->back()->with('success', 'Data kontak berhasil dikirim!');
    }
}
