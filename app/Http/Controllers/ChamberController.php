<?php

namespace App\Http\Controllers;

use App\Models\DoctorChamber;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ChamberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Admin/Chamber/Index', [
            'chambers' => DoctorChamber::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Admin/Chamber/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'location'       => 'required|string|max:255',
            'hospital_name'  => 'required|string|max:255',
            'contact_number' => 'required|string|max:20',
            'notes'          => 'nullable|string',
        ]);


        DoctorChamber::create($validatedData);


        return redirect()->route('chambers.index')->with('flash', 'Chamber created successfully.');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DoctorChamber $chamber)
    {
        return Inertia::render('Admin/Chamber/Edit', [
            'chamber' => $chamber
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DoctorChamber $chamber)
    {
        $validatedData = $request->validate([
            'location'       => 'required|string|max:255',
            'hospital_name'  => 'required|string|max:255',
            'contact_number' => 'required|string|max:20',
            'notes'          => 'nullable|string',
        ]);


        $chamber->update($validatedData);

        return redirect()->route('chambers.index')->with('flash', 'Chamber updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DoctorChamber $chamber)
    {
        $chamber->delete();

        return redirect()->route('chambers.index')->with('flash', 'Chamber delete successfully.');
    }
}
