<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('category', 'technologies')->get();
        return response()->json([
            'success' => true,
            'data' => $projects
        ]);
    }

    public function show($slug)
    {
        $project = Project::with('category', 'technologies')->where('slug', $slug)->first();

        if ($project) {
            return response()->json([
                'success' => true,
                'data' => $project
            ]);
        } else {
            return response()->json([
                'success' => false,
                'error' => 'Nessun Post trovato.'
            ]);
        }
    }
}
