<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Response;
use Illuminate\Http\Exceptions\HttpResponseException;

class SurvivorRequest extends FormRequest
{
    public function wantsJson()
    {
        return true;
    }
    protected function failedValidation(Validator $validator)
    {
        if ($this->wantsJson()) {
            throw new HttpResponseException(response()->json([
                'message' => 'The given data was invalid.',
                'errors' => $validator->errors(),
            ], 422));
        }
        parent::failedValidation($validator);
    }

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
            'name' => 'required|min:3|max:100',
            'age' => 'required|numeric',
            'gender' => 'required|min:1|max:10',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric'
        ];
    }
}
