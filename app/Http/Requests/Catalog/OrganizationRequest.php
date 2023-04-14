<?php

namespace App\Http\Requests\Catalog;

use Illuminate\Foundation\Http\FormRequest;

class OrganizationRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            'address' => 'required | string | min:2 ',
            'city' => 'required | string | min:2 ',
            'state' => 'required | string | min:2 ',
            'postalCode' => 'required | numeric | digits:5',
            'updatedBy' => 'required'
        ];

        if (request()->routeIs('catalog.organizations.store')) {
            $rules += [
                'name' => 'required | string | min:2 | unique:organizations,name',
                'businessName' => 'required | string | min:2 | unique:organizations,businessName',
                'createdBy' => 'required',
            ];
        } elseif (request()->routeIs('catalog.organizations.update')) {
            $rules += [
                'name' => 'required | string | min:2 | unique:organizations,name,' . $this->organization->id,
                'businessName' => 'required | string | min:2 | unique:organizations,businessName,' . $this->organization->id

            ];
        }

        return $rules;
    }

    protected function prepareForValidation()
    {
        if (request()->routeIs('catalog.organizations.store')) {
            $this->merge(array_replace(
                $this->all(),
                [
                    'name' => $this->input('attributes.name'),
                    'businessName' => $this->input('attributes.businessName'),
                    'address' => $this->input('attributes.address'),
                    'city' => $this->input('attributes.city'),
                    'state' => $this->input('attributes.state'),
                    'postalCode' => $this->input('attributes.postalCode'),
                    'createdBy' => 'Admin',
                    'updatedBy' => 'Admin'
                ]
            ));
        } elseif (request()->routeIs('catalog.organizations.update')) {
            $this->merge(array_replace(
                $this->all(),
                [
                    'name' => $this->input('attributes.name'),
                    'businessName' => $this->input('attributes.businessName'),
                    'address' => $this->input('attributes.address'),
                    'city' => $this->input('attributes.city'),
                    'state' => $this->input('attributes.state'),
                    'postalCode' => $this->input('attributes.postalCode'),
                    'updatedBy' => 'Admin'
                ]
            ));
        }
    }
}
