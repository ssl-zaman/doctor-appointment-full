<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Services;
use App\Models\Solution;
use App\Models\Admin\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::with('components')->get();

        $services = Services::latest()->where('status', 'active')->limit(4)->get();
        $solutions = Solution::latest()->where('status', 'active')->limit(8)->get();
        return view('home', [
            'sliders' => $sliders,
            'services' => $services,
            'solutions' => $solutions,
        ]);
    }
}
