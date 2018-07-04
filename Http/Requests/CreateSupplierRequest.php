<?php

namespace Modules\Supplier\Http\Requests;

use Modules\Core\Internationalisation\BaseFormRequest;

class CreateSupplierRequest extends BaseFormRequest
{
    public function rules()
    {
        return [
            'supplier_name' => 'required',
            'url' => 'required',
            'support_foreign_ship' => 'required',
            'cat' => 'required'
        ];
    }

    public function translationRules()
    {
        return [];
    }

    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [];
    }

    public function translationMessages()
    {
        return [];
    }
}
