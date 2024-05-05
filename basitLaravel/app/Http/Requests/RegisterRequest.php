<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function attributes()
    {
        return [
            'name' => 'Name' ,
            'email' => 'Email',
            'password' => 'Password'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'empty fielddddd',
            'name.min' => 'min characterrrs'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required | min:3 | max:30' ,
            'email' => 'required | email | max:50',
            'password' => 'required | min:6 | max:24'
        ];
    }
}
