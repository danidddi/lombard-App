<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InterestRateRequest extends FormRequest
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
            'name'=> ['required', 'min:3', 'max:100'],
            'code'=> ['required', 'max:50'],
            'rate'=> ['required', 'numeric', 'gt:0'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Поле name обязательно для заполнения.',
            'name.min' => 'Поле name должно содержать не менее 3 символов.',
            'name.max' => 'Поле name не должно превышать 100 символов.',
            'code.required' => 'Поле code обязательно для заполнения.',
            'code.max' => 'Поле code не должно превышать 50 символов.',
            'rate.required' => 'Поле rate обязательно для заполнения.',
            'rate.numeric' => 'Поле rate должно быть числом.',
            'rate.gt' => 'Поле rate должно быть больше нуля.',
        ];
    }
}
