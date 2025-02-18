<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Dose;
use Illuminate\Support\Facades\Redirect;

class DoseController extends Controller
{
    public function index()
    {
        // $doses = dose::latest()->paginate(10);

        return Inertia::render('Admin/Medicine/Dose/Index', [

            'dose' => Dose::all(),

        ]);
    }


    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required',
        ]);


        Dose::create($attributes);

        return Redirect::route('dose.index')->with('success', 'Dose Add successfully');
    }


    public function update(Dose $dose)
    {
        $attributes = request()->validate([
            'name' => 'required',
            'company' => 'nullable'
        ]);

        $dose->update($attributes);

        return Redirect::route('dose.index')->with('success', 'Dose update successfully!');
    }


    public function destroy(Dose $dose)
    {
        $dose->delete();
        return Redirect::route('dose.index')->with('success', 'Dose deleted successfully!');
    }

}
