<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
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
            'name' => ['required', 'max:20','min:3'],
            'email' => ['required', 'email'],
            'telepon' => ['required'],
            'alamat' => ['required'],
            'no_sim' => ['required'],
            'password' => ['required', Password::min(5)->numbers(), 'regex:/(?=.*[a-z])(?=.*[A-Z])/'],
            'password_confirmation' => ['same:password', 'required']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Kolom nama harus diisi',
            'name.max' => 'Kolom name maximal 20 karakter',
            'name.min' => 'kolom name minimal 3 karakter',
            'email.required' => 'Kolom email harus diisi',
            'email.email' => 'Format email tidak valid',
            'telepon.required' => 'Kolom telepon harus diisi',
            'alamat.required' => 'Kolom alamat harus diisi',
            'no_sim.required' => 'Kolom no sim harus diisi',
            'password.required' => 'Kolom password harus diisi',
            'password.min' => 'Password minimal 5 karakter',
            'password.numbers' => 'Password harus mengandung angka',
            'password.regex' => 'Password harus mengandung huruf besar dan kecil',
            'password_confirmation.same' => 'Konfirmasi password tidak cocok dengan password',
            'password_confirmation.required' => 'Kolom konfirmasi password harus diisi'
        ];
    }
}
