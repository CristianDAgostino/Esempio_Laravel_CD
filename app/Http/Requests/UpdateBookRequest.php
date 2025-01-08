<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
{
    /**
    * Determine if the user is authorized to make this request.
    */
    public function authorize(): bool
    {
        return true;
    }
    
    /**
    * Get the validation rules that apply to the request.
    *
    * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
    */
    public function rules(): array
    {
        return [
            'title' => 'required|min:2|max:100',
            'author' => 'required',
            'plot' => 'required',
            'cover' => 'image',
            'price' => 'required|numeric|',
        ];
    }
    
    public function messages(){
        return[
            'required' => 'field has to be filled.',
            'min' => 'field :attribute has to be atleast :min',
            'max' => 'field :attribute has to be max :max',
            'image' => 'field has to be filled with an image',
            'numeric' => 'field :attribute has to be filled with a number',
        ];
    }
}

