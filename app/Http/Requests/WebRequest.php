<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WebRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        // Dynamic Check
        if (request()->routeIs('admin.web.updateBackground')) {
            $coverRule = 'required';
            $otherRule = 'nullable';
        }elseif (request()->routeIs('admin.web.updateContent')) {
            $coverRule = 'nullable';
            $otherRule = 'required';
        }
        return [
            'cover_image' => [$coverRule, 'mimes:png,jpg,jpeg,svg', 'max:5000'],
            'website_name' => [$otherRule, 'min:5'],
            'album_pagination' => [$otherRule ,'numeric|digits_between:1,2'],
            'about_website' => [$otherRule ,'min:10'],
            'email' => [$otherRule ,'email'],
            'phone' => [$otherRule ,'numeric|digits_between:12,15'],
            'github' => [$otherRule],
            'facebook' => ['nullable'],
            'instagram' => ['nullable'],
            'address' => [$otherRule ,'min:10'],
            'footer_content' => [$otherRule ,'min:10']
        ];
    }
}
