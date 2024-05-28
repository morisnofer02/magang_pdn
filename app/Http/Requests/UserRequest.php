<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'nama' => 'required',
            'email' => 'required',
            'telpon' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,png'
        ];
    }

    public function messages(): array{
        return [
            'nama.required' => 'Nama tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Pastikan Email yang di inputkan',
            'telpon.required' => 'No Telepon Tidak Boleh Kosong',
            'foto.mimes' => 'Pastikan Format File Benar'
        ];
    }
}
