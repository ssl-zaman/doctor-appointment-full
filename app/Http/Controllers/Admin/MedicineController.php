<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Medicine;
use Illuminate\Http\Request;
use Inertia\Inertia;

use Illuminate\Support\Facades\Redirect;

class MedicineController extends Controller
{
    public function index()
    {
        $medicines = Medicine::latest()->paginate(10);

        return Inertia::render('Admin/Medicine/Index', [
            'medicines' => $medicines
        ]);
    }


    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required',
            'company' => 'nullable'
        ]);


        Medicine::create($attributes);

        return Redirect::route('medicine.index')->with('success', 'Medicine Add successfully');
    }


    public function update(Medicine $medicine)
    {
        $attributes = request()->validate([
            'name' => 'required',
            'company' => 'nullable'
        ]);

        $medicine->update($attributes);

        return Redirect::route('medicine.index')->with('success', 'Medicine update successfully!');
    }


    public function destroy(Medicine $medicine)
    {
        $medicine->delete();
        return Redirect::route('medicine.index')->with('success', 'Medicine deleted successfully!');
    }
}
