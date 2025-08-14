<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('pages.projectshow');
    }

    public function showProject($id)
    {
        $project = Project::findOrFail($id);  
        return view('pages.projectshow', compact('project'));
    }
}
