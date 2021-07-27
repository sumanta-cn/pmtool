<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    protected $stopOnFirstFailure = true;

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
            'project_name' => 'bail|required|unique:posts|max:255',
            'description' => 'required',
            'estimated_time'=> 'required',
            'status'=> 'required',
            'document'=> 'mimes:pdf,doc,docx|max:2048',
            'updated_at'=> 'required',
            'updated_at'=> 'required',
        ];
    }
    public function messages(){
        return [
            'project_name.required' => 'Project Name is required',
            'description.required' => 'Please Provide a description',
            'estimated_time.required' => 'Please Give a Estimated Time',
            'document.required' => 'Please Give a Estimated Time',
        ];
    }
}
