<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRecipe extends FormRequest
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
            'title' =>'required|max:191|min:10|bail',
            'description' => 'required|min:10',
            'cuisine' => 'required|exists:cuisines,id',
            'category' => 'required|exists:categories,id',
            'ingredients' => 'required',
            'steps' => 'required',
            'image' => 'sometimes|nullable|image',
            'cooktime' => 'sometimes|nullable|date_format:H:i',
            'preptime' => 'sometimes|nullable|date_format:H:i',
            'yield' => 'required|numeric',
            'cooktemp' => 'sometimes|nullable|numeric',

        ];
    }

    public function messages(){
        return [
            'title.required' => 'Title is required',
        ];
    }
}
