<?php

namespace app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateApplicationFormRequest extends FormRequest
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
            //
            'firstname' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'password' => 'required',
            'image' => 'required'
        ];
    }
}
