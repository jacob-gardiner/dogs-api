<?php

namespace App\Http\Requests\Dogs;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDogRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'sometimes|string|max:255',
            'breed' => 'sometimes|string|max:255',
            'age' => 'sometimes|numeric|min:0',
        ];
    }
}
