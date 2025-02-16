<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Admin\Slider;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index()
    {
        $slides = Slider::with('components')->get();

        return Inertia::render('Admin/Slider/Index', [
            'slides' => $slides
        ]);
    }

    public function create()
    {
        return Inertia::render('Admin/Slider/Create');
    }




    public function store(Request $request)
    {

        // dd(request()->all());
        $request->validate([
            'title1' => 'required|string|max:255',
            'title2' => 'required|string|max:255',
            'image' => 'required|image|max:2048',
            'components' => 'required|array|min:2',
            'components.*.title' => 'required|string|max:255',
            'components.*.description' => 'required|string',
            'components.*.image' => 'required|image|max:2048',
        ],[
                'title1.required' => 'The first title is required.',
                'title2.required' => 'The second title is required.',
                'image.required' => 'Please upload an image.',
                'image.image' => 'The file must be a valid image format (jpeg, png, etc.).',
                'image.max' => 'The image size must not exceed 2MB.',

                'components.required' => 'At least two components are required.',
                'components.min' => 'You need to add at least two components.',

                'components.*.title.required' => 'Each component must have a title.',
                'components.*.title.max' => 'Component title must not exceed 255 characters.',

                'components.*.description.required' => 'Each component must have a description.',

                'components.*.image.required' => 'Each component must have an image.',
                'components.*.image.image' => 'Each component image must be a valid image file.',
                'components.*.image.max' => 'Each component image must not exceed 2MB.',
        ]);



        // Store images and save data
        $slide = Slider::create([
            'title1' => $request->title1,
            'title2' => $request->title2,
            'image' => $request->file('image')->store('slides', 'public'),
        ]);

        foreach ($request->components as $component) {
            $slide->components()->create([
                'title' => $component['title'],
                'description' => $component['description'],
                'image' => $component['image']->store('components', 'public'),
            ]);
        }


        return redirect()->route('slider.index')->with('flash', 'Slider created successfully');

    }


    public function edit(Slider $slider)
    {
        $slider->load('components');

        return Inertia::render('Admin/Slider/Edit', [
            'slider' => [
                'id' =>  $slider->id,
                'title1' => $slider->title1,
                'title2' => $slider->title2,
                'image' => asset('storage/' . $slider->image),  // Generate the correct asset URL
                'components' => $slider->components->map(function ($component) {
                    return [
                        'title' => $component->title,
                        'description' => $component->description,
                        'image' => $component->image ? asset('storage/' . $component->image) : null, // Handle component image if exists
                    ];
                }),
            ],
        ]);
    }


    public function update(Request $request, Slider $slider)
{
    $request->validate([
        'title1' => 'required|string|max:255',
        'title2' => 'required|string|max:255',
        'image' => 'nullable|image|max:2048',
        'components' => 'required|array|min:2',
        'components.*.title' => 'required|string|max:255',
        'components.*.description' => 'required|string',
        'components.*.image' => 'nullable|image|max:2048',
    ], [
        'title1.required' => 'The first title is required.',
        'title2.required' => 'The second title is required.',
        'image.image' => 'The file must be a valid image format (jpeg, png, etc.).',
        'image.max' => 'The image size must not exceed 2MB.',
        'components.required' => 'At least two components are required.',
        'components.min' => 'You need to add at least two components.',
        'components.*.title.required' => 'Each component must have a title.',
        'components.*.title.max' => 'Component title must not exceed 255 characters.',
        'components.*.description.required' => 'Each component must have a description.',
        'components.*.image.image' => 'Each component image must be a valid image file.',
        'components.*.image.max' => 'Each component image must not exceed 2MB.',
    ]);

    if ($request->hasFile('image')) {
        if ($slider->image) {
            Storage::delete('public/' . $slider->image);
        }
        $slider->image = $request->file('image')->store('slides', 'public');
    }

    $slider->title1 = $request->title1;
    $slider->title2 = $request->title2;

    $slider->save();

    foreach ($request->components as $index => $component) {
        $existingComponent = $slider->components[$index];

        if ($component['image']) {
            if ($existingComponent->image) {
                Storage::delete('public/' . $existingComponent->image);
            }
            $existingComponent->image = $component['image']->store('components', 'public');
        }

        $existingComponent->title = $component['title'];
        $existingComponent->description = $component['description'];

        $existingComponent->save();
    }

    return redirect()->route('slider.index')->with('flash', 'Slider updated successfully');
}


    public function destroy(Slider $slider)
    {

        foreach ($slider->components as $component) {
            if ($component->image) {
                Storage::delete("public/{$component->image}");
            }
            $component->delete();
        }

        if ($slider->image) {
            Storage::delete("public/{$slider->image}");
        }

        $sd = $slider->delete();



        return redirect()->route('slider.index')->with('flash', 'Slider deleted successfully.');
    }
}
