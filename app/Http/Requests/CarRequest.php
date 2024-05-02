<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
            'model' => ['required'],
            'description' => ['required'],
            'merek' => ['required'],
            'image' => ['required'],
            'no_plat' => ['required'],
            'tarif' => ['required'],
        ];
    }
    public function messages()
    {
        return [
            'model.required' => 'Kolom model harus diisi',
            'description.required' => 'Kolom model harus diisi',
            'merek.required' => 'Kolom merek harus diisi',
            'image.required' => 'Kolom image harus diisi',
            'no_plat.required' => 'Kolom no plat harus diisi',
            'tarif.required' => 'Kolom tarif harus diisi',
        ];
    }
}
