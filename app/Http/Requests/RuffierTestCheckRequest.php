<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuffierTestCheckRequest extends FormRequest
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
            'pulse1' => 'required|numeric|min:1',
            'pulse2' => 'required|numeric|min:1',
            'pulse3' => 'required|numeric|min:1'
        ];
    }

    public function messages()
    {
        return [
            'pulse1.required' => 'Поле П1 є обовязковими для заповнення',
            'pulse2.required' => 'Поле П2 є обовязковими для заповнення',
            'pulse3.required' => 'Поле П3 є обовязковими для заповнення',
            'pulse1.min' => 'Поле П1 не може містити значення меньше 1',
            'pulse2.min' => 'Поле П2 не може містити значення меньше 1',
            'pulse3.min' => 'Поле П3 не може містити значення меньше 1',
        ];
    }
}
