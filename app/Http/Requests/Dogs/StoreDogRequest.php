<?php

namespace App\Http\Requests\Dogs;

use Illuminate\Foundation\Http\FormRequest;

class StoreDogRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'breed' => 'required|string|max:255',
            'age' => 'required|numeric|min:0',
        ];
    }
}
