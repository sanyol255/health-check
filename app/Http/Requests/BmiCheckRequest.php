<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BmiCheckRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|alpha',
            'weight' => 'required|numeric|min:1',
            'height' => 'required|numeric|min:1'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Ім\'я є обов\'язковим полем для заповнення',
            'weight.required' => 'Вага є обов\'язковим полем для заповнення',
            'height.required' => 'Зріст є обов\'язковим полем для заповнення',
            'name.alpha' => 'Імя має складатись з одного слова',
            'weight.min' => 'Вага не може бути нулем або від\'ємним значенням',
            'height.min' => 'Зріст не може бути нулем або від\'ємним значенням'
        ];
    }
}
