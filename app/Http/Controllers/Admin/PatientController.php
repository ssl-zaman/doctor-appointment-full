<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Appointment::latest()->get();

        return Inertia::render('Admin/Patient/Index',[
            'patients' => $patients
        ]);
    }
}
