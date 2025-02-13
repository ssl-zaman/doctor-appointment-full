<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dose;
use App\Models\DoseTime;
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
            'medicines' => $medicines,
            'dose' => Dose::all(),
            'doseTime' => DoseTime::all(),
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





    // dose  method
    public function dose_destroy(Dose $dose)
    {
        $dose->delete();

        return Inertia::render('medicine.index');
    }
}
