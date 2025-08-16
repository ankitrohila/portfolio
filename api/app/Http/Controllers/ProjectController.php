<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Fetch all projects
    public function index()
    {
        return response()->json(Project::all());
    }

    // Fetch single project
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return response()->json($project);
    }

    // Store new project
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'technologies' => 'nullable|string',
            'github_link' => 'nullable|url',
            'live_link' => 'nullable|url',
            'image' => 'nullable|string',
        ]);

        $project = Project::create($validated);
        return response()->json($project, 201);
    }

    // Update project
    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'technologies' => 'nullable|string',
            'github_link' => 'nullable|url',
            'live_link' => 'nullable|url',
            'image' => 'nullable|string',
        ]);

        $project->update($validated);
        return response()->json($project);
    }

    // Delete project
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return response()->json(['message' => 'Project deleted successfully']);
    }
}
