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
            'project_name' => 'required|unique:posts|max:255',
            'description' => 'required',
            'estimated_time'=> 'required',
            'status'=> 'required',
            'created_at'=> 'required',
            'updated_at'=> 'required',
        ];
    }
}
