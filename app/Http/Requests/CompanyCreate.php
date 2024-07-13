<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyCreate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array {
        return [
            'name' => 'required',
            'surname' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:companies,email',
            'company_name' => 'required',
        ];
    }


    public function messages(): array {
        return [
            'name.required' => "İsim Alanı Zorunludur!",
            'surname.required' => 'Soyisim Alanı Zorunludur!',
            'phone.required' => 'Telefon Alanı Zorunludur!',
            'company_name.required' => 'Şirket Alanı Zorunludur!',
            'email.required' => 'E-Posta Alanı Zorunludur!',
            'email.email' => 'Geçerli bir e-posta adresi giriniz.',
            'email.unique' => 'Bu e-posta adresi zaten kayitli.',
        ];
    }
}
