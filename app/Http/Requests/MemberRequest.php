<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'gender' => 'required',
            'password' => 'nullable|min:8',
            'phone' => 'required|numeric|digits_between:12,15',
            'status' => 'nullable',
            'address' => 'required',
            'image' => 'nullable|mimes:png,jpg,jpeg,svg,gif|max:5000'
        ];
    }
}
