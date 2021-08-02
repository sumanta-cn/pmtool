<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'project_name' => 'required|unique:projects|max:255',
            'desc' => 'required|string',
            'time'=> 'required|integer|max:100|min:1',
            'file'=> 'mimes:pdf,doc,docx|max:2048|min:10',
        ];
    }

    public function messages(){
        return [
            'project_name.required' => 'Project Name is Required',
            'desc.required' => 'Please Provide a Description',
            'time.required' => 'Please Give a Estimated Time',
            'time.integer' => 'Time should be a number',
            'time.max' => 'Maximum number is 100 Month',
            'time.min' => 'Minimum number is 1 Month',
            'file.mimes' => 'File should be of :values format',
            'file.max' => 'The :attribute must not be greater than 2 MB.',
            'file.min' => 'The :attribute must not be less than 10 KB.',
        ];
    }
}
