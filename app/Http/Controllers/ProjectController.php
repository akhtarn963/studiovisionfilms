<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Production;
use App\Models\Gallery;

class ProjectController extends Controller
{
    public function getAllProjects(){

    $projects = Production::with('cast')->latest()->paginate(10);

        return view('projects', compact('projects'));

    }

    public function projectDetail($slug){
       $project = Production::where('slug', $slug)
        ->where('is_published', true)
        ->firstOrFail();

        $relatedProjects = Production::where('genre', '=', $project->genre)
            ->where('id', '!=', $project->id)
            ->where('is_published', true)
            ->inRandomOrder()
            ->take(6)
            ->get();


        return view('project_detail', compact('project', 'relatedProjects')); 
    }

    public function getAllGalleryImages(){
        $genres = Config('productions.genres');
        $galleryImages = Gallery::with('production')->latest()->paginate(10);

        return view('gallery', compact('galleryImages', 'genres'));
    }
}
