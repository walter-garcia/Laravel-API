<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Response;
use Illuminate\Http\Exceptions\HttpResponseException;

class ItemRequest extends FormRequest
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
            'survivor_id' => 'required|numeric',
            'item' => 'required|min:4|max:15',
            'points' => 'required|numeric'
        ];
    }
}
