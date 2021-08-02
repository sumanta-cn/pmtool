<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    //protected $stopOnFirstFailure = true;

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
            'project_name' => 'required|unique:projects|max:255',
            'desc' => 'required|string',
            'time'=> 'required|integer|max:100|min:1',
            //'status'=> 'required',
            'file'=> 'mimes:pdf,doc,docx|max:2048',
            // 'created_at'=> 'required',
            // 'updated_at'=> 'required',
        ];
    }
    public function messages(){
        return [
            'project_name.required' => 'Project Name is Required',
            'desc.required' => 'Please Provide a Description',
            'time.required' => 'Please Give a Estimated Time',
            'time.integer' => 'Time should be a number',
            'time.max' => 'Maximum number is 100',
            'time.min' => 'Minimum number is 1',
            'file.mimes' => 'File should be of :values format',
            'file.max' => 'The :attribute must not be greater than 2 MB.',
        ];
    }
}
