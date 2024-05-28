<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MapelRequest extends FormRequest
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
            'kode' => 'required',
            'mapel' => 'required',
            'pengajar' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,png'
        ];
    }

    public function messages(): array{
        return [
            'kode.required' => 'Kode tidak boleh kosong',
            'mapel.required' => 'Mapel tidak boleh kosong',
            'pengajar.required' => 'Pengajar tidak boleh kosong',
            'deskripsi.required' => 'Deskripsi tidak boleh kosong',
            'foto.mimes' => 'Pastikan Format File Benar'
        ];
    }
}
