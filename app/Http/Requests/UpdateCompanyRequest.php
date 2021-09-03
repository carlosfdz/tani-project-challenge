<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $company = $this->route('company');

        return [
            'name' => "required|min:3|max:80|unique:companies,name,$company->id",
            'email' => 'required|min:3|max:80',
            'website' => 'required|url'
        ];
    }
}
