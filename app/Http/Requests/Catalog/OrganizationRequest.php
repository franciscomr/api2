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
     * 
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            'data.attributes.address' => 'required | string | min:2 ',
            'data.attributes.city' => 'required | string | min:2 ',
            'data.attributes.state' => 'required | string | min:2 ',
            'data.attributes.postalCode' => 'required | numeric | digits:5',
            'data.attributes.updatedBy' => 'required'
        ];

        if (request()->routeIs('catalog.organizations.store')) {
            $rules += [
                'data.attributes.name' => 'required | string | min:2 | unique:organizations,name',
                'data.attributes.businessName' => 'required | string | min:2 | unique:organizations,businessName',
                'data.attributes.createdBy' => 'required',
            ];
        } elseif (request()->routeIs('catalog.organizations.update')) {
            $rules += [
                'data.attributes.name' => 'required | string | min:2 | unique:organizations,name,' . $this->organization->id,
                'data.attributes.name' => 'required | string | min:2 | unique:organizations,businessName,' . $this->organization->id

            ];
        }

        return $rules;
    }

    protected function prepareForValidation()
    {
        if (auth('sanctum') && request()->routeIs('catalog.organizations.store')) {
            $this->merge(array_replace_recursive($this->all(), [
                'data' => [
                    'attributes' => [
                        'createdBy' => auth('sanctum')->user()->username,
                        'updatedBy' => auth('sanctum')->user()->username
                    ]
                ]
            ]));
        } elseif (auth('sanctum') && request()->routeIs('catalog.organizations.update')) {
            $this->merge(array_replace_recursive($this->all(), [
                'data' => [
                    'attributes' => [
                        'updatedBy' => auth('sanctum')->user()->username
                    ]
                ]
            ]));
        }
    }
}




/*

    public function rules(): array
    {
        return [
            'data.attributes.name' => 'required | string | min:2 | unique:organizations,name',
            'data.attributes.businessName' => 'required | string | min:2 | unique:organizations,businessName',
            'data.attributes.address' => 'required | string | min:2 ',
            'data.attributes.city' => 'required | string | min:2 ',
            'data.attributes.state' => 'required | string | min:2 ',
            'data.attributes.postalCode' => 'required | numeric | digits:5',
            'data.attributes.createdBy' => 'required',
            'data.attributes.updatedBy' => 'required'
        ];
    }

    */