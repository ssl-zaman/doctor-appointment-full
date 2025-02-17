<?php

namespace App\Http\Controllers;

use App\Models\Solution;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Storage;

class SolutionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $solutions = Solution::latest()->get();

        return Inertia::render('Admin/Solution/Index', [
            'solutions' => $solutions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Admin/Solution/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Max 2MB file
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('solutions', 'public'); // Store in storage/app/public/solutions
        }

        // Create a new solution record
        Solution::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('solutions.index')->with('flash', 'Solution created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Solution $solution)
    {
        return Inertia::render('Admin/Solution/Edit', [
            'solution' => $solution
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Solution $solution)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Max 2MB file
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('solutions', 'public'); // Store in storage/app/public/solutions
        } else {
            $imagePath = $solution->image;
        }

        // Update the solution record
        $solution->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('solutions.index')->with('flash', 'Solution updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Solution $solution)
    {
        // Delete the image if it exists
        if ($solution->image && Storage::exists($solution->image)) {
            Storage::delete($solution->image);
        }

        // Delete the solution record
        $solution->delete();

        return redirect()->route('solutions.index')->with('flash', 'Solution deleted successfully.');
    }

    /**
     * Toggle the status of the solution.
     */
    public function statusToggle(Solution $solution)
    {
        if ($solution->status === 'active') {
            $solution->status = 'inactive';
        } else {
            $solution->status = 'active';
        }

        $solution->save();

        return redirect()->route('solutions.index')->with('flash', 'Solution status changed successfully.');
    }
}
