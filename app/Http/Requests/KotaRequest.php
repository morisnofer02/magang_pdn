<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KotaRequest extends FormRequest
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
            'id_provinsi' => 'required',
            'nama_kota' => 'required',
        ];
    }
    public function messages(): array{
        return [
            'id_provinsi.required' => 'Provinsi tidak boleh kosong',
            'nama_kota.required' => 'Kota tidak boleh kosong'
        ];
    }
}
