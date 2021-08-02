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
            'desc' => 'required',
            'time'=> 'required',
            //'status'=> 'required',
            'file'=> 'mimes:pdf,doc,docx|max:2048',
            // 'created_at'=> 'required',
            // 'updated_at'=> 'required',
        ];
    }
    public function messages(){
        return [
            'project_name.required' => 'Project Name is Required',
            'desc.required' => 'Please Provide a description',
            'time.required' => 'Please Give a Estimated Time',
            'file.required' => 'File should be of :values format',
        ];
    }
}
