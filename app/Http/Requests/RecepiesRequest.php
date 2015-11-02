<?php

namespace App\Http\Requests;

class RecepiesRequest extends Request
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
            'name' => 'required|min:5',
            'servings_time' => 'required|numeric',
            'cooking_time' => 'required|numeric',
            'prep_time' => 'required|numeric',
            'ingredients' => 'required',
            'methed' => 'required',
            'display' => 'required|numeric'
        ];
    }
}
