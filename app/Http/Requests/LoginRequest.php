<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            //
            'email' => 'required',
            'password' =>'required'
        ];
    }

    public function message()
    {
        return [
            //
            'email.required' => 'الايميل مطلوب',
            // 'email.email' => 'تأكد من الايميل',
            'password.required' => 'كلمة المرور مطلوبة'
        ];
    }
}
