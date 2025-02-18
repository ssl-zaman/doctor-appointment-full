<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\DoseTime;
use Illuminate\Support\Facades\Redirect;

class DoseTimeController extends Controller
{
    public function index()
    {
        // $doses = dose::latest()->paginate(10);

        return Inertia::render('Admin/Medicine/DoseTime/Index', [

            'dosetime' => DoseTime::all(),

        ]);
    }


    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required',
        ]);


        DoseTime::create($attributes);

        return Redirect::route('dosetime.index')->with('flash', 'Dosetime Add successfully');
    }


    public function update(DoseTime $dosetime)
    {
        $attributes = request()->validate([
            'name' => 'required',
        ]);

        $dosetime->update($attributes);

        return Redirect::route('dosetime.index')->with('flash', 'Dosetime update successfully!');
    }


    public function destroy(DoseTime $dosetime)
    {
        $dosetime->delete();
        return Redirect::route('dosetime.index')->with('flash', 'Dosetime deleted successfully!');
    }

}
