<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\ClientBaseCompany;

class CompanyFormRequest extends FormRequest
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
        $company = ClientBaseCompany::find($this->id);
        switch ($this->method()) {
            case 'GET':
            case 'DELETE': {
                return [];
            }
            case 'POST': {
                return [
                    'name' => 'required|unique:client_base_companies,name',
                    'address' => 'required',
                    'mobile' => 'required',
                    'land_line' => 'required',
                    'email' => 'required',
                    'type' => 'required',
                    'comments' => 'required'
                ];
            }
            case 'PATCH':
            case 'PUT': {
                return [
                    'name' => 'required|unique:client_base_companies,name,' . $company->id,
                    'address' => 'required',
                    'mobile' => 'required',
                    'land_line' => 'required',
                    'email' => 'required',
                    'type' => 'required',
                    'comments' => 'required'
                ];
            }
            default:
                break;
        }
    }
}