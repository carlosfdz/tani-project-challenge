<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
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
        $employee = $this->route('employee');

        return [
            'name' => 'required|min:3|max:80',
            'paternal_surname' => 'required|min:3|max:80',
            'email' => "required|min:3|max:80|email|unique:employees,email,$employee->id",
            'phone' => 'nullable|digits:10',
            'company_id' => ''
        ];
    }
}
