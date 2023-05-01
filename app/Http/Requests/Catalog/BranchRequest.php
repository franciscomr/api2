<?php

namespace App\Http\Requests\Catalog;

use Illuminate\Foundation\Http\FormRequest;

class BranchRequest extends FormRequest
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
        $rules = [
            'organization_id' => 'required | exists:organizations,id',
            'address' => 'required | string | min:2 ',
            'city' => 'required | string | min:2 ',
            'state' => 'required | string | min:2 ',
            'postalCode' => 'required | numeric | digits:5',
            'updatedBy' => 'required'
        ];

        if (request()->routeIs('catalog.branches.store')) {
            $rules += [
                'name' => 'required | string | min:2 | unique:branches,name',
                'createdBy' => 'required',
            ];
        } elseif (request()->routeIs('catalog.branches.update')) {
            $rules += [
                'name' => 'required | string | min:2 | unique:branches,name,' . $this->branch->id,
            ];
        }

        return $rules;
    }

    protected function prepareForValidation()
    {
        if (request()->routeIs('catalog.branches.store')) {
            $this->merge(array_replace(
                $this->all(),
                [
                    'organization_id' => $this->input('relationships.organization_id'),
                    'name' => $this->input('attributes.name'),
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
                    'organization_id' => $this->input('attributes.organization_id'),
                    'name' => $this->input('attributes.name'),
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
