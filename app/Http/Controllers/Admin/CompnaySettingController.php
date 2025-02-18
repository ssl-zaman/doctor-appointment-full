<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanySettingRequest;
use App\Http\Resources\CompanySettingResource;
use App\Models\Setting\CompanySetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class CompnaySettingController extends Controller
{
    public function index()
    {
        $data = CompanySetting::first();
        return Inertia::render('Admin/Settings/Company/Index', [
            'company_setting' => new CompanySettingResource($data)
        ]);
    }


    public function update(Request $request, CompanySetting $company)
    {



        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'company_title' => 'required|string|max:255',
            'phone' => 'nullable|string|max:25',
            'bookbyphone' => 'nullable|string|max:100',
            'work_day' => 'nullable|string|max:100',
            'available_time' => 'nullable|string|max:100',
            'hotline' => 'nullable|string|max:25',
            'whats_app' => 'nullable|string|max:25',
            'email' => 'required|email|max:255',
            'address' => 'nullable|string|max:500',
            'company_logo' => 'nullable',
            'company_fav_icon' => 'nullable',
            'admin_fav_icon' => 'nullable',
            'website_link' => 'nullable|url|max:255',
            'facebook_link' => 'nullable|url|max:255',
            'google_tag' => 'nullable|string',
            'youtube_link' => 'nullable|url|max:255',
            'linkdin_link' => 'nullable|url|max:255',
            'x_link' => 'nullable|url|max:255',
            'tiktok_link' => 'nullable|url|max:255',
            'instagram_link' => 'nullable|url|max:255',
            'about' => 'nullable|string|max:1000',
            'signature' => 'nullable',
            'footer_info' => 'nullable|string|max:1000',
        ]);





        // Find the existing company setting record
        // $companySetting = CompanySetting::find($id);
        $companySetting = $company;
        if (!$companySetting) {
            return redirect()->back()->with('error', 'Company setting not found.');
        }

        // Handle file uploads (check if a new file is present)
        if ($request->hasFile('company_logo')) {
            // Delete the old file if it exists
            if ($companySetting->company_logo) {

                Storage::disk('public')->delete($companySetting->company_logo);
            }
            // Store the new file
            $validated['company_logo'] = $request->file('company_logo')->store('company_logos', 'public');
        }else {
            unset($validated['company_logo']);
        }

        if ($request->hasFile('company_fav_icon')) {
            if ($companySetting->company_fav_icon) {
                Storage::disk('public')->delete($companySetting->company_fav_icon);
            }
            $validated['company_fav_icon'] = $request->file('company_fav_icon')->store('company_fav_icons', 'public');
        }else {
            unset($validated['company_fav_icon']);
        }

        if ($request->hasFile('admin_fav_icon')) {
            if ($companySetting->admin_fav_icon) {
                Storage::disk('public')->delete($companySetting->admin_fav_icon);
            }
            $validated['admin_fav_icon'] = $request->file('admin_fav_icon')->store('admin_fav_icons', 'public');
        }else {
            unset($validated['admin_fav_icon']);
        }


        if ($request->hasFile('signature')) {
            if ($companySetting->signature) {
                Storage::disk('public')->delete($companySetting->signature);
            }
            $validated['signature'] = $request->file('signature')->store('signature', 'public');
        }else {
            unset($validated['signature']);
        }




        $bookbyphoneArray = array_map('trim', explode(',', $request->bookbyphone));

        // dd($bookbyphoneArray);

        $validated = [...$validated, 'bookbyphone' => json_encode($bookbyphoneArray)];

        // Update the company setting data
        $companySetting->update($validated);


        // Redirect back with a success message
        return redirect()->route('company.index')->with('flash', 'Company settings updated successfully.');


    }
}
