<?php

namespace App\Http\Requests\Desa;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreDesaRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'kecamatan_id' => ['required'],
            'desa' => [
                'required', Rule::unique('desas', 'desa')->where('kecamatan_id', $this->input('kecamatan_id')),
            ],
        ];
    }

    public function messages()
    {
        return [
            'desa.unique' => 'Data Desa di Kecamatan ini suda ada, cek kembali.',
        ];
    }
}
