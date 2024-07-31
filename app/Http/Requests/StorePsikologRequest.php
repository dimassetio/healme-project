<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePsikologRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|email|unique:psikologs,email',
            'file_foto' => 'mimes:jpeg,jpg,png|max:2048',
            'birthdate' => 'required',
            'phone_number' => 'required',
            'last_education' => 'required',
            'specialization_therapy' => 'required',
            'service_cost_perhour' => 'required',
        ];
    }
}