<?php

namespace App\Http\Requests\Instansi;

use Illuminate\Foundation\Http\FormRequest;

class StoreInstansiRequest extends FormRequest
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
            'instansi' => [
                'required', 'string', 'max:100', 'unique:instansis',
            ],
        ];
    }
}
