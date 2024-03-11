<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class StoreDogRequest extends FormRequest
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
            'path'=>['required' , 'min:3'],
            'name'=>['required' , 'min:3' , 'max:20'],
            'size'=>['required' , 'min:3' , 'max:20'],
            'colour'=>['required' , 'min:3' , 'max:20'],
            
        ];
    }
}
