<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servies = Services::latest()->get();

        return Inertia::render('Admin/Services/Index', [
            'services' => $servies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Admin/Services/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {



        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Max 2MB file
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Max 2MB file
        ]);


        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('services', 'public'); // Store in storage/app/public/sliders
        }

        $iconPath = null;
        if ($request->hasFile('icon')) {
            $iconPath = $request->file('icon')->store('services', 'public'); // Store in storage/app/public/sliders
        }

        // Create a new slider record
        Services::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imagePath,
            'icon' => $iconPath,
        ]);

        return redirect()->route('services.index')->with('flash', 'Services created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Services $service)
    {
        return Inertia::render('Admin/Services/Edit', [
            'service' => $service
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Services $service)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Max 2MB file
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Max 2MB file
        ]);



        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('services', 'public'); // Store in storage/app/public/sliders
        }else {
            $imagePath = $service->image;
        }


        $iconPath = null;
        if ($request->hasFile('icon')) {
            $iconPath = $request->file('icon')->store('services', 'public'); // Store in storage/app/public/sliders
        }else {
            $iconPath = $service->icon;
        }
        // Create a new slider record
        $service->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imagePath,
            'icon' => $iconPath,
        ]);

        return redirect()->route('services.index')->with('flash', 'Services update successfully.');
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Services $service)
    {

        if ($service->image && Storage::exists($service->image)) {
            Storage::delete($service->image);
        }


        $service->delete();

        return redirect()->route('services.index')->with('flash', 'Service deleted successfully.');
    }


    public function statusToggle(Services $service)
    {
        if($service->status === 'active'){
            $service->status = 'inactive';
        }else {
            $service->status = 'active';
        }

        $service->save();

        return redirect()->route('services.index')->with('flash', 'Service status change  successfully.');
    }
}
