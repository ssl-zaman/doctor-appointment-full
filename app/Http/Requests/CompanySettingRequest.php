<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanySettingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Set to true for simplicity, can be changed if you want to authorize based on user roles
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'company_name' => 'required|string|max:255',
            'company_title' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:15',
            'hotline' => 'nullable|string|max:15',
            'whats_app' => 'nullable|string|max:15',
            'email' => 'nullable|email|max:255',
            'address' => 'nullable|string|max:500',
            'company_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240', // Max 10MB image
            'company_fav_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'admin_fav_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'website_link' => 'nullable|url|max:255',
            'facebook_link' => 'nullable|url|max:255',
            'google_tag' => 'nullable|string|max:255',
            'youtube_link' => 'nullable|url|max:255',
            'about' => 'nullable|string|max:1000',
            'footer_info' => 'nullable|string|max:1000',
        ];
    }

    /**
     * Get the validation error messages.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'company_name.required' => 'The company name is required.',
            'company_title.required' => 'The company title is required.',
            'email.required' => 'The email address is required.',
            'email.email' => 'Please provide a valid email address.',
            'company_logo.image' => 'The company logo must be an image.',
            'company_logo.max' => 'The company logo may not be greater than 10MB.',
            'website_link.url' => 'The website link must be a valid URL.',
            // Add more custom error messages as needed
        ];
    }
}
